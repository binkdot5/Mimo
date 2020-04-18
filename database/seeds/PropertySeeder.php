<?php

use App\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'id' => 1,
                'title' => 'Central Downtown Apartment with Amenities',
                'description' => 'Come and stay at this modern and comfortable apartment! My home is centrally located right in the middle of the downtown. Talk about convenience! Shops, stores, and other destination areas are nearby.
                                Feel the warmth of the sun as there is plenty of natural light showers. The living room features tv, sofa, table, radio, and fan. There is free wi-fi with a fast internet speed.
                                Forgot shopping for breakfast staples? We provide eggs, bread, cereals, coffee, milk, tea and cookies. Enjoy cooking as my kitchen boasts full size appliances. The dining table is for four people. 
                                Need to wash your clothes? There is a washer and a dryer. We provide hampers, detergents, and clothing conditioner. If you need to hit the gym, there is located at the fourth floor of the building. There is indoor spa and pool.',
                'address' => '221, Kipps Lane',
                'category' => 'Apartment',
                'bed_room' => 1,
                'bath_room' => 1,
                'gallery' => 'apartment1.jpg',
                "score" => 4.25,
                "review" => 'Lorem Ipusm',
                'user_id' => 1,
                "active" => true,
                'utility_heating' => true,
                'utility_wifi' => true,
                'utility_patio' => false,
                'kitchen_fridge' => true,
                'kitchen_freezer' => true,
                'kitchen_oven' => true,
                'kitchen_stove' => true,
                'kitchen_potspans' => false,
                'kitchen_microwave' => true,
                'kitchen_dishwasher' => false,
                'bathroom_shower' => true,
                'bathroom_sink' => true,
                'bathroom_toilet' => true,
                'bathroom_bathtub' => false,
                'bathroom_window' => true
            ],
                
            [
                'id' => 2,
                'title' => 'The Treasure Chest',
                'description' => 'Clean and quiet lower level space. This is a quiet house and quiet neighbourhood. Welcoming you to enjoy the space.',
                'address' => '123, Byron St.',
                'category' => 'House',
                'bed_room' => 1,
                'bath_room' => 1,
                'gallery' => 'apartment2.jpg',
                "score" => 4.25,
                "review" => 'Really cool place!',
                'user_id' => 1,
                "active" => true,
                'utility_heating' => true,
                'utility_wifi' => true,
                'utility_patio' => false,
                'kitchen_fridge' => true,
                'kitchen_freezer' => true,
                'kitchen_oven' => true,
                'kitchen_stove' => true,
                'kitchen_potspans' => false,
                'kitchen_microwave' => true,
                'kitchen_dishwasher' => false,
                'bathroom_shower' => true,
                'bathroom_sink' => true,
                'bathroom_toilet' => true,
                'bathroom_bathtub' => false,
                'bathroom_window' => true
            ],

            [
                'id' => 3,
                'title' => 'Central House nearby Fanshawe Downtown Campus',
                'description' => 'Clean and quiet lower level space. This is a quiet house and quiet neighbourhood. Welcoming you to enjoy the space.',
                'address' => '606 Central Avenue',
                'category' => 'House',
                'bed_room' => 1,
                'bath_room' => 1,
                'gallery' => 'apartment3.jpg',
                "score" => 4.48,
                "review" => 'Super duper!',
                'user_id' => 2,
                "active" => true,
                'utility_heating' => true,
                'utility_wifi' => true,
                'utility_patio' => false,
                'kitchen_fridge' => true,
                'kitchen_freezer' => true,
                'kitchen_oven' => true,
                'kitchen_stove' => true,
                'kitchen_potspans' => false,
                'kitchen_microwave' => true,
                'kitchen_dishwasher' => false,
                'bathroom_shower' => true,
                'bathroom_sink' => true,
                'bathroom_toilet' => true,
                'bathroom_bathtub' => true,
                'bathroom_window' => true
            ]


        ];

        foreach ($properties as $property) {
            Property::create(array(
                'title' => $property['title'],
                'description' => $property['description'],
                'address' => $property['address'],
                'category' => $property['category'],
                'bed_room' => $property['bed_room'],
                'bath_room' => $property['bath_room'],
                'gallery' => $property['gallery'],
                'score' => $property['score'],
                'review' => $property['review'],
                'user_id' => $property['user_id'],
                'active' => $property['active'],
                'utility_heating' => $property['utility_heating'],
                'utility_wifi' => $property['utility_wifi'],
                'utility_patio' => $property['utility_patio'],
                'kitchen_fridge' => $property['kitchen_fridge'],
                'kitchen_oven' => $property['kitchen_oven'],
                'kitchen_stove' => $property['kitchen_stove'],
                'kitchen_potspans' => $property['kitchen_potspans'],
                'kitchen_microwave' => $property['kitchen_microwave'],
                'kitchen_dishwasher' => $property['kitchen_dishwasher'],
                'bathroom_shower' => $property['bathroom_shower'],
                'bathroom_sink' => $property['bathroom_sink'],
                'bathroom_toilet' => $property['bathroom_toilet'],
                'bathroom_bathtub' => $property['bathroom_bathtub'],
                'bathroom_window' => $property['bathroom_window']
            ));
        }
    }
}
