<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User ([
            'id' => 1,
            'avatar' => 'avatar.jpg',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'college' => 'Fanshawe',
            'dob' => '1985-12-12',
            'email' => 'admin@hotmail.com',
            'password' => '12345678',
            'is_admin' => 1,
            'terms' => 1,
        ]);

        $user->save();
    }
}
