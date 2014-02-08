<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CareFree - Login</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/login.css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
	  		{{ Form::open(array('url' => 'login', 'id' => 'login', 'class' => 'form-signin')) }}
	  			<legend>CareFree</legend>

	  			{{ $errors->first('email', 
	  				'<div class="alert alert-danger alert-login"><p>:message</p></div>') }}
        		{{ $errors->first('password', 
        			'<div class="alert alert-danger alert-login"><p>:message</p></div>') }}
	  			{{ Session::has('password-error') ? 
	  				'<div class="alert alert-danger"><p>Incorrect username or password.</p></div>' : '' }}
	  			{{ Session::has('has-signed-out') ? 
	  				'<div class="alert alert-success"><p>You have successfully signed out.</p></div>' : '' }}	

	    		{{ Form::label('email', 'Email Address') }}
	    		@if ($errors->first('email') || Input::old('email'))
	            <div class='form-group has-error'>
	            @else
	            <div class='form-group'>
	            @endif

				{{ Form::text('email', Input::old('email'), 
				      array('placeholder' => 'Email Address',
				      		'class' 	  => 'form-control',
				      		'autofocus'	  => 'true',
				      		'required' 	  => 'true')
				      )
				}}
				</div>
				
	    		{{ Form::label('password', 'Password') }}
	    		@if (Session::has('password-error') || $errors->first('password') )
	            <div class='form-group has-error'>
	            @else
	            <div class='form-group'>
	            @endif

	    		{{ Form::password('password',
	    		      array('placeholder' => 'Password',
	    		      		'class' 	  => 'form-control', 
	    		      		'required' 	  => 'true')
	    		      )
	    		}}
	    		</div>

				{{ Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block')) }}
  			{{ Form::close() }}
	  		<div class="center">
	  			<a href="register">Register?</a>
	  		</div>
		</div>
	</body>
</html>