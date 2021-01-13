<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_description = ["Lop hoc vui ve", "Vui Qua di a", "Hello lop hoc"];
        $data = [
            [
                'id' => 1,
                'name' => 'Front End',
                'userId' => 1,
                'description'=> $data_description[rand(0,2)],
                'avatar' => 'https://appdu-storage.s3.ap-southeast-1.amazonaws.com/course_avatar/class_5fc30c1a97cb213ce9c895f8_1606998172727_449526',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Back End',
                'userId' => 1,
                'description'=> $data_description[rand(0,2)],
                'avatar' => 'https://appdu-storage.s3.ap-southeast-1.amazonaws.com/course_avatar/class_5fc30c1a97cb213ce9c895f8_1606998172727_449526',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Fullstack',
                'userId' => 1,
                'description'=> $data_description[rand(0,2)],
                'avatar' => 'https://appdu-storage.s3.ap-southeast-1.amazonaws.com/course_avatar/class_5fc30c1a97cb213ce9c895f8_1606998172727_449526',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Python',
                'userId' => 2,
                'description'=> $data_description[rand(0,2)],
                'avatar' => 'https://appdu-storage.s3.ap-southeast-1.amazonaws.com/course_avatar/class_5fc30c1a97cb213ce9c895f8_1606998172727_449526',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Golang',
                'userId' => 2,
                'description'=> $data_description[rand(0,2)],
                'avatar' => 'https://appdu-storage.s3.ap-southeast-1.amazonaws.com/course_avatar/class_5fc30c1a97cb213ce9c895f8_1606998172727_449526',
                'created_at' => now(),
            ]
        ];
        Subject::insert($data);
    }
}
