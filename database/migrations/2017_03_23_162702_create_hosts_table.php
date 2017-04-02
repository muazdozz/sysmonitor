<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHostsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('hosts', function (Blueprint $table) {
			$table->increments('id');
			$table->ipAddress('ipaddress')->unique();
			$table->string('os_hostname');
			$table->string('os_distro')->nullable();
			$table->string('os_release')->nullable();
			$table->string('os_arch')->nullable();
			$table->string('os_logofile')->nullable();
			$table->string('cpu_manufacturer')->nullable();
			$table->string('cpu_brand')->nullable();
			$table->string('cpu_speed')->nullable();
			$table->integer('cpu_cores')->nullable();
			$table->string('s_manufacturer')->nullable();
			$table->string('s_model')->nullable();
			$table->string('s_serial')->nullable();
			$table->string('s_uuid')->nullable();
			$table->string('uptime')->nullable();
			$table->integer('site_id')->unsigned();
			$table->foreign('site_id')->references('id')->on('sites');
			$table->boolean('status')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('hosts');
	}
}
