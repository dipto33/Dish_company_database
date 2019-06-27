<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="~/public/css/app.css" rel="stylesheet">
</head>
<body>
 
<div class="container">
   
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Type Data</h3>
  <br />
  

  <form method="post" action="xtype">
   
   <div class="form-group">
    <input type="number" name="type_id" class="form-control" placeholder="Enter Type ID" required />
   </div>
   <div class="form-group">
    <input type="text" name="type_name" class="form-control" placeholder="Enter Type Name" required/>
   </div>
  
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  @csrf
  </form>
 </div>
</div>

</div>
 
</body>
</html>