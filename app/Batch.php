<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model {

    protected $table="batches";
    
    public static function allbatches() {
        $batches = DB::table('batches')->groupby('course_id')->get();
        return $batches;
    }
    
     public function student()
    {
        return $this->belongsTo('App\Student','batch_id','id');
    }
    
        public function course()
    {
        return $this->hasOne('App\Course','id','course_id');
    }

}
