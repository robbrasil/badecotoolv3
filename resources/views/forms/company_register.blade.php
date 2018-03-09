@extends('layout')


@section('content')
  <style>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      margin-top: 2em;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }
  </style>
<legend>Registered Companies</legend>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Logo</th>
  </tr>
  @foreach ($companies as $company)

      <tr>
        <td>{{ $company -> id }}</td>
        <td>{{ $company -> name }}</td>
        @if ($company->logo)
        <td>{{ $company -> logo }}</td>
        @else
          <td> No logo available </td>
        @endif
      </tr>

  @endforeach
</table>

<!-- Form Name -->
<legend>New Company</legend>
	<form method="POST" action="/company/register" class="form-horizontal">
<fieldset>

@include ('includes.errors')

{{ csrf_field() }}

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">New Company Name:</label>
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

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
