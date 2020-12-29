<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [

                'id' => 1,
                'name' => 'Front End Class 7-2020',
                'userId' => 1,
                'subjectId' => 1,
                'created_at' => now(),
                'status' => 2, // ngung hoat dong
            ],
            [

                'id' => 2,
                'name' => 'Back End Class 11-2020',
                'userId' => 1,
                'subjectId' => 2,
                'created_at' => now(),
                'status' => 1,
            ],
            [

                'id' => 3,
                'name' => 'Full stack Class 11-2020',
                'userId' => 2,
                'subjectId' => 3,
                'created_at' => now(),
                'status' => 1,
            ],
            [

                'id' => 4,
                'name' => 'Python Class 11-2020',
                'userId' => 2,
                'subjectId' => 4,
                'created_at' => now(),
                'status' => 1,
            ],
            [

                'id' => 5,
                'name' => 'Golang Class 11-2020',
                'userId' => 1,
                'subjectId' => 5,
                'created_at' => now(),
                'status' => 1,
            ],
            [

                'id' => 6,
                'name' => 'Front End Class 02-2021',
                'userId' => 2,
                'subjectId' => 1,
                'created_at' => now(),
                'status' => 1,
            ],
        ];
        Classes::insert($data);
    }
}
