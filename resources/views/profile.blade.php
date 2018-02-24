@extends ('layout')

@section ('content')

	<style>
.crop{
	width: 150px;
  height: 150px;
  overflow: hidden;
	border-radius: 50%;
}
	.crop img {
    width: 150px;
    height: auto;
    margin: -40px 0 0 0px;

}
}
	</style>
<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
<h3>Profile</h3>

	<p>Email: {{ Auth::guard('web')->user()->email }}</p>

@if ( Auth::guard('web')->user()->profile_photo )
	<div class="crop">
<img src="{{Auth::guard('web')->user()->profile_photo}}" width="100px" height="auto"  />
  </div>
@endif

<!-- <img src="{{asset('avatars/uploadtest.png')}}"/> -->

	{{Form::open(['method' => 'PATCH', 'route' => ['profilephoto.upload', Auth::guard('web')->user()->id], 'files' => true])}}
		<div class="form-group">
		{{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}
		{{Form::file('user_photo')}}
		</div>
			{{Form::submit('Save', ['class' => 'btn btn-success'])}}

{{Form::close()}}
</div>
<div class="col-md-4">
</div>
</div>
@endsection
