<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<link href="/css/toolkit-minimal.css" rel="stylesheet">
<div class="container-fluid">
    <div class="col-md-3 p-4">
        <div class="page-header">
            <h1>Admin Login</h1>
        </div>
        <hr>
        <form method="post" action="./loginvalidation.php">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

</body>
</html>

 



<!-- <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
          <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                  <form action="loginvalidation.php" method="post">
                    <input type="text" name="Username" placeholder="Username">
                    <input type="password" name="Password" placeholder="Password">
                    <input type="submit" name="Login" class="login loginmodal-submit" value="Login">
                  </form>
                </div>
            </div>
          </div> -->