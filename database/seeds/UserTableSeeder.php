<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  env('ROOT_NAME', 'Root'),
            'email' =>  env('ROOT_MAIL', 'root@website.com'),
            'mobile' => env('ROOT_MOB', '9876543210'),
            'password' => bcrypt(env('ROOT_PASS', '9876543210')),
            'role_id' => True,
            'status' => 1
        ]);
    }
}
