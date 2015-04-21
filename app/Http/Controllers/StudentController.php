<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Student;
use App\Countries;
use \App\Batch;
use DB;
class StudentController extends Controller {

        protected $layout = 'layouts.master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
	public function index()
	{
	      return view('student/index');
	}

        
        public  function view_all()
        {
            
            $students=Student::all();
            $batches = DB::table('batches')->where('is_deleted',0)->groupby('name')->orderBy('id','asc')->get();
            //$batches=  Batch::all()->groupBy('course_id')->get();

            return view('student/viewall',array('students'=>$students,'content'=>'this is content','batches'=>$batches));
          
        }
        
        public function profile($student_id)
        {
            
        }
        
        public function get_student_on_batchid()
                
        {
            $batch_id=Request::input('batch_id');
            $students=Student::all()->where('batch_id', $batch_id);
        }
        
         

        /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}