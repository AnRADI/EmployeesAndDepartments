<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

	protected $guarded = [
		'_method',
		'_token',
	];


	// ========== RELATIONSHIPS ============

	public function department() {

		return $this->belongsTo(Department::class);
	}




	// =========== METHODS =============


	// ---------- Employee Controller -----------

    public function paginateEmployeesDepartmentE() {

    	$columns = [
    		'id',
    		'department_id',
			'name',
			'date_of_birth',
			'position',
			'type_of_employee',
			'monthly_pay'
		];

    	$employees = $this
			->select($columns)
			->with('department:id,name')
			->paginate(10);


    	return $employees;
	}



}
