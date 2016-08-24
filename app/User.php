<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'mobile', 'image'];
    protected $hidden = ['password', 'remember_token', 'role_id',];

    public function role() {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function hasRole($roles) {
        if(is_array($roles)) {
            foreach($roles as $need_role){
                if($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    private function checkIfUserHasRole($need_role) {
        return (strtolower($need_role) == strtolower($this->role->role_name)) ? true : false;
    }

}
