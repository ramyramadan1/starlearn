<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    protected $table="courses";
    
    
     public function batch()
    {
        return $this->belongsTo('App\Batch','course_id','id');
    }

}
