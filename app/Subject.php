<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    protected $fillable = ['subject_name', 'subject_code', 'subject_credits', 'subject_type_id'];

    public function type() {
        return $this->hasOne('App\SubjectType', 'subject_type_id');
    }

}
