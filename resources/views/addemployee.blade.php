<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
          rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 aling="center">Add Employee Data</h3>
            <br/>


            <form method="post" action="xemployee">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required/>
                </div>
                <div class="form-group">
                    <input type="number" name="salary" class="form-control" placeholder="Enter Salary" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="phn_no" class="form-control" placeholder="Enter Phone" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="shift" class="form-control" placeholder="Enter shift" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="branch" class="form-control" placeholder="Enter Branch Name" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="branch_city" class="form-control" placeholder="Enter Branch City"
                           required/>
                </div>
                  <div class="form-group">
                    <input type="text" name="age" class="form-control" placeholder="Enter Age"
                           required/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>
                @csrf
            </form>
        </div>
    </div>

</div>

</body>
</html>