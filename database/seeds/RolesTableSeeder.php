<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert(
            ['role_id'     =>  '1', 'role_name'   =>  'root'],
            ['role_id'     =>  '2', 'role_name'   =>  'admin'],
            ['role_id'     =>  '3', 'role_name'   =>  'faculty'],
            ['role_id'     =>  '4', 'role_name'   =>  'student'],
        );
    }
}
