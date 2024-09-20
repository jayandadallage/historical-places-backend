<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    public function run() {
        Place::create([
            'name' => 'The Colosseum',
            'description' => 'A large amphitheater in Rome, Italy, known for gladiatorial contests and public spectacles.',
            'image_url' => 'https://example.com/images/colosseum.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'The Great Wall of China',
            'description' => 'A series of fortifications made of stone, brick, tamped earth, and other materials, built along the northern borders of China.',
            'image_url' => 'https://example.com/images/great_wall.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'The Pyramids of Giza',
            'description' => 'Ancient pyramid structures located in Egypt, built as tombs for pharaohs.',
            'image_url' => 'https://example.com/images/pyramids_giza.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'Machu Picchu',
            'description' => 'A 15th-century Inca citadel located in the Eastern Cordillera of southern Peru.',
            'image_url' => 'https://example.com/images/machu_picchu.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'The Eiffel Tower',
            'description' => 'A wrought-iron lattice tower in Paris, France, and one of the most recognizable structures in the world.',
            'image_url' => 'https://example.com/images/eiffel_tower.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'Taj Mahal',
            'description' => 'An ivory-white marble mausoleum located in Agra, India, built by Mughal emperor Shah Jahan in memory of his wife.',
            'image_url' => 'https://example.com/images/taj_mahal.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'Stonehenge',
            'description' => 'A prehistoric monument located in Wiltshire, England, consisting of a ring of standing stones.',
            'image_url' => 'https://example.com/images/stonehenge.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'The Acropolis of Athens',
            'description' => 'An ancient citadel located on a rocky outcrop above the city of Athens and containing the remains of several ancient buildings of great architectural significance.',
            'image_url' => 'https://example.com/images/acropolis_athens.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'Christ the Redeemer',
            'description' => 'An Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil, one of the New Seven Wonders of the World.',
            'image_url' => 'https://example.com/images/christ_redeemer.jpg',
            'visited' => false,
        ]);

        Place::create([
            'name' => 'The Alhambra',
            'description' => 'A palace and fortress complex located in Granada, Andalusia, Spain.',
            'image_url' => 'https://example.com/images/alhambra.jpg',
            'visited' => false,
        ]);
    }
}

