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
            <h3 aling="center">Add Bill Data</h3>
            <br/>

            <form method="post" action="xbill">
                <div class="form-group">
                    <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name" required/>
                    @if(isset($error))
                        {{ $error }}
                    @endif
                </div>
                <div class="form-group">
                    <input type="number" name="amount" class="form-control" placeholder="Enter Amount" required/>
                </div>
                <div class="form-group">
                    <input type="date" name="date" class="form-control" placeholder="Enter Date" required/>
               
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