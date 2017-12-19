<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function comments()
    {
    	return $this->hasMany(comment::class);
    }
    public static function archives()
    {
    	return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
                            ->groupBy('year','month')
                            ->orderByRaw('min(created_at) DESC')
                            ->get(); 
    }
}
