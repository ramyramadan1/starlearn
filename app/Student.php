<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
            protected $table = 'students';
                 
    public function country()
    {
        return $this->hasOne('App\Countries','id','country_id');
    }
}
