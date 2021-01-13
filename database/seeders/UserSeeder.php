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
              'fullName' => 'Du Sainbolt',
              'birthday' => 1605691730,
              'email' => 'dulh181199@gmail.com',
              'job' => 'sinh viên',
              'avatar' => 'https://appdu-storage.s3-ap-southeast-1.amazonaws.com/118005360_928999227584443_8060562362571425079_o.png',
              'facebook' => 'https://www.facebook.com/dusainbolt',
              'gender' => 1,
              'country' => 'Ninh Bình',
              'phoneNumber' => '0328111597',
              'role' => ROLE_USER_ADMIN,
              'status' => STATUS_USER_ACTIVE,
              'created_at' => now(),
          ],
            [
                'id' => 2,
                'fullName' => 'Biên tập viên',
                'birthday' => 1605691730,
                'email' => 'appdu.hotro@gmail.com',
                'job' => 'sinh viên',
                'avatar' => 'https://appdu-storage.s3-ap-southeast-1.amazonaws.com/118005360_928999227584443_8060562362571425079_o.png',
                'facebook' => 'https://www.facebook.com/dusainbolt1',
                'gender' => 1,
                'country' => 'Ninh Bình',
                'phoneNumber' => '0328111596',
                'role' => ROLE_USER_ADMIN,
                'status' => STATUS_USER_ACTIVE,
                'created_at' => now(),
            ],
        ];
        // truncate bang user
        User::insert($data);
    }
}
