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
  <h1>Striped Rows</h1><br><br>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Employee ID</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Shift</th>
        <th>Branch ID</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sub as $e)
      <tr>
        <td>{{$e->name}}</td>
        <td>{{$e->employee_id}}</td>
        <td>{{$e->phn_no}}</td>
        <td>{{$e->address}}</td>
        <td>{{$e->shift}}</td>
        <td>{{$e->branch_id}}</td>
        <td>{{$e->salary}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>