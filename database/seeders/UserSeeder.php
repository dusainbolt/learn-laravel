<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // user admin
          [
              'id' => 1,
              'email' => 'dulh181199@gmail.com',
              'fullName' => 'Du Sainbolt',
              'phoneNumber' => '0328111597',
              'facebook' => 'https://www.facebook.com/dusainbolt',
              'role' => 'admin',
              'birthday' => 1605691730
          ],
        ];

        // truncate bang user

        User::insert($data);
    }
}
