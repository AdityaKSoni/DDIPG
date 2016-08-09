<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterBranchSubject extends Model
{
    protected $table = 'semester_branch_subjects';
    protected $primaryKey = 'semester_branch_subject_id';
    protected $fillable = ['semester_branch_id', 'subject_id', 'start_session_id', 'end_session_id'];

    public function info() {
        return $this->belongsTo('App\SemesterBranch', 'semester_branch_id');
    }

    public function subject() {
        return $this->belongsTo('App\Subject', 'subject_id');
    }

    public function startSession() {
        return $this->belongsTo('App\Session', 'start_session_id');
    }

    public function endSession() {
        return $this->belongsTo('App\Session', 'end_session_id');
    }

}
