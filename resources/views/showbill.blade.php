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
  <h1>Bill Data Show</h1><br><br>
   @if(isset($bill_con))           
  <table class="table table-striped">
    <thead>
      <tr>
  
        <th>Client ID</th>
        <th>Year</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bill_con as $bl)
      <tr>
       
        <td>{{$bl->client_id}}</td>
        
        <td>{{$bl->years}}</td>
      </tr>
      @endforeach  
    </tbody>
  </table>
  @endif
</div>
 
</body>
</html>