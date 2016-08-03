<?php

use Illuminate\Database\Seeder;

use App\Semester;
use App\Branch;
use App\SemesterBranch;

class SemesterBranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semesters = Semester::all();
        $branches = Branch::all();
        foreach ($semesters as $semester) {
            foreach ($branches as $branch) {
                SemesterBranch::create(['semester_id' => $semester->semester_id, 'branch_id' => $branch->branch_id]);
            }
        }
    }
}
