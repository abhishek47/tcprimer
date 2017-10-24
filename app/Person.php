<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function documents()
   {
   	   return $this->hasMany(PeopleDocument::class);
   }
}
