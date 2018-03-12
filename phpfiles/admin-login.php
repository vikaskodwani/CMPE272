<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="dist/toolkit-minimal.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="col-md-3 p-4">
        <div class="page-header">
            <h1>Admin Login</h1>
        </div>
        <hr>
        <form method="post" action="./form-validation.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.min.js"></script>
</body>
</html>