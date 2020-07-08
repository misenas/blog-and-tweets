<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;  

class Entry extends Model
{
    // $entry->user

    public function user(){
        return $this->belongsTO(User::class);
    }

    //mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=$value;
        $this->attributes['slug']=Str::slug($value);
    }

    public function getUrl()
    {
        return url("entries/$this->slug-$this->id");
    }
}