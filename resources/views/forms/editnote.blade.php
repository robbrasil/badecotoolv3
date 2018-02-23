@extends ('layout')

@section ('content')


{{ Form::open(['url'=>'notes/'.$entry->id.'/update', 'method' => 'PATCH', 'class'=>'form-horizontal col-md-4 col-md-offset-4']) }}
<div>
<div class="form-group">
  <label class="control-label" for="notes">Notes</label>
                      
    {{ Form::textarea('notes', $entry->notes, ['class'=>'form-control input-sm']) }}

	
    
</div>

<button id="submit" name="submit" class="btn btn-success btn-md pull-right">Update</button>
</div>

<!-- Button -->

  


{{ Form::close() }}



@endsection