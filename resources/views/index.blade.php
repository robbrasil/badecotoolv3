@extends ('layout')

@section ('content')
 <h3 style="text-align: center">All entries</h3>

	 <div class="panel-body" id="dataTables-example-div">
<table class="table table-striped table-bordered table-hover display nowrap order-column compact" id="tableMain" cellspacing="0" width="100%">
    <thead>
    <tr>
        <td name="delHead" id="delHead">Del&nbsp;/&nbsp;Info</td>
        <td>Job&nbsp;#</td>
        <td class="all">Community</td>
        <td class="all">Lot&nbsp;#</td>
        <td>Job Size</td>
        <td class="min-phone-l">Inst. Name</td>
        <td>Date</td>
        <td class="desktop">Assigned by</td>
        <td class="desktop">Assignment Date</td>
        {{-- <td class="desktop">Updated by</td>
        <td class="desktop">Update Date</td> --}}
    </tr>
    </thead>
    <tbody>
    	@foreach ($entries as $entry)
    	<tr>
        	<td>
        		<div  class="entryId">
        			<a href="/entries/{{$entry -> id}}/edit">Edit</a>
        		</div>
            <div class="entryBtns">
        			<a href="/entries/{{$entry->id}}/delete"><button class="btn btn-danger btn-sm xBtn deleteBtn" title="Click to delete row"><i class="fa fa-trash" aria-hidden="true"></i>
            		</button></a>
        			@if (strlen($entry -> notes) > 0)
        			<button class="btn btn-info btn-md pull-right iBtn commentBtn blueBtn" data-toggle="popover" title="Comments" data-trigger="focus" data-content="{{ $entry -> notes}} &nbsp;&nbsp;&nbsp; <a href='/notes/{{$entry->id}}/edit'><button class='btn btn-info btn-xs pull-right' type='button'>Edit</button>">  <i class="fa fa-info" aria-hidden="true"></i></button></a>
        			@else
        			<a href="/entries/{{$entry -> id}}/edit"><button class="btn btn-warning btn-sm pull-right iBtn commentBtn">  <i class="fa fa-plus" aria-hidden="true"></i></button></a>
            </div>
              @endif
        	</td>

        	<td>{{ $entry -> jobNumber }}</td>
        	<td>{{ $entry -> community }}</td>
        	<td>{{ $entry -> lotNumber }}</td>
        	<td>{{ $entry -> jobSize }} ft&sup2;</td>
        	<td>{{ $entry -> installer }}</td>
        	<td>{{ date("m/d/y D", strtotime($entry -> date)) }}</td>
               @if (Auth::user()->account_type == 'admin')

            <td>{{ $entry->user->name }}  <br>

               @elseif (Auth::user()->account_type == 'subscriber')

        	<td>{{ $entry ->user->name }}
                @endif

                @if ($entry->edit_id)
                <?php $editorId = DB::table('users')->where('id', '=', $entry->edit_id)->get() ?>
                @endif

            </td>
            <td>{{ $entry->created_at->format('m/d/y D') }}</td>
            {{-- <td>@if ($entry->edit_id){{ $editorId[0]->name }}@else N/A @endif</td>
            <td>@if ($entry->edit_id){{ $entry->updated_at->format('m/d/y D') }}@else N/A @endif</td> --}}

   		</tr>
    	@endforeach
    </tbody>
</table>
</div>
</div>
<!-- /.col-lg-6 (nested) -->
</div>
<!-- /.row (nested) -->
</div>
@endsection
