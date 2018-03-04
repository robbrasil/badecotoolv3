<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">




      <table class="table table-bordered" id="users-table">
          <thead>
              <tr>
                  <th>Job Number</th>
                  <th>Community</th>
                  <th>Lot Number</th>
                  <th>Job Size</th>
                  <th>Installer</th>
              </tr>
          </thead>
          <tbody>
          </tbody>
      </table>


  @push('scripts')
  <script>
  $(function() {
      $('#users-table').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax":{
                    "url": "{{ url('/ajaxdata/getdata') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"}
                  },
          "columns": [
              { data: 'jobNumber' },
              { data: 'community'},
              { data: 'lotNumber'},
              { data: 'jobSize'},
              { data: 'installer' }
          ]
      });
  });
  </script>
  @endpush
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    </body>
</html>
