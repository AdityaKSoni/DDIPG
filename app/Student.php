<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $primaryKey = 'student_id';

    protected $fillable = ['enrollment_no', 'user_id', 'branch_id', 'semester_id'];

    public function info() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function branch() {
        return $this->belongsTo('App\Branch', 'branch_id');
    }

    public function semester() {
        return $this->belongsTo('App\Semester', 'semester_id');
    }

}
