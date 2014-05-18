<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GovTribe API - Request API Key</title>
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
			width: 350px;
			height: 500px;
			position: absolute;
			left: 50%;
			top: 20%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

	</style>
	<script src ="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src ="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src ="validator.min.js"></script>
	<script src="app.js"></script>
</head>
<body>
<div class="container">
	<div class="main">
		<a href="http://govtribe.com" title="GovTribe"><img src="{{ asset('logo.png') }}" alt="GovTribe"></a>
		{{ Form::open([
			'method' => 'post', 
			'action' => 'GovTribe\Controllers\EnrollmentController@postEnroll', 
			'id' => 'form-key-enroll', 
			'role' => 'form',
			'data-toggle' => 'validator',
			'data-delay' => "1000"
		])}}
		<h1 class="form-key-enroll-heading">Send Me An API Key!</h1>
		<p>Free API keys are limited to 500 requests per day and 4 requests per second. If you need more than that, please <a href="mailto:help@govtribe.com?Subject=API%20Key">contact us.</a></p>
		<hr>
		<div class="form-group">
			<label class="control-label pull-left">Name</label>
			{{ Form::text('firstName', null, ['class' => 'form-control', 'id' => 'inputFirstName', 'placeholder' => 'First', 'required' => '']) }}
			{{ Form::text('lastName', null, ['class' => 'form-control', 'id' => 'inputLastName', 'placeholder' => 'Last', 'required' => '']) }}
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group">
			<label class="control-label pull-left">Company</label>
			{{ Form::text('company', null, ['class' => 'form-control', 'id' => 'inputCompany', 'placeholder' => 'Company']) }}
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group">
			<label class="control-label pull-left">Email</label>
			{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder' => 'Email', 'required' => '']) }}
			{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'inputEmailConfirm', 'placeholder' => 'Confirm', 'required' => '', 'data-match' => "#inputEmail", 'data-match-error' => 'Whoops, these don\'t match']) }}
			<div class="help-block with-errors"></div>
		</div>
		<hr>
		{{ Form::submit('Submit', ['class'=>'btn btn-primary btn-lg btn-block']) }}
		{{ Form::close() }}
	</div>
</div>
</body>
</html>