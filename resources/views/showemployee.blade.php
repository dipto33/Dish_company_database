<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show data</title>
   <style type="text/css">
    h1{
      text-align-last: center;
    }
  </style>
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
  <h1>Employee Data Show</h1><br><br>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Employee ID</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Shift</th>
        <th>Salary</th>
        <th>Branch Name</th>
        <th>Branch City</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employee as $em)
      <tr>
        <td>{{$em->name}}</td>
        <td>{{$em->employee_id}}</td>
        <td>{{$em->phn_no}}</td>
        <td>{{$em->address}}</td>
        <td>{{$em->shift}}</td>
        <td>{{$em->salary}}</td>
        <td>{{$em->branch_name}}</td>
        <td>{{$em->branch_city}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>