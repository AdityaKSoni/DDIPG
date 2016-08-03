<?php

use Illuminate\Database\Seeder;

use App\Semester;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create(['semester_name' =>  '1']);
        Semester::create(['semester_name' =>  '2']);
        Semester::create(['semester_name' =>  '3']);
        Semester::create(['semester_name' =>  '4']);
        Semester::create(['semester_name' =>  '5']);
        Semester::create(['semester_name' =>  '6']);
        Semester::create(['semester_name' =>  '7']);
        Semester::create(['semester_name' =>  '8']);
        Semester::create(['semester_name' =>  '9']);
        Semester::create(['semester_name' =>  '10']);
    }
}
