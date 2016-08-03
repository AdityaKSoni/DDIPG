<?php

use Illuminate\Database\Seeder;

use App\SubjectType;

class SubjectTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubjectType::create(['subject_type_name' =>  'Theory', 'subject_type_category' => 'compulsory']);
        SubjectType::create(['subject_type_name' =>  'Theory', 'subject_type_category' => 'optional']);
        SubjectType::create(['subject_type_name' =>  'Practical', 'subject_type_category' => 'compulsory']);
        SubjectType::create(['subject_type_name' =>  'Practical', 'subject_type_category' => 'optional']);
    }
}
