<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('sites')->insert([
			'name' => 'National Centre for Information Technology',
			'slug' => 'ncit',
			'description' => 'main pop',
			'geo_codes' => '',
			'address' => 'National Centre for Information Technology
						64, Kalaafaanu Hingun,
						Male’ 20064
						Republic of Maldives
						Phone Number : +(960)334-4000
						Alternative Number : +(960)799-9388
						Fax Number :+(960)334-4004
						E-mail: secretariat@ncit.gov.mv',
			'email' => 'mohamed.irshaam@gmail.com',
		]);

		DB::table('sites')->insert([
			'name' => 'APIIT',
			'slug' => 'apiit',
			'description' => 'main pop',
			'geo_codes' => '',
			'address' => 'National Centre for Information Technology
						64, Kalaafaanu Hingun,
						Male’ 20064
						Republic of Maldives
						Phone Number : +(960)334-4000
						Alternative Number : +(960)799-9388
						Fax Number :+(960)334-4004
						E-mail: secretariat@ncit.gov.mv',
			'email' => 'mohamed.irshaam@gmail.com',
		]);
	}
}
