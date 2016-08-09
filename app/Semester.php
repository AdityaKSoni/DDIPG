<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semesters';
    protected $primaryKey = 'semester_id';
    protected $fillable = ['semester_name'];

    public function students()
    {
        return $this->hasMany('App\Student', 'semester_id');
    }

    public function branches() {
        return $this->hasMany('App\SemesterBranch', 'semester_id');
    }

}
