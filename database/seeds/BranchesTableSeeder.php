<?php

use Illuminate\Database\Seeder;

use App\Branch;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::insert(
            ['branch_name'    =>  'Civil Engineering'],
            ['branch_name'    =>  'Computer Science and Engineering'],
            ['branch_name'    =>  'Electrical & Electronics Engineering'],
            ['branch_name'    =>  'Electronics and Communication Engineering'],
            ['branch_name'    =>  'Information Technology'],
            ['branch_name'    =>  'Mechanical Engineering'],
        );
    }
}
