<!DOCTYPE html>
<html>
	<head>
		<title>BasicWebsite</title>
		<link rel="stylesheet" type="text/css" href="css/app.css">
	</head>
	<body>
		@include('inc.navbar')
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">
					@yield('content')
				</div>

				<div class="col-md-4 col-lg-4">
					@include('inc.sidebar')
				</div>
			</div>	
		</div>	
	</body>
</html>