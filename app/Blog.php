<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $guarded=[];

    public function path(){
        return "/blogs/{$this->id}";
    }
}
