<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieRolePeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_role_people')->insert([
            'people_id' => 1,
            'movie_id' => 3,
            'role_id' => 1,
            'rolename' => "Batman",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
