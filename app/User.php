<?php

namespace App;

use App\Traits\RestTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use RestTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    /**
    27      * Find out if user has a specific role
    28      *
    29      * $return boolean
    30      */
    public function hasRole($check)
    {
        //dd($this->roles);
        //dd(in_array($check, array_fetch($this->roles->toArray(), 'name')));
        return in_array($check, array_pluck($this->roles->toArray(), 'name'));
    }
    /**
    37      * Get key in array with corresponding value
    38      *
    39      * @return int
    40      */
    private function getIdInArray($array, $term)
    {
        foreach ($array as $key => $value) {
            if ($value == $term) {
                return $key;
            }
        }
        throw new UnexpectedValueException;
    }

    public function person(){
        return $this->hasOne('App\Models\Person');
    }

    public function kiosques(){
        return $this->hasMany('App\Models\Kiosque');
    }

}
