<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{
    //
    use SoftDeletes;

    protected $guarded=[];

    /*
     * @delete the image file from the storage
     *
     * */

    public function deleteImage(){

        Storage::delete($this->image);
    }

    /**
     *
     * check if the  post has a tag
     * @return bool
     *
     */

    public function hasTag($tagId){
        return in_array($tagId,$this->tags->pluck('id')->toArray());
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function tags(){

        return $this->belongsToMany(Tag::class);
    }

    public function user(){
        return  $this->belongsTo(User::class);
    }

    public function scopeSearched($query){

        $search = request()->query('search');

        if(!$search){

            return $query;

        }

        return $query->where('title','LIKE',"%{$search}%");

    }
}
