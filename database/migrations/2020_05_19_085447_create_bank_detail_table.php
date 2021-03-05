<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_detail', function(Blueprint $table)
		{
			$table->integer('bank_detail_id', true);
			$table->string('bank_name');
			$table->string('bank_account_number');
			$table->string('bank_routing_number');
			$table->string('bank_address');
			$table->string('bank_iban');
			$table->string('bank_swift');
			$table->integer('users_id');
			$table->boolean('is_current')->default(0);
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
		Schema::drop('bank_detail');
	}

}
