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
</head>
<body>

<div class="container pt-5 col-md-12">
    <form method="post" action="user-search-results.php">

        <div>
            <label class="custom-control custom-radio">
                <input id="radio1" name="radio" type="radio" class="custom-control-input"  value="fname" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Search by First Name</span>
            </label>
            <label class="custom-control custom-radio">
                <input id="radio2" name="radio" type="radio" class="custom-control-input" value="lname">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Search by Last Name</span>
            </label>
            <label class="custom-control custom-radio">
                <input id="radio3" name="radio" type="radio" class="custom-control-input" value="mail">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Search by Mail</span>
            </label>
            <label class="custom-control custom-radio">
                <input id="radio4" name="radio" type="radio" class="custom-control-input" value="hphone">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Search by Home Phone</span>
            </label>
            <label class="custom-control custom-radio">
                <input id="radio5" name="radio" type="radio" class="custom-control-input" value="cphone">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Search by Cell Name</span>
            </label>
        </div>


        <div class="row align-items-center">
            <div class="col-auto col-md-2">
                <label class="sr-only" for="inlineFormInput">Name</label>
                <input type="text" class="form-control mb-2 mb-sm-0" name="searchtext" value="" id="inlineFormInput" required>
            </div>

            <div class="col-auto col-md-6">
                <button type="submit" id="search" class="btn btn-primary">Search</button>
            </div>

        </div>

        <div id="lastrow" class="col-md-3 pt-2">

        </div>


    </form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.min.js"></script>

</body>
</html>