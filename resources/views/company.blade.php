@extends ('layout')

@section ('content')


	</style>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-6" style="margin-top:4em">
    <div class="col-lg-12" id="panelBody" style="display: block;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="text-center">Company Menu</h4>
                        </div>
                        <div class="panel-body">

	<p><strong>Company ID:</strong> {{Auth::user()->company_id()}}</p>
  <p><strong>Company Name:</strong> {{Auth::user()->company_name()}}</p>

@if ( Auth::user()->company_logo() )
	<div class="crop">
    <img src="{{Auth::user()->company_logo()}}" width="300px" height="auto"/>
  </div>
@endif

<!-- <img src="{{asset('avatars/uploadtest.png')}}"/> -->

	{{Form::open(['method' => 'PATCH', 'route' => ['logo.upload', Auth::user()->company_id()], 'files' => true])}}
		<div class="form-group">
		{{Form::label('company_logo', 'Company Logo',['class' => 'control-label'])}}
		{{Form::file('company_logo')}}
		</div>
			{{Form::submit('Save', ['class' => 'btn btn-success pull-right'])}}

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
