<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

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
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function scopeSearch(Builder $query,array $params)
    {
        if(!empty($params['prefectures'])) $query->where('prefectures',$params['prefectures']);
        
        
        if(array_key_exists('vocal',$params)){
            $query->where('vocal','=',$params['vocal']);
        }
        if(array_key_exists('guiter_vocal',$params)){
            $query->where('guiter_vocal','=',$params['guiter_vocal']);
        }
        if(array_key_exists('guiter',$params)){
            $query->where('guiter','=',$params['guiter']);
        }        
        if(array_key_exists('bass',$params)){
            $query->where('bass','=',$params['bass']);
        }
        if(array_key_exists('drums',$params)){
            $query->where('drums','=',$params['drums']);
        }
        if(array_key_exists('keyboard',$params)){
            $query->where('keyboard','=',$params['keyboard']);
        }
        if(array_key_exists('brass',$params)){
            $query->where('brass','=',$params['brass']);
        }
        if(array_key_exists('strings',$params)){
            $query->where('strings','=',$params['strings']);
        }
        if(array_key_exists('dj',$params)){
            $query->where('dj','=',$params['dj']);
        }
        if(array_key_exists('etc',$params)){
            $query->where('etc','=',$params['etc']);
        }
        
        return $query;
    }
    
}
