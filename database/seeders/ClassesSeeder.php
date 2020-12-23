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
                'name' => 'Front End Class 11-2020',
                'userId' => 1,
                'subjectId' => 1,
                'created_at' => now(),

            ],
            [

                'id' => 2,
                'name' => 'Back End Class 11-2020',
                'userId' => 1,
                'subjectId' => 2,
                'created_at' => now(),

            ],
        ];
        Classes::insert($data);
    }
}
