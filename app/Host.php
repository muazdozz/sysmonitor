<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model {
	protected $table = 'hosts';

	protected $fillable = [
		'ipaddress',
		'os_hostname',
		'os_distro',
		'os_release',
		'os_arch',
		'os_logofile',
		'cpu_manufacturer',
		'cpu_brand',
		'cpu_brand',
		'cpu_speed',
		'cpu_cores',
		's_manufacturer',
		's_model',
		's_serial',
		's_uuid',
		'uptime',
		'site_id',
		'status',
	];

	public function site() {
		return $this->belongsTo('App\Site');
	}
}
