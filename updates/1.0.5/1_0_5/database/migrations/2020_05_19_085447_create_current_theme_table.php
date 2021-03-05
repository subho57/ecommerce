<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrentThemeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('current_theme', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('top_offer');
			$table->integer('header');
			$table->integer('carousel');
			$table->integer('banner');
			$table->integer('footer');
			$table->text('product_section_order', 65535);
			$table->integer('cart');
			$table->integer('news');
			$table->integer('detail');
			$table->integer('shop');
			$table->integer('contact');
			$table->integer('login');
			$table->integer('transitions');
			$table->integer('banner_two');
			$table->integer('category')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('current_theme');
	}

}
