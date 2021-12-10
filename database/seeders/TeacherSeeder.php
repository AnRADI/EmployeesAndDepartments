<?php

namespace Database\Seeders;
use App\Models\Teacher;

use Illuminate\Database\Seeder;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 1; $i <= 6; ++$i) {

			Teacher::factory()->create(['photo' => "/images/teachers/teacher{$i}.jpg"]);
		}
    }
}
