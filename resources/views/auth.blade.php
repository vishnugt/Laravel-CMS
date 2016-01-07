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
<h1></h1>
<div class="container">	
	<div class="row vertical-center">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">@yield('heading')</h2>
				</div>
				<div class="panel-body">
					@yield('content')
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>