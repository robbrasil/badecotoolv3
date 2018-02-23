@extends ('layout')

@section ('content')

	
	<div class="col-sm-8">
		
		<h3>Register</h3>

		<form method="POST" action="/register">
			{{ csrf_field() }}

			<!-- Text input-->
			<div class="form-group">
			  <label  for="name">Name:</label>  
			  
			  <input id="name" name="name" type="text" placeholder="" class="form-control input-lg" required="">
			  
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label for="email">Email:</label>  
			 
			  <input id="email" name="email" type="email" placeholder="" class="form-control input-lg" required="">
			  
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label  for="password">Password:</label>  
			  
			  <input id="password" name="password" type="password" placeholder="" class="form-control input-lg" required="">
			
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label  for="password_confirmation">Password Confirmation:</label>  
			  
			  <input id="password_confirmation" name="password_confirmation" type="password" placeholder="" class="form-control input-lg" required="">
			
			</div>			

			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">Register</button>

			</div>

			@include ('includes.errors')

		</form>

	</div>
	
	
@endsection