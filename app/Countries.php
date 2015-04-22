<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model {

	 protected $table = 'countries';
         
           public function student()
    {
        return $this->belongsTo('App\Student','country_id','id');
    }

}
