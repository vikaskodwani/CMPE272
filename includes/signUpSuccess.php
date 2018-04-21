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
    <link href="/css/toolkit-minimal.css" rel="stylesheet">
    <link href="/css/application-minimal.css" rel="stylesheet">
</head>
<body>

<?php

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$homePhone = $_POST['homePhone'];
$cellPhone = $_POST['cellPhone'];

$myHost = "127.0.0.1"; // use your real host name
$myUserName = "admin";   // use your real login user name
$myPassword = "admin";   // use your real login password
$myDataBaseName = "labProject"; // use your real database name

$con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );

if( !$con ) // == null if creation of connection object failed
{ echo "111";
    // report the error to the user, then exit program
    // die("connection object not created: ".mysqli_error($con));
} else{
   if( mysqli_query($con,"INSERT INTO `Users` (`FirstName`, `LastName`, `Email`, `Address`, `HomePhone`, `CellPhone`) VALUES ('$firstName','$lastName','$email','$address','$homePhone','$cellPhone')")){
       echo "<div class='container pt-5'><div class=\"alert alert-success\" role=\"alert\">
 Signed up successfully!
</div> </div>";
   }
   else{
       echo "Error: ". mysqli_error($con);
   }
}


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/toolkit.js"></script>
<script src="/js/application.js"></script>

</body>
</html>