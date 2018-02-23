{{dd($entry)}}

{{ Form::open(['url'=>'notes/'.$entry->id/update, 'method' => 'PATCH']) }}

{{ Form::text('notes', $entry->notes, ['class'=>'form-control input-sm']) }}

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-5">
    <button id="submit" name="submit" class="btn btn-success btn-md pull-right">submit</button>
  </div>
</div>

{{ Form::close() }}


