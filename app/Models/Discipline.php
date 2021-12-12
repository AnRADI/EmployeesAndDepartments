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
}
