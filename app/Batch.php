<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model {

    protected $table="batches";
    
    public static function allbatches() {
        $batches = DB::table('batches')->groupby('course_id')->get();
        return $batches;
    }

}
