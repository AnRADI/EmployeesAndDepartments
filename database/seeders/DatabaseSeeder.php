<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Teacher::factory(6)->create();

		$this->call([
			DisciplineSeeder::class,
			DisciplineTeacherSeeder::class
		]);
    }
}
