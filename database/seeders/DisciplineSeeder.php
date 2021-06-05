<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DisciplineSeeder extends Seeder
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
				'name' => 'Английский',
				'start_date' => '2021-12-09 08:00:00',
				'end_date' => '2022-01-09 09:30:00'
			],
			[
				'name' => 'Химия',
				'start_date' => '2021-12-09 09:45:00',
				'end_date' => '2022-01-09 11:15:00'
			],
			[
				'name' => 'Физика',
				'start_date' => '2021-12-09 11:30:00',
				'end_date' => '2022-01-09 13:00:00'
			],
			[
				'name' => 'Экономика',
				'start_date' => '2021-12-09 13:15:00',
				'end_date' => '2022-01-09 14:45:00'
			],
			[
				'name' => 'Электроника',
				'start_date' => '2021-12-09 15:00:00',
				'end_date' => '2022-01-09 16:30:00'
			],
			[
				'name' => 'Программирование С++',
				'start_date' => '2021-12-09 16:45:00',
				'end_date' => '2022-01-09 18:15:00'
			],
			[
				'name' => 'Ассемблер',
				'start_date' => '2021-12-10 08:00:00',
				'end_date' => '2022-01-10 09:30:00'
			],
			[
				'name' => 'Рисование',
				'start_date' => '2021-12-10 09:45:00',
				'end_date' => '2022-01-10 11:15:00'
			],
		];


		\DB::table('disciplines')->insert($data);

    }
}
