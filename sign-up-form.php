<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Include the CSS -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
            integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
            crossorigin="anonymous">-->
    <link href="dist/toolkit-minimal.css" rel="stylesheet">
    <link href="dist/application-minimal.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/spinning-social.css">
    <link rel="stylesheet" href="dist/productgrid.css">

</head>
<body>

<div class="container pt-5">

    <h3>Signup</h3>
    <hr/>

    <form method="post" action="sign-up-success.php">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="firstname">First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="First name" id="firstname">
            </div>
            <div class=" form-group col-md-6">
                <label for="lastname">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Last name" id="lastname">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="homePhone">Home Phone</label>
                <input type="number" name="homePhone" class="form-control" id="homePhone" placeholder="+1 234 567 8910">
            </div>

            <div class="form-group col-md-6">
                <label for="cellPhone">Cell Phone</label>
                <input type="number" name="cellPhone" class="form-control" id="cellPhone" placeholder="+1 234 567 8910">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.js"></script>
<script src="dist/application.js"></script>
</body>
</html>