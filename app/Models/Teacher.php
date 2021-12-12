<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

	protected $guarded = [
		'_method',
		'_token',
	];


	// ========== RELATIONSHIPS ============

	public function disciplines() {

		return $this->belongsToMany(Discipline::class);
	}


	// =========== METHODS =============


	// ---------- Teacher Controller -----------

    public function paginateTeachersDisciplinesTI() {

    	$columns = [
    		'id',
    		'name',
			'surname',
			'email',
			'photo'
		];

    	$teachers = $this
			->select($columns)
			->with('disciplines:id,name')
			->paginate(4);

    	return $teachers;
	}


	public function firstTeacherDisciplinesTE($id) {

		$columns = [
			'id',
			'name',
			'surname',
			'email',
			'photo'
		];

		$teacher = $this
			->select($columns)
			->where('id', $id)
			->with('disciplines:id,name')
			->first();


		return $teacher;
	}
}
