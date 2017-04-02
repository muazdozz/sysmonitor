<?php

namespace App\Http\Controllers;

use App\Site;

class SiteController extends Controller {
	protected $sites;

	public function __construct(Site $sites) {
		$this->sites = $sites;
	}
	public function index() {
		$sites = $this->sites->paginate(20);
		return view('site.index', compact('sites'));
	}
}
