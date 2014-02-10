<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CareFree - Register</title>
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
			{{ Form::open(array('url' => 'register', 'id' => 'register', 'class' => 'form-signin')) }}
				<legend>CareFree - Register</legend>

	    		{{ Form::label('first_name', 'First Name') }}
	    		@if ($errors->first('first_name'))
	    			{{ $errors->first('first_name', 
	    			'<div class="alert alert-danger"><p>:message</p></div>') }}
	            	 <div class='form-group has-error'>
	            @elseif (Input::old('first_name'))
	            	 <div class='form-group has-success'>
	            @else
	            	 <div class='form-group'>
	            @endif
				{{ Form::text('first_name', Input::old('first_name'), 
				      array('placeholder' => 'First Name',
				      		'class' 	  => 'form-control', 
				      		'required' 	  => 'true', 
				      		'autofocus'   => 'true')
				      )
				}}
				</div>

				{{ Form::label('last_name', 'Last Name') }}
	    		@if ($errors->first('last_name'))
	    			{{ $errors->first('last_name', 
	    			'<div class="alert alert-danger"><p>:message</p></div>') }}
	            	 <div class='form-group has-error'>
	            @elseif (Input::old('last_name'))
	            	 <div class='form-group has-success'>
	            @else
	            	 <div class='form-group'>
	            @endif

	            {{ Form::text('last_name', Input::old('last_name'), 
	                  array('placeholder' => 'Last Name',
	                  		'class' 	  => 'form-control', 
	                  		'required' 	  => 'true')
	                  )
	            }}
				</div>

				{{ Form::label('email', 'Email Address') }}
	    		@if ($errors->first('email'))
	            	{{ $errors->first('email', 
	            	'<div class="alert alert-danger"><p>:message</p></div>') }}
	            	 <div class='form-group has-error'>
	            @elseif (Input::old('email'))
	            	 <div class='form-group has-success'>
	            @else
	            	 <div class='form-group'>
	            @endif

				{{ Form::text('email', Input::old('email'), 
				      array('placeholder' => 'Email Address',
				      		'class' 	  => 'form-control', 
				      		'required' 	  => 'true')
				      )
				}}
				</div>

				{{ Form::label('password', 'Password') }}
				@if ($errors->first('password'))
					{{ $errors->first('password', 
					'<div class="alert alert-danger"><p>:message</p></div>') }}
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

				{{ Form::label('password_confirmation', 'Password Confirmation') }}
				@if ($errors->first('password'))
		        	<div class='form-group has-error'>
		        @else
		        	<div class='form-group'>
		        @endif

				{{ Form::password('password_confirmation', 
				      array('placeholder' => 'Password Confirmation',
				      		'class' 	  => 'form-control', 
				      		'required' 	  => 'true')
				      )
				}}
				</div>

				<div class="form-group">
					<input type="checkbox" checked>
					<span>Allow us to keep track of your location for weather and activity suggestions</span>
				</div>

				{{ Form::submit('Register', array('class' => 'btn btn-lg btn-success btn-block')) }}
  			{{ Form::close() }}
		</div>
  		<div class="center">
			<a href="login">Login?</a>
		</div>
	</body>
</html>