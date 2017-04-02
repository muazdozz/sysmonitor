<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Site;

class DashboardController extends Controller {
	protected $sites;

	public function __construct(Site $sites) {
		$this->sites = $sites;
	}

	public function index() {
		$sites = $this->sites->all();
		return view('dashboard.index', compact('sites'));
	}
	//
}
