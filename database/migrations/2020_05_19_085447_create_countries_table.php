<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->integer('countries_id', true);
			$table->string('countries_name', 191)->index('IDX_COUNTRIES_NAME');
			$table->char('countries_iso_code_2', 2);
			$table->char('countries_iso_code_3', 3);
			$table->integer('address_format_id');
			$table->integer('country_code')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
