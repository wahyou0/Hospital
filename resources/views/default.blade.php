<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body style="background-color: #f3fdf3">
    
<div class="container">
	<br/>
	<br/>
	<div class="text-center">
	<h2>Multi Step</h2>
	</div>
	<br/>
    @yield('content')
</div>
   
</body>

</html>