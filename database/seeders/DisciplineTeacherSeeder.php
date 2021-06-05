<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DisciplineTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data = [
			[
				'teacher_id' => 1,
				'discipline_id' => 1
			],
			[
				'teacher_id' => 1,
				'discipline_id' => 2
			],
			[
				'teacher_id' => 2,
				'discipline_id' => 3
			],
			[
				'teacher_id' => 2,
				'discipline_id' => 4
			],
			[
				'teacher_id' => 3,
				'discipline_id' => 5
			],
			[
				'teacher_id' => 3,
				'discipline_id' => 6
			],
			[
				'teacher_id' => 4,
				'discipline_id' => 7
			],
			[
				'teacher_id' => 4,
				'discipline_id' => 8
			],
			[
				'teacher_id' => 5,
				'discipline_id' => 1
			],
			[
				'teacher_id' => 5,
				'discipline_id' => 2
			],
			[
				'teacher_id' => 6,
				'discipline_id' => 3
			],
			[
				'teacher_id' => 6,
				'discipline_id' => 4
			],
		];


		\DB::table('discipline_teacher')->insert($data);

    }
}
