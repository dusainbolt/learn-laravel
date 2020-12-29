<?php

namespace Database\Seeders;

use App\Models\CourseRequests;
use Illuminate\Database\Seeder;

class CourseRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $data_time_duration = [5400, 7200, 9000];
        $data_skill = ["Reactjs, Laravel, Mysql", "Nodejs, Angular", "Golang, Php, C++"];
        for($i = 3; $i <= 57; $i++){
          $data[] = [
            'id'=> $i,
              'frequency' => rand(1,3),
              'durationTime' => $data_time_duration[rand(0,2)],
              'targetTop' => rand(1,3),
              'wishJob' => rand(1,3),
              'completeExercise' => rand(1,3),
              'outCondition' => rand(1,3),
              'nowSkill' => $data_skill[rand(0,2)],
              'mission' => 'Hua se ngoan',
              'userId' => $i,
              'classId' => rand(2,6),
              'status' => 3,
              'created_at' => now(),
          ];
        }
        CourseRequests::insert($data);
    }
}
