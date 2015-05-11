<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalities extends Model {

	 protected $table = 'countries';
         
           public function student()
    {
        return $this->belongsTo('App\Student','nationality_id','id');
    }

}
