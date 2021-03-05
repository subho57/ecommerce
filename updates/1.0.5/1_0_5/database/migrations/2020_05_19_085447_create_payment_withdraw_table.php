<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentWithdrawTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_withdraw', function(Blueprint $table)
		{
			$table->integer('payment_withdraw_id', true);
			$table->integer('user_id');
			$table->float('amount', 10)->nullable();
			$table->timestamps();
			$table->boolean('status')->default(1);
			$table->string('method');
			$table->text('note', 65535)->nullable();
			$table->integer('orders_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment_withdraw');
	}

}
