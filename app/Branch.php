<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    protected $primaryKey = 'branch_id';

    protected $fillable = ['branch_name'];

}
