<?php

namespace Database\Seeders;

use App\Models\PlaceImage;
use Illuminate\Database\Seeder;

class PlaceImageSeeder extends Seeder
{
    public function run() {
        // The Colosseum (Place ID: 1)
        PlaceImage::create(['place_id' => 1, 'image_url' => 'https://cdn.britannica.com/36/162636-050-932C5D49/Colosseum-Rome-Italy.jpg']);
        PlaceImage::create(['place_id' => 1, 'image_url' => 'https://cdn.britannica.com/03/98303-050-C8036C9D/Interior-Colosseum-Rome.jpg']);
        PlaceImage::create(['place_id' => 1, 'image_url' => 'https://cdn.mos.cms.futurecdn.net/BiNbcY5fXy9Lra47jqHKGK.jpg']);
        PlaceImage::create(['place_id' => 1, 'image_url' => 'https://colosseumrometickets.com/wp-content/uploads/2018/06/What-was-colosseum-used-for-810x614.jpg']);
        PlaceImage::create(['place_id' => 1, 'image_url' => 'https://tnphotos.s3.ca-central-1.amazonaws.com/uploads/2024/01/Underground-of-the-Colosseum-e1706216628515.jpg']);

        // The Great Wall of China (Place ID: 2)
        PlaceImage::create(['place_id' => 2, 'image_url' => 'https://images.nationalgeographic.org/image/upload/t_edhub_resource_key_image/v1638892506/EducationHub/photos/the-great-wall-of-china.jpg']);
        PlaceImage::create(['place_id' => 2, 'image_url' => 'https://d3hne3c382ip58.cloudfront.net/files/uploads/bookmundi/resized/cmsfeatured/visiting-the-great-wall-of-china-featured-image-1560845062-785X440.jpg']);
        PlaceImage::create(['place_id' => 2, 'image_url' => 'https://media.tacdn.com/media/attractions-content--1x-1/12/3f/a5/7e.jpg']);
        PlaceImage::create(['place_id' => 2, 'image_url' => 'https://images.travelandleisureasia.com/wp-content/uploads/sites/3/2023/02/23142544/Jinshanling-great-wall.jpg']);
        PlaceImage::create(['place_id' => 2, 'image_url' => 'https://www.wanderlustmagazine.com/wp-content/uploads/2023/11/5-1-scaled.jpg']);

        // The Pyramids of Giza (Place ID: 3)
        PlaceImage::create(['place_id' => 3, 'image_url' => 'https://content.r9cdn.net/rimg/dimg/9a/61/3dc6f5bb-city-25999-16ea40716ab.jpg?width=1200&height=630&xhint=2045&yhint=2190&crop=true']);
        PlaceImage::create(['place_id' => 3, 'image_url' => 'https://www.travelandleisure.com/thmb/U6Ts4f8fanbARIPQO9pEGzd8icA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/giza-pyramid-EGYPTSECRETS1016-617b2b1b23dd4fd38bc9f365af7235ab.jpg']);
        PlaceImage::create(['place_id' => 3, 'image_url' => 'https://www.lecole.edu.pk/wp-content/uploads/2022/01/1.png']);
        PlaceImage::create(['place_id' => 3, 'image_url' => 'https://media.architecturaldigest.com/photos/668d67dca98fc5c9ed566bf1/master/w_1600%2Cc_limit/GettyImages-1277362064.jpg']);
        PlaceImage::create(['place_id' => 3, 'image_url' => 'https://media.architecturaldigest.com/photos/580665c6cdff3c07101deec9/16:9/w_2560%2Cc_limit/pyramid-01.jpg']);

        // Machu Picchu (Place ID: 4)
        PlaceImage::create(['place_id' => 4, 'image_url' => 'https://www.savacations.com/wp-content/uploads/2014/09/Chile-Moai-Anakena-Beach.jpg']);
        PlaceImage::create(['place_id' => 4, 'image_url' => 'https://cdn.britannica.com/25/180725-050-03DE70E6/area-Machu-Picchu-Peru.jpg']);
        PlaceImage::create(['place_id' => 4, 'image_url' => 'https://i.natgeofe.com/n/819ea774-aa80-435e-af5a-ae56efee7ce3/92491.jpg']);
        PlaceImage::create(['place_id' => 4, 'image_url' => 'https://content.r9cdn.net/rimg/dimg/4c/ac/7e6077e1-city-45618-165ce416a23.jpg?crop=true&width=1020&height=498']);
        PlaceImage::create(['place_id' => 4, 'image_url' => 'https://www.travelandleisure.com/thmb/nL1Cjj823Nv1cnMnovXQVkeI-ME=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/TAL-machu-picchu-PICCHU1223-7462339438874799bf003fd1d00cb432.jpg']);

        // The Eiffel Tower (Place ID: 5)
        PlaceImage::create(['place_id' => 5, 'image_url' => 'https://media.cntraveler.com/photos/58de89946c3567139f9b6cca/16:9/w_2560%2Cc_limit/GettyImages-468366251.jpg']);
        PlaceImage::create(['place_id' => 5, 'image_url' => 'https://i.natgeofe.com/k/6d4021bf-832e-49f6-b898-27b7fcd7cbf7/eiffel-tower-ground-up_3x2.jpg']);
        PlaceImage::create(['place_id' => 5, 'image_url' => 'https://www.hotellouvremarsollier.com/images/monuments/eiffel_tower.jpg']);
        PlaceImage::create(['place_id' => 5, 'image_url' => 'https://img.theweek.in/content/dam/week/news/world/images/2019/5/16/eiffel_130.jpg']);
        PlaceImage::create(['place_id' => 5, 'image_url' => 'https://fivecolorsoftravel.com/wp-content/uploads/2023/04/et3-1.jpg']);

        // Taj Mahal (Place ID: 6)
        PlaceImage::create(['place_id' => 6, 'image_url' => 'https://i.natgeofe.com/n/8eba070d-14e5-4d07-8bab-9db774029063/93080_3x2.jpg']);
        PlaceImage::create(['place_id' => 6, 'image_url' => 'https://skift.com/wp-content/uploads/2022/06/GettyImages-1208049833-scaled-e1654782364566-1024x682.jpg']);
        PlaceImage::create(['place_id' => 6, 'image_url' => 'https://res.cloudinary.com/enchanting/q_70,f_auto,w_1440,h_810,c_fill,g_face/enchanting-web/2023/09/taj2.jpg']);
        PlaceImage::create(['place_id' => 6, 'image_url' => 'https://acuvrfkwen.cloudimg.io/width/1500/q35.foil1/https://voyageinstyle.net/wp-content/uploads/2019/08/TajMahal-main.jpg']);
        PlaceImage::create(['place_id' => 6, 'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Taj_Mahal_Mosque_Interior_Hall.jpg']);

        // Stonehenge (Place ID: 7)
        PlaceImage::create(['place_id' => 7, 'image_url' => 'https://media.newyorker.com/photos/59094e24019dfc3494e9d0d5/4:3/w_2339,h_1754,c_limit/140421_r24882.jpg']);
        PlaceImage::create(['place_id' => 7, 'image_url' => 'https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_768/v1644257168/post_images/london-2/Stonehenge/stonehenge-4_Cropped.jpg']);
        PlaceImage::create(['place_id' => 7, 'image_url' => 'https://cdn.mos.cms.futurecdn.net/q4i42ws72RZ3sEcx2QT3iV-1200-80.jpg']);
        PlaceImage::create(['place_id' => 7, 'image_url' => 'https://ichef.bbci.co.uk/news/976/cpsprodpb/5DE6/production/_107483042_mediaitem107483041.jpg']);
        PlaceImage::create(['place_id' => 7, 'image_url' => 'https://cdn.britannica.com/12/60112-050-E856C922/Stonehenge-earthwork-site-Wiltshire-England-Early-Bronze.jpg']);

        // The Acropolis of Athens (Place ID: 8)
        PlaceImage::create(['place_id' => 8, 'image_url' => 'https://cdn-imgix.headout.com/microbrands-banner-image/image/b698f96a3bf7e35418940973f33c4708-The%20Acropolis%20of%20Athens.jpeg']);
        PlaceImage::create(['place_id' => 8, 'image_url' => 'https://media.cntraveler.com/photos/551dc0d196bfd1f1482d850e/16:9/w_2560,c_limit/acropolis-athens-greece.jpg']);
        PlaceImage::create(['place_id' => 8, 'image_url' => 'https://www.kastra.eu/pics/acropolis-postal.jpg']);
        PlaceImage::create(['place_id' => 8, 'image_url' => 'https://thetourguy.com/wp-content/uploads/2021/09/Acropolis-Arial-Image-Athens-1440-x-675.jpg']);
        PlaceImage::create(['place_id' => 8, 'image_url' => 'https://cdn.britannica.com/20/99620-050-E2022699/Acropolis-Athens.jpg']);

        // Christ the Redeemer (Place ID: 9)
        PlaceImage::create(['place_id' => 9, 'image_url' => 'https://cdn.britannica.com/54/150754-050-5B93A950/statue-Christ-the-Redeemer-Rio-de-Janeiro.jpg']);
        PlaceImage::create(['place_id' => 9, 'image_url' => 'https://media.cntraveler.com/photos/58629e8e440f8ba323b9bbea/16:9/w_2560%2Cc_limit/christ-the-redeemer-statue-rio-cr-GettyImages-523194487.jpg']);
        PlaceImage::create(['place_id' => 9, 'image_url' => 'https://www.thisiscolossal.com/wp-content/uploads/2023/06/sens-1.jpg']);
        PlaceImage::create(['place_id' => 9, 'image_url' => 'https://nowinrio.com/wp-content/uploads/2023/06/Christ-the-Redeemer-Tours-1024x695.jpg']);
        PlaceImage::create(['place_id' => 9, 'image_url' => 'https://publisher-ncreg.s3.us-east-2.amazonaws.com/pb-ncregister/swp/hv9hms/media/20231122221124_45448c583eabca7ad6be347939c641312d4ce7570209ad29d3345175aea14fec.jpg']);

        // The Alhambra (Place ID: 10)
        PlaceImage::create(['place_id' => 10, 'image_url' => 'https://blogs-images.forbes.com/geoffreymorrison/files/2015/10/Alhambra-by-Geoffrey-Morrison-17.jpg']);
        PlaceImage::create(['place_id' => 10, 'image_url' => 'https://cdn-imgix.headout.com/media/images/4f89d6eeb324e19ee61af4fb172380e9-18731-granada-the-alhambra-palace---skip-the-line-e-ticket-with-audio-tour-on-your-phone-04.jpg']);
        PlaceImage::create(['place_id' => 10, 'image_url' => 'https://d2rdhxfof4qmbb.cloudfront.net/wp-content/uploads/20200616183729/iStock-532188731.jpg']);
        PlaceImage::create(['place_id' => 10, 'image_url' => 'https://www.myartprints.co.uk/kunst/french_school/Interior-of-the-Alhambra-Granada.jpg']);
        PlaceImage::create(['place_id' => 10, 'image_url' => 'https://landlopers.com/wp-content/uploads/2017/04/Alhambra-Granada-Spain.jpg']);
    }
}
