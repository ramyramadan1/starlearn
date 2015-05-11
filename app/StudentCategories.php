<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCategories extends Model {

    protected $table="student_categories";
    
    
     public function student()
    {
        return $this->belongsTo('App\Student','student_category_id','id');
    }
    

}
