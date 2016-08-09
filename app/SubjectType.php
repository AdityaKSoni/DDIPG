<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectType extends Model
{
    protected $table = 'subject_types';
    protected $primaryKey = 'subject_type_id';
    protected $fillable = ['subject_type_name', 'subject_type_category'];

    public function subjects() {
        return $this->belongsTo('App\Subject', 'subject_type_id');
    }

}
