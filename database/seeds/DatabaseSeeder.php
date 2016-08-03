<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(SemestersTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(SemesterBranchesTableSeeder::class);
    }
}
