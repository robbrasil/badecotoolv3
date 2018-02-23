@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }} 
                        </div>
                    @endif

                    <h3>All entries</h3>
    
    
     <div class="panel-body" id="dataTables-example-div">
                                    <table class="table table-striped table-bordered table-hover" id="tableMain">
                                        <thead>
                                        <tr>
                                            <td id="delHead">Del&nbsp;/&nbsp;Info</td>
                                            <td>Job Number</td>
                                            <td>Community</td>
                                            <td>Lot Number</td>
                                            <td>Job Size</td>
                                            <td>Original Installer</td>
                                            <td>Date</td>
                                     
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($entries as $entry)
                                            <tr>
                                                <td>
                                                    <div class="hidden" class="entryId"> 
                                                        {{$entry -> id}} 
                                                    </div>
                                                        <button class="btn btn-danger btn-sm xBtn" title="Click to delete row"><i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                        @if (strlen($entry -> notes) > 0)
                                                        <button class="btn btn-info btn-md pull-right iBtn commentBtn">  <i class="fa fa-info" aria-hidden="true"></i></button>
                                                        @else
                                                        <button class="btn btn-warning btn-md pull-right iBtn commentBtn">  <i class="fa fa-info" aria-hidden="true"></i></button>
                                                        @endif
                                                                                                    
                                                </td>
                                                <td>{{$entry -> jobNumber}}</td>
                                                <td>{{$entry -> community}}</td>
                                                <td>{{$entry -> lotNumber}}</td>
                                                <td>{{$entry -> jobSize}}</td>
                                                <td>{{$entry -> installer}}</td>
                                                <td>{{$entry -> date}}</td>
                                            
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
