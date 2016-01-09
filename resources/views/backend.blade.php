<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>@yield('title') TheNetwork </title>
  <link rel="stylesheet" type="text/css" href="css/backend.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header"><a href="/" class="navbar-brand">TheNetwork</a></div>
			<ul class="nav navbar-nav">
				<li><a href="#">Item1</a></li>
				<li><a href="#">Item2</a></li>
				<li><a href="#">Item3</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Hello, Admin</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3> @yield('title') </h3>


				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>