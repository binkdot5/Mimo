<?php

use Illuminate\Database\Seeder;
use App\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
            [
                'user_id' => '1',
                'property_id' => 1,
                'arrival' => '2020-05-18',
                'departure' => '2020-05-28',
                'price' => 699,
                'total_price' => 899
            ],
            [
                'user_id' => '1',
                'property_id' => 2,
                'arrival' => '2020-05-10',
                'departure' => '2020-05-12',
                'price' => 699,
                'total_price' => 899
            ],
            [
                'user_id' => '2',
                'property_id' => 3,
                'arrival' => '2020-05-06',
                'departure' => '2020-05-07',
                'price' => 699,
                'total_price' => 899
            ]
        ];

        foreach ($reservations as $reservation) {
            Reservation::create(array(
                'user_id' => $reservation['user_id'],
                'property_id' => $reservation['property_id'],
                'arrival' => $reservation['arrival'],
                'departure' => $reservation['departure'],
                'price' => $reservation['price'],
                'total_price' => $reservation['total_price']
            ));
        }
    }
}
