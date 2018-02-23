@extends('layout')


@section('content')
	
<!-- Form Name -->
<legend>New Entry</legend>
	<form method="POST" action="/entries" class="form-horizontal">
<fieldset>


@include ('includes.errors')

{{ csrf_field() }}

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jobNumber">Job Number</label>  
  <div class="col-md-5">
  <input id="jobNumber" name="jobNumber" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="community">Community</label>  
  <div class="col-md-5">
  <input id="community" name="community" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lotNumber">Lot Number</label>  
  <div class="col-md-5">
  <input id="lotNumber" name="lotNumber" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jobSize">Job Size</label>  
  <div class="col-md-5">
  <input id="jobSize" name="jobSize" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="installer">Installer Name</label>  
  <div class="col-md-5">
  <input id="installer" name="installer" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Installation Date</label>  
  <div class="col-md-5">
  <input id="date" name="date" type="text" placeholder="dd/mm/yy" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="notes">Notes</label>
  <div class="col-md-5">                     
    <textarea class="form-control" id="notes" name="notes"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-5">
    <button id="submit" name="submit" class="btn btn-success btn-md pull-right">submit</button>
  </div>
</div>

</fieldset>
</form>


@endsection