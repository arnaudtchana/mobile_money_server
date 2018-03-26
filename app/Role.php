<?php

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use RestTrait;
    //
    protected $fillable = [
        'name'
    ];
}
