<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Student;
use App\Countries;
use App\Nationalities;
use App\Batch;
use DB;

class StudentController extends Controller {

        protected $layout = 'layouts.master';
        
        
         /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
        
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
            $batches = DB::table('courses')->get();
         
            //$batches=  Batch::all()->groupBy('course_id')->get();

            return view('student/viewall',array('students'=>$students,'content'=>'this is content','batches'=>$batches));
          
        }
        
        public function profile($student_id)
        {       $student_details=DB::table('students')->
                join('batches','batches.id','=','students.batch_id')->
                join('courses','batches.course_id','=','courses.id')->
                join('student_categories','student_categories.id','=','students.student_category_id')->
                select('batches.name as batch_name','courses.course_name','student_categories.name as student_cat_name','students.*')->where('students.id',$student_id)->get();
                
                $s_d=Student::find($student_id);
               
            return view('student/profile',array('s_d'=>$s_d));
        }
        
        public function get_student_on_batchid()
                
        {
            $course_id=Request::input('course_id');
            $students=DB::table('students')->join('batches','batches.id','=','students.batch_id')->join('courses','batches.course_id','=','courses.id')->select('students.first_name','students.middle_name','students.last_name','students.admission_no')->where('batches.course_id',2)->get();    
            echo json_encode($students); 
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
