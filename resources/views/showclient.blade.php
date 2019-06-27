<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show data</title>
   <style type="text/css">
    h1{
      text-align-last: center;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h1>Client Data Show</h1><br><br>
   @if(isset($client))           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Client ID</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Email ID</th>
        <th>Type Id</th>
        <th>Branch Id</th>
      </tr>
    </thead>
    <tbody>
      @foreach($client as $cl)
      <tr>
        <td>{{$cl->name}}</td>
        <td>{{$cl->client_id}}</td>
        <td>{{$cl->phn_no}}</td>
        <td>{{$cl->address}}</td>
        <td>{{$cl->email}}</td>
        <td>{{$cl->type_id}}</td>
        <td>{{$cl->branch_id}}</td>
      </tr>
      @endforeach  
    </tbody>
  </table>
  @endif
</div>
 
</body>
</html>