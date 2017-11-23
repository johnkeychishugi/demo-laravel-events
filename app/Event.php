<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name','description','location','price','starts_at'];

    //protected $dates = ['starts_at'];
     protected $casts = [
    	'starts_at'=>'datetime',
    	'price'=>'float'
    ];
    protected $appends = ['fake_price'];

    public function isFree()
    {
    	return	$this->price == 0;
    }

    public function getFakePriceAttribute($value)
    {
    	return  $this->attributes['price'] + 100;
    }
}
