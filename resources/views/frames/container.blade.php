	
	

	
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href='/assets/css/bootstrap.css'>
		<link rel="stylesheet" type="text/css" href='/assets/css/app.css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Bilz</a>					
			</div>
			<ul class="nav navbar-nav">
				<li class={{set_active('web/home') }}><a href={{url("/web/home")}} >HOME</a></li>
				<li class={{set_active('web/products') }}><a href={{url("/web/products")}}>PRODUCTS</a></li>
				<li class={{set_active('web/bills') }}><a href={{url("/web/bills")}}>BILLS</a></li>
				<li class={{set_active('web/customers') }}><a href={{url("/web/customers")}}>BILLS</a></li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		@yield('page')
	</div>
	<script src="/assets/javascript/jquery.min.js"></script>
	<script src="/assets/javascript/bootstrap.min.js"></script>
	<script src="/assets/javascript/app-functions.js"></script>
</body>
</html>