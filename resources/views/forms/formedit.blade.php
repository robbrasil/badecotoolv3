@extends ('layout')


@section ('content')

<h2>Edit Entry</h2>

	{{ Form::model($entry, ['url'=>'entry/'.$entry->id, 'method' => 'PATCH']) }}



@include ('includes.errors')




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jobNumber">Job Number</label>  
  <div class="col-md-5">
  {{ Form::text('jobNumber', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="community">Community</label>  
  <div class="col-md-5">
  {{ Form::text('community', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lotNumber">Lot Number</label>  
  <div class="col-md-5">
  {{ Form::text('lotNumber', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jobSize">Job Size</label>  
  <div class="col-md-5">
  {{ Form::text('jobSize', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="installer">Installer Name</label>  
  <div class="col-md-5">
  {{ Form::text('installer', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Installation Date</label>  
  <div class="col-md-5">
  {{ Form::text('date', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="notes">Notes</label>
  <div class="col-md-5">                     
    {{ Form::textarea('notes', null, ['class'=>'form-control input-md']) }}
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-5">
    <button id="submit" name="submit" class="btn btn-success btn-md pull-right">submit</button>
  </div>
</div>


</form>

{{ Form::close() }}

@endsection