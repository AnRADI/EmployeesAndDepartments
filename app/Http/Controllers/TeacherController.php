<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
	public $teacher;

	public function __construct() {

		$this->teacher = new Teacher();
	}


    public function index()
    {
    	$teachers = $this->teacher
			->getTeachersTI();


        return view('teachers.index', compact('teachers'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }



    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
