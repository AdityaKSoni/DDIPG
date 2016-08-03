<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';
    protected $primaryKey = 'session_id';
    protected $fillable = ['session_name', 'session_started', 'session_ended'];
}
