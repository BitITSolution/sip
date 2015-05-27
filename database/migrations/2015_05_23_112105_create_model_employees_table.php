<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee', function(Blueprint $table)
		{
      $table->increments('emp_id');
      $table->string('emp_name',255);
      $table->string('emp_username',255);
      $table->string('emp_password',32);
      $table->string('emp_nickname');
      $table->string('emp_country');
      $table->string('emp_state');
      $table->string('emp_city');
      $table->string('emp_address');
      $table->string('emp_postal');
      $table->string('emp_url_dropbox');
      $table->string('emp_url_facebook');
      $table->string('emp_url_twitter');
      $table->string('emp_url_instagram');
      $table->string('emp_status');
      $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('model_employees');
	}

}
