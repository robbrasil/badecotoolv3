@extends ('layout')

@section ('content')

<h3>Profile</h3>



	
	<p>Email: {{ Auth::guard('admin')->user()->email }}</p>

@if ( Auth::guard('admin')->user()->profile_photo )
<img src="{{Auth::guard('admin')->user()->profile_photo}}" width="100px" height="100px" />
@endif


<!-- <img src="{{asset('avatars/uploadtest.png')}}"/> -->
	
	{{Form::open(['method' => 'PATCH', 'route' => ['profilephoto.upload', Auth::guard('admin')->user()->id], 'files' => true])}}
		<div class="form-group">
		{{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}
		{{Form::file('user_photo')}}
		</div>
			{{Form::submit('Save', ['class' => 'btn btn-success'])}}

{{Form::close()}}

@endsection