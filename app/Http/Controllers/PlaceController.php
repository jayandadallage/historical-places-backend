<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\VisitedPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    public function index() {
        return Place::with('images:id,place_id,image_url')->get()->map(function($place) {
            // Convert images collection to a simple array of image URLs
            $place->images = $place->images->pluck('image_url');
            return $place;
        });
    }


    public function store(Request $request)
    {
        $place = Place::create($request->only(['name', 'description', 'visited']));
    
        // Handle multiple image uploads
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                PlaceImage::create([
                    'place_id' => $place->id,
                    'image_url' => $image, // Assuming $image is a URL or you can handle file uploads
                ]);
            }
        }
    
        return response()->json($place->load('images'));
    }
    
    public function markVisited($id) {
        $place = Place::findOrFail($id);
        $place->visited = !$place->visited;
        $place->save();
        return response()->json(['status' => 'success']);
    }

    public function toggleVisited(Request $request, $placeId)
    {
        $userId = $request->user()->id; // Assuming you're using authentication

        // Check if the place is already visited
        $visitedPlace = VisitedPlace::where('user_id', $userId)->where('place_id', $placeId)->first();

        if ($visitedPlace) {
            // Unmark as visited
            $visitedPlace->delete();
            return response()->json(['message' => 'Place unmarked as visited.']);
        } else {
            // Mark as visited
            VisitedPlace::create([
                'user_id' => $userId,
                'place_id' => $placeId,
            ]);
            return response()->json(['message' => 'Place marked as visited.']);
        }
    }

    public function getVisitedPlaces(Request $request)
    {
        $userId = $request->user()->id;

        $visitedPlaces = VisitedPlace::where('user_id', $userId)
            ->with('place.images') // Load all images for the place
            ->get()
            ->map(function ($visitedPlace) {
                $place = $visitedPlace->place;
                return [
                    'id' => $place->id,
                    'name' => $place->name,
                    'description' => $place->description,
                    'image_urls' => $place->images->pluck('image_url')->toArray(), // Return all image URLs as an array
                ];
            });

        return response()->json($visitedPlaces);
    }

    public function show($id)
{
    // Assume you have a user authenticated (e.g., via a token-based system)
    $user = auth()->user(); // Get the authenticated user

    // Load the place with its images
    $place = Place::with('images')->find($id);

    if (!$place) {
        return response()->json(['message' => 'Place not found'], 404);
    }

    // Check if this place has been visited by the user
    $visited = DB::table('visited_places')
        ->where('place_id', $place->id)
        ->where('user_id', $user->id)
        ->exists(); // Check if an entry exists for this user and place

    // Add the visited status to the response
    $place->visited = $visited ? 1 : 0; // Add visited status (1 if visited, 0 otherwise)

    return response()->json($place);
}


}
