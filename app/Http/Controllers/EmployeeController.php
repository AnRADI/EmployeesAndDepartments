<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
	public $employee, $department;

	public function __construct() {

		$this->employee = new Employee();
		$this->department = new Department();
	}


    public function employees()
    {
    	$employees = $this->employee
			->paginateEmployeesDepartmentE();


        return view('pages.employees', compact('employees'));
    }

}
