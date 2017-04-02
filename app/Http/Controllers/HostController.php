<?php

namespace App\Http\Controllers;
use App\Host;
use App\Site;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HostController extends Controller {

	protected $hosts;

	protected $sites;

	function __construct(Host $hosts, Site $sites) {
		$this->hosts = $hosts;
		$this->sites = $sites;
	}

	/**
	 * Host Index
	 * @return view
	 */
	public function index() {
		$hosts = $this->hosts->paginate(20);
		return view('host.index', compact('hosts'));
	}

	/**
	 * Create a new host
	 * @return view
	 */
	public function create() {
		$host = $this->hosts;
		$sites = $this->sites->pluck('name', 'id');
		return view('host.form', compact('host', 'sites'));
	}

	function show($id) {
		if ($host = $this->hosts->findOrfail($id)) {
			$sites = $this->sites->pluck('name', 'id');
			return view('host.form', compact('host', 'sites'));

		}
	}

	public function store(Request $request) {
		$input = $request->all();
		$host = $this->hosts->create($input);
		return redirect(route('hosts.index'))->withSuccess(trans('posts/messages.success.update'));

	}

	public function fetch($id) {
		if ($host = $this->hosts->findOrfail($id)) {
			$response = Curl::to($host->ipaddress . ':4321/api')
				->asJson()->get();

			// return 'asdasd';
			return view('host-details', compact('host', 'response'));
		}

	}
}
