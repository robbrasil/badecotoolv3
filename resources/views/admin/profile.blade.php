@extends ('layout')

@section ('content')


<h3>Profile</h3>

	
	<p>Email: {{ Auth::user()->email }}</p>

@if ( Auth::user()->profile_photo )
<img src="{{Auth::user()->profile_photo}}" width="100px" height="100px" />
@endif


<!-- <img src="{{asset('avatars/uploadtest.png')}}"/> -->
	
	{{Form::open(['method' => 'PATCH', 'route' => ['profilephoto.upload', Auth::user()->id], 'files' => true])}}
		<div class="form-group">
		{{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}
		{{Form::file('user_photo')}}
		</div>
			{{Form::submit('Save', ['class' => 'btn btn-success'])}}

{{Form::close()}}

@endsection