<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'prefectures',
        'vocal',
        'guiter',
        'guiter_vocal',
        'bass',
        'drums',
        'keyboard',
        'brass',
        'strings',
        'dj',
        'etc',
        'pr'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
