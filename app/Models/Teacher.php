<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;



	// =========== METHODS =============


	// ---------- Teacher Controller -----------

    public function getTeachersTI() {

    	$columns = [
    		'name',
			'surname',
			'email',
			'photo'
		];

    	$teachers = $this
			->select($columns)
			->get();

    	return $teachers;
	}
}
