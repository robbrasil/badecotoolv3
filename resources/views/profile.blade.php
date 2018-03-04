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
    margin: 0px 0 0 0px;

}
}
	</style>
<div class="row">
	<div class="col-md-4">
	</div>
		<div class="col-md-4" style="margin-top:5em">
			<div class="col-lg-12" id="panelBody" style="display: block;">
	      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="text-center">Profile</h4>
          </div>
				          	<div class="panel-body">
											<p><strong>ID:</strong> {{ Auth::user()->id }}</p>
											<p><strong>Name:</strong> {{ Auth::user()->name }}</p>
											<p><strong>Email:</strong> {{ Auth::user()->email }}</p>
											<p><strong>Company:</strong> {{ Auth::user()->company_name() }}</p>
											</br>
											<img src="{{Auth::user()->company_logo()}}" width="300px" height="auto"/></br>
											</br>
											<a href="/company">Upload company logo</a>
											</br>
											</br>
											@if ( Auth::user()->profile_photo )
												<div class="crop">
														<img src="{{Auth::user()->profile_photo}}" width="100px" height="auto"  />
											  </div>
											@endif

			<!-- <img src="{{asset('avatars/uploadtest.png')}}"/> -->

											{{Form::open(['method' => 'PATCH', 'route' => ['profilephoto.upload', Auth::user()->id], 'files' => true])}}
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
					<!-- /.panel-body -->
				</div>
			<!-- /.panel -->
		</div>
	<!-- /.col-lg-12 -->
</div>
@endsection
