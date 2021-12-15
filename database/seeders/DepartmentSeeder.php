<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DepartmentSeeder extends Seeder
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
				'name' => 'IT',
			],
			[
				'name' => 'logistics',
			],
			[
				'name' => 'finance',
			],
			[
				'name' => 'sales',
			],
			[
				'name' => 'cadres',
			],
		];


		\DB::table('departments')->insert($data);

    }
}
