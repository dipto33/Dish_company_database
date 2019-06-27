<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h1>Union Table</h1><br><br>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Client ID</th>
        <th>Branch ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Type Id</th>
        <th>Branch Name</th>
        <th>Branch City</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($un as $e)
      <tr>
        <td>{{$e->client_id}}</td>
        <td>{{$e->branch_id}}</td>
        <td>{{$e->name}}</td>
        <td>{{$e->email}}</td>
        <td>{{$e->phn_no}}</td>
        <td>{{$e->address}}</td>
        <td>{{$e->type_id}}</td>
        <td>{{$e->branch_name}}</td>
        <td>{{$e->branch_city}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>