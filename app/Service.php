<?php

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use RestTrait;
    //
    protected $fillable = [
        'nom', 'description','logo'
    ];

    public function kiosques(){
        return $this->belongsToMany('App\Kiosque');
    }
}
