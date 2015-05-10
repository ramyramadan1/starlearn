<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
use App\Students;
use App\Batch;
use DB;
use Datatables;

class StudentsController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Admin Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('Admin/students/index');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function create_edit() {
        return view('Admin/students/create_edit');
        // $students = Students::all();
        // return Datatables::of(Students::select(array('id', 'first_name', 'middle_name')))->make();
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function create() {
        return view('Admin/students/create');
        // $students = Students::all();
        // return Datatables::of(Students::select(array('id', 'first_name', 'middle_name')))->make();
    }

    
    
    /**
     * Show the form for creating a new students.
     *
     * @return Response
     */
    public function getCreate()
    {
        // Show the page
        return view('Admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate(NewsCategoryRequest $request)
    {
    }
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * return json object with all students .
     *
     * @return Response
     */
    public function data() {
        //    $students = Students::select('*');
        // var_dump($students);
        //return Datatables::of($students)->make(true);
        $students = Students::select(['id', 'first_name', 'middle_name']);

        //return Datatables::of($students)->make();


        return Datatables::of($students)
                        ->addColumn('action', function($students) {
                            return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'
                                    . ' <a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-remove"></i> Remove</a>';
                        })
                        ->make(true);



        // $students = Students::all();
        //  return Datatables::of(Students::select(array('id', 'first_name', 'middle_name')))->make();
    }

}
