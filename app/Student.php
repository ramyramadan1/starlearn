<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
            protected $table = 'students';
                 
    public function country()
    {
        return $this->hasOne('App\Countries','id','country_id');
    }
    
    public function nationality()
    {
        return $this->hasOne('App\Countries','id','nationality_id');
    }
    public function batch()
    {
        return $this->hasOne('App\Batch','id','batch_id');
    }
    
    public function studentCategory()
    {
        return $this->hasOne('App\StudentCategories','id','student_category_id');
    }
}
