<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterBranchSubject extends Model
{
    protected $table = 'semester_branch_subjects';
    protected $primaryKey = 'semester_branch_subject_id';
    protected $fillable = ['semester_branch_id', 'subject_id', 'start_session_id', 'end_session_id'];
}
