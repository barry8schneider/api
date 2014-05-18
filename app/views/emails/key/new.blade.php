<!DOCTYPE html>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		@import url(//fonts.googleapis.com/css?family=Oswald:400,700);
		@import url(//fonts.googleapis.com/css?family=Open+Sans);
		@import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);

		body {
			margin:0;
			font-family:'Oswald', sans-serif;
			text-align:center;
			color: #999;
		}

		p, .form-group {
			font-family:'Open Sans', sans-serif;
			text-align: left
		}

		.main {
			width: 500px;
			height: 500px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -250px;
			margin-top: -250px;
		}

		a, a:visited {
			text-decoration:none;
		}

	</style>
	<script src ="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src ="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="main">
		<a href="http://govtribe.com" title="GovTribe"><img src="{{ asset('logo.png') }}" alt="GovTribe"></a>
		<h1>{{ $key->_id }}</h1>
		<small>...is the key.</small>
		<p>Free API keys are limited to 500 requests per day and 4 requests per second. If you need more than that, please <a href="mailto:help@govtribe.com?Subject=API%20Key">contact us.</a></p>
	</div>
</body>
</html>