<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';
    protected $primaryKey = 'result_id';
    protected $fillable = ['student_id', 'semester_branch_subject_id', 'session_id', 'marks_endsem', 'marks_quiz', 'marks_midsem1', 'marks_midsem2', 'marks_midsem3'];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }

    public function session() {
        return $this->belongsTo('App\Session', 'session_id');
    }

}
