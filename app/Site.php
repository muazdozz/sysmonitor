<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {
	protected $table = 'sites';

	protected $fillable = [
		'name',
		'slug',
		'description',
		'geo_codes',
		'address',
		'email',
	];

	public function hosts() {
		return $this->hasMany('App\Host');
	}
}
