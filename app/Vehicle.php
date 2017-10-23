<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
     protected $fillable = ['name', 'uniqid', 'type', 'fuel_type', 'high_speed', 'plate_no', 'description'];


      public function getRouteKeyName()
	   {
	     return 'uniqid';
	   }


	   public function documents()
	   {
	   	   return $this->hasMany(Document::class);
	   }
}
