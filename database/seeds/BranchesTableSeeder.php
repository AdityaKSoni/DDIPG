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
        Branch::create(['branch_name' =>  'Civil Engineering']);
        Branch::create(['branch_name' =>  'Computer Science and Engineering']);
        Branch::create(['branch_name' =>  'Electrical & Electronics Engineering']);
        Branch::create(['branch_name' =>  'Electronics and Communication Engineering']);
        Branch::create(['branch_name' =>  'Information Technology']);
        Branch::create(['branch_name' =>  'Mechanical Engineering']);
    }
}
