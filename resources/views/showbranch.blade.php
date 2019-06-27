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
  <h1> Branch Data Show</h1><br><br>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Branch ID</th>
        <th>Branch Name</th>
        <th>Branch City</th>
      </tr>
    </thead>
    <tbody>
      @foreach($branch_con as $br)
      <tr>
        <td>{{$br->branch_id}}</td>
        <td>{{$br->branch_name}}</td>
        <td>{{$br->branch_city}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>