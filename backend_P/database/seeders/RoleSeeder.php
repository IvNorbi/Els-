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
        $role->name = "színész/színésznő";
        $role->save();

        $role = new Role();
        $role->name = "rendező";
        $role->save();

        $role = new Role();
        $role->name = "operatőr";
        $role->save();

        $role = new Role();
        $role->name = "író";
        $role->save();

        $role = new Role();
        $role->name = "forgatókönyvíró";
        $role->save();

        $role = new Role();
        $role->name = "producer";
        $role->save();

        $role = new Role();
        $role->name = "zene";
        $role->save();

        $role = new Role();
        $role->name = "vágó";
        $role->save();
    }
}
