<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
	public $department;

	public function __construct() {

		$this->department = new Department();
	}


	public function employeesDepartment($id)
    {
    	$department = $this->department
			->firstDepartmentEmployeesED($id);

    	$employees = $department->employees()->paginate(10);


        return view('pages.department', compact('department','employees'));
    }
}
