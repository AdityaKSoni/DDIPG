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
        Semester::insert(
            ['semester_name'    =>  '1'],
            ['semester_name'    =>  '2'],
            ['semester_name'    =>  '3'],
            ['semester_name'    =>  '4'],
            ['semester_name'    =>  '5'],
            ['semester_name'    =>  '6'],
            ['semester_name'    =>  '7'],
            ['semester_name'    =>  '8'],
            ['semester_name'    =>  '9'],
            ['semester_name'    =>  '10'],
        );
    }
}
