<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

	protected $guarded = [
		'_method',
		'_token',
	];


	// ========== RELATIONSHIPS ============

	public function employees() {

		return $this->hasMany(Employee::class);
	}


	// =========== METHODS =============


	// ---------- Employee Controller -----------

	public function getDepartmentsE() {

		$columns = [
			'id',
			'name',
		];

		$departments = $this
			->select($columns)
			->get();

		return $departments;
	}

	// ---------- Employee Controller -----------

	public function firstDepartmentEmployeesED($id) {

		$columns = [
			'id',
			'name',
		];

		$department = $this
			->select($columns)
			->where('id', $id)
			->with('employees:id,department_id,name,date_of_birth,position,type_of_employee,monthly_pay')
			->first();


		return $department;
	}
}
