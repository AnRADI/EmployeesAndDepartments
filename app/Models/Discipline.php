<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

	protected $guarded = [
		'_method',
		'_token',
	];


	// =========== METHODS =============


	// ---------- Teacher Controller -----------

	public function getDisciplinesTC() {

		$columns = [
			'id',
			'name',
		];

		$disciplines = $this
			->select($columns)
			->get();

		return $disciplines;
	}


	public function getDisciplinesTE() {

		$columns = [
			'id',
			'name',
		];

		$disciplines = $this
			->select($columns)
			->get();

		return $disciplines;
	}


	public function arrayDisciplinesId() {

		$allDisciplinesId = $this
			->pluck('id')
			->toArray();

		return $allDisciplinesId;
	}


	// ---------- Discipline Controller -----------

	public function paginateDisciplinesDI() {

		$columns = [
			'id',
			'name',
			'start_date',
			'end_date',
		];

		$disciplines = $this
			->select($columns)
			->paginate(4);


		return $disciplines;
	}


	public function firstDisciplineDE($id) {

		$columns = [
			'id',
			'name',
			'start_date',
			'end_date',
		];

		$discipline = $this
			->select($columns)
			->where('id', $id)
			->first();

		return $discipline;
	}


	public function firstDisciplineDU($id) {

		$columns = [
			'id',
			'name',
			'start_date',
			'end_date',
		];

		$discipline = $this
			->select($columns)
			->where('id', $id)
			->first();

		return $discipline;
	}
}
