<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $primaryKey = 'subject_id';

    protected $fillable = ['subject_name', 'subject_code', 'subject_credits'];

}
