@extends ('layout')

@section ('content')

	<div class="col-md-6 col-md-offset-3">

		<h1>Sign In</h1>
	
	<form method="POST" action="/login">
		
		{{ csrf_field() }}

			<div class="form-group">

				<label for="email">Email Address:</label>

				<input type="email" class="form-control" id="email" name="email" required="">

			</div>

			<div class="form-group">

				<label for="password">Password:</label>

				<input type="password" class="form-control" id="password" name="password" required="">
				
				<a class="pull-right" href="/password/reset">Forgot Password</a>

			</div>

			<div class="form-group">

				 <button type="submit" class="btn btn-primary">Sign In</button>

			</div>
			
			@include('includes.errors')
		</form>
		


	</div>


@endsection