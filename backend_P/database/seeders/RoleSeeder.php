<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->role = "színész/színésznő";
        $role->save();

        $role = new Role();
        $role->role = "rendező";
        $role->save();
    }
}
