<!DOCTYPE html>
<html>
<head>
	<title>HOSTS</title>
</head>
<body>
	<section class="hero is-small is-info is-bold">
	  <div class="hero-body">
	    <div class="container">
	      <h1 class="title">
	        Host Status
	      </h1>
	      <h2 class="subtitle">
	        All hosts connected to the network
	      </h2>
	    </div>
	  </div>
	</section>


	<div class="container">
	  <table class="table">
	  <thead>
	    <tr>
	      <th>Host</th>
	      <th>IP</th>
	      <th>Status</th>
	      <th>Uptime</th>
	      <th>Last Updated</th>
	    </tr>
	  </thead>

	  <tbody>
		@foreach ($hosts as $host)
		<tr>
			<td><a href="{{ route('hosts.fetch',[$host->id]) }}">{{ $host->hostname }}</a></td>
			<td>{{ $host->ipaddress }}</td>
			<td><span class="tag is-success">Up</span></td>
			<td>{{ $host->uptime }}</td>
			<td>{{ $host->updated_at }}</td>
		</tr>
		@endforeach
			{{-- expr --}}

	  </tbody>
	  </table>
	</div>




	<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
			Sysmon - 2017
      </p>
    </div>
  </div>
</footer>

</body>
</html>