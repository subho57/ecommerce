<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConstantBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('constant_banners', function(Blueprint $table)
		{
			$table->integer('banners_id', true);
			$table->string('banners_title', 191);
			$table->text('banners_url', 65535);
			$table->text('banners_image', 65535);
			$table->dateTime('date_added');
			$table->boolean('status')->default(0);
			$table->integer('languages_id');
			$table->string('type', 55);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('constant_banners');
	}

}
