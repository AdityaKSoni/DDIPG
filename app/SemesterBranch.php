<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterBranch extends Model
{
    protected $table = 'semester_branches';
    protected $primaryKey = 'semester_branch_id';
    protected $fillable = ['semester_id', 'branch_id'];
}
