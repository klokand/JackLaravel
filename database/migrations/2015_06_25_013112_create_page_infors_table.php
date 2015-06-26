<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageInforsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_infors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('company_name');
			$table->text('about_us');
			$table->text('strength_1');
			$table->text('strength_2');
			$table->text('strength_3');
			$table->text('service_1');
			$table->text('service_2');
			$table->text('service_3');
			$table->text('service_4');
			$table->text('service_5');
			$table->text('service_6');
			$table->text('contact_us');
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
		Schema::drop('page_infors');
	}

}
