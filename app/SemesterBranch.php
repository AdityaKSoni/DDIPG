<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterBranch extends Model
{
    protected $table = 'semester_branches';
    protected $primaryKey = 'semester_branch_id';
    protected $fillable = ['semester_id', 'branch_id'];

    public function semester()
    {
        return $this->belongsTo('App\Semester', 'semester_id');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'branch_id');
    }

}
