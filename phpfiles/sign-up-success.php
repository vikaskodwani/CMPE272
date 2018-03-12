<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
            integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
            crossorigin="anonymous">-->
    <link href="dist/toolkit-minimal.css" rel="stylesheet">
    <link href="dist/application-minimal.css" rel="stylesheet">
</head>
<body>

<?php
//print_r($_POST);
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$homePhone = $_POST['homePhone'];
$cellPhone = $_POST['cellPhone'];

$connection = mysqli_connect('shareddb1d.hosting.stackcp.net', 'admin-13', 'aravi-13', 'credentials-313726f7');
//$connection = mysqli_connect('localhost', 'root', '', 'php');
if ($connection) {
   if( mysqli_query($connection,"INSERT INTO `Signup` (`FirstName`, `LastName`, `Email`, `Address`, `HomePhone`, `CellPhone`) VALUES ('$firstName','$lastName','$email','$address','$homePhone','$cellPhone')")){
       echo "<div class='container pt-5'><div class=\"alert alert-success\" role=\"alert\">
 Signed up successfully!
</div> </div>";
   }
   else{
       echo "Error: ". mysqli_error($connection);
   }
    //INSERT INTO `Signup` (`id`, `FirstName`, `LastName`, `Email`, `Address`, `HomePhone`, `CellPhone`) VALUES (NULL, '', '', '', '', '', '');


}


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.js"></script>
<script src="dist/application.js"></script>

</body>
</html>