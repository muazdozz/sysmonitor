<!DOCTYPE html>
<html>
<head>
	<title>HOSTS</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">
</head>
<body>
	<section class="hero is-small is-info is-bold">
	  <div class="hero-body">
	    <div class="container">
	      <h1 class="title">
	        {{ $host->hostname }}
	      </h1>
	      <h2 class="subtitle">
	        {{ $host->ipaddress }}
	      </h2>
	    </div>
	  </div>
	</section>

	<div class="container" style="margin-top:40px; margin-bottom:40px;">
{{ $response->os->distro }}
{{ $response->os->hostname }}
{{ $response->cpu->manufacturer }}
{{ $response->cpu->brand }}
{{ $response->cpu->cores }}
{{ $response->cpu->speed }} .GHZ


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