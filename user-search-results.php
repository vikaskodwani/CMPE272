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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.min.js"></script>
</body>
</html>

<?php
$radioval = $_POST['radio'];
$searchtext = $_POST['searchtext'];

$connection = mysqli_connect('shareddb1d.hosting.stackcp.net', 'admin-13', 'aravi-13', 'credentials-313726f7');
//$connection = mysqli_connect('localhost', 'root', '', 'php');


switch ($radioval) {
    case 'fname':
        $result = mysqli_query($connection, "Select * from `Signup`  where FirstName = '$searchtext'");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $resultcount = count($result);
        if (count($row) != 0) {
            //print_r($row);
            echo "
<div class='container pt-5 '>
<div class=\"alert alert-success col-md-4\" role=\"alert\">
  $resultcount result(s) found!
 </div>
<div class='col-md-4'>
<ul class=\"list-group\">
  <li class=\"list-group-item\">First Name: $row[1]</li>
  <li class=\"list-group-item\">Last Name: $row[2] </li>
  <li class=\"list-group-item\">Email: $row[3]</li>
  <li class=\"list-group-item\">Home Phone: $row[5]</li>
  <li class=\"list-group-item\">Cell Phone: $row[6]</li>
</ul>
</div>
</div>";
        } else {
            echo "<div class='container pt-5'><div class=\"alert alert-warning col-md-4\" role=\"alert\">
  No results found!
</div> </div>";
        }
        break;
    case 'lname':
        $result = mysqli_query($connection, "Select * from `Signup`  where LastName = '$searchtext'");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $resultcount = count($result);
        if (count($row) != 0) {
            //print_r($row);
            echo "
<div class='container pt-5 '>
<div class=\"alert alert-success col-md-4\" role=\"alert\">
  $resultcount result(s) found!
 </div>
<div class='col-md-4'>
<ul class=\"list-group\">
  <li class=\"list-group-item\">First Name: $row[1]</li>
  <li class=\"list-group-item\">Last Name: $row[2] </li>
  <li class=\"list-group-item\">Email: $row[3]</li>
  <li class=\"list-group-item\">Home Phone: $row[5]</li>
  <li class=\"list-group-item\">Cell Phone: $row[6]</li>
</ul>
</div>
</div>";
        } else {
            echo "<div class='container pt-5'><div class=\"alert alert-warning col-md-4\" role=\"alert\">
  No results found!
</div> </div>";
        }
        break;
    case 'mail':
        $result = mysqli_query($connection, "Select * from `Signup`  where Email = '$searchtext'");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $resultcount = count($result);
        if (count($row) != 0) {
            //print_r($row);
            echo "
<div class='container pt-5 '>
<div class=\"alert alert-success col-md-4\" role=\"alert\">
  $resultcount result(s) found!
 </div>
<div class='col-md-4'>
<ul class=\"list-group\">
  <li class=\"list-group-item\">First Name: $row[1]</li>
  <li class=\"list-group-item\">Last Name: $row[2] </li>
  <li class=\"list-group-item\">Email: $row[3]</li>
  <li class=\"list-group-item\">Home Phone: $row[5]</li>
  <li class=\"list-group-item\">Cell Phone: $row[6]</li>
</ul>
</div>
</div>";
        } else {
            echo "<div class='container pt-5'><div class=\"alert alert-warning col-md-4\" role=\"alert\">
  No results found!
</div> </div>";
        }
        break;
    case 'hphone':
        $result = mysqli_query($connection, "Select * from `Signup`  where HomePhone = '$searchtext'");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $resultcount = count($result);
        if (count($row) != 0) {
            //print_r($row);
            echo "
<div class='container pt-5 '>
<div class=\"alert alert-success col-md-4\" role=\"alert\">
  $resultcount result(s) found!
 </div>
<div class='col-md-4'>
<ul class=\"list-group\">
  <li class=\"list-group-item\">First Name: $row[1]</li>
  <li class=\"list-group-item\">Last Name: $row[2] </li>
  <li class=\"list-group-item\">Email: $row[3]</li>
  <li class=\"list-group-item\">Home Phone: $row[5]</li>
  <li class=\"list-group-item\">Cell Phone: $row[6]</li>
</ul>
</div>
</div>";
        }else {
            echo "<div class='container pt-5'><div class=\"alert alert-warning col-md-4\" role=\"alert\">
  No results found!
</div> </div>";
        }
        break;
    case 'cphone':
        $result = mysqli_query($connection, "Select * from `Signup`  where CellPhone = '$searchtext'");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $resultcount = count($result);
        if (count($row) != 0) {
            //print_r($row);
            echo "
<div class='container pt-5 '>
<div class=\"alert alert-success col-md-4\" role=\"alert\">
  $resultcount result(s) found!
 </div>
<div class='col-md-4'>
<ul class=\"list-group\">
  <li class=\"list-group-item\">First Name: $row[1]</li>
  <li class=\"list-group-item\">Last Name: $row[2] </li>
  <li class=\"list-group-item\">Email: $row[3]</li>
  <li class=\"list-group-item\">Home Phone: $row[5]</li>
  <li class=\"list-group-item\">Cell Phone: $row[6]</li>
</ul>
</div>
</div>";
        } else {
            echo "<div class='container pt-5'><div class=\"alert alert-warning col-md-4\" role=\"alert\">
  No results found!
</div> </div>";
        }
        break;
    default:
        echo "Not found";
}

?>