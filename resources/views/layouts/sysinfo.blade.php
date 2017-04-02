<!DOCTYPE html>
<html>
<head>
	<title>System Monitoring System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">
</head>
<body>
<div class="container">
	@include('modules.nav')

</div>




@yield('content')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.2.4"></script>
@stack('scripts')

</body>
</html>