<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'property_id' => 1,
                'description' => '2000 sqft, 3 king sized beds, full kitchen.',
                'price' => 980.00,
                'image' => 'room1.jpg'
            ],
            [
                'property_id' => 1,
                'description' => 'Two queen beds.',
                'price' => 980.00,
                'image' => 'room2.jpg'
            ],
            [
                'property_id' => 3,
                'description' =>  'Luxurious room.',
                'price' => 980.00,
                'image' => 'room3.jpg'
            ]
        ];

        foreach ($rooms as $room) {
            Room::create(array(
                'property_id' => $room['property_id'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image']
            ));
        }
    }
}
