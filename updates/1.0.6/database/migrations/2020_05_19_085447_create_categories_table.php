<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->integer('categories_id', true);
			$table->text('categories_image', 65535)->nullable();
			$table->text('categories_icon', 65535);
			$table->integer('parent_id')->default(0)->index('idx_categories_parent_id');
			$table->integer('sort_order')->nullable();
			$table->dateTime('date_added')->nullable();
			$table->dateTime('last_modified')->nullable();
			$table->string('categories_slug', 191);
			$table->boolean('categories_status')->default(1);
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
		Schema::drop('categories');
	}

}
