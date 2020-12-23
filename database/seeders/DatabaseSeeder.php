<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
            ClassesSeeder::class
        ]);
        \App\Models\User::factory(5)->create();
    }
}
