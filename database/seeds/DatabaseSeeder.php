<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\models\model_employee;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('EmployeeTableSeeder');
	}

}


class EmployeeTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('employee')->delete();
        model_employee::create(['emp_name' => 'Indra']);
    }

}