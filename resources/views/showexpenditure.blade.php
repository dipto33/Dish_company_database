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
  <h1>Expenditure Data Show</h1><br><br>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Channel Name</th>
        <th>Wire Cost</th>
        <th>Additional Cost</th>
        <th>Device Cost</th>
      </tr>
    </thead>
    <tbody>
      @foreach($expenditure as $ex)
      <tr>
        <td>{{$ex->channel_name}}</td>
        <td>{{$ex->wire_cost}}</td>
        <td>{{$ex->additional_cost}}</td>
        <td>{{$ex->device_cost}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>