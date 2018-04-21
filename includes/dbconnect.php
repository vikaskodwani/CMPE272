<?php
$myHost = "127.0.0.1"; // use your real host name
$myUserName = "admin";   // use your real login user name
$myPassword = "admin";   // use your real login password
$myDataBaseName = "labProject"; // use your real database name

$con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );

if( !$con ) // == null if creation of connection object failed
{ 
	 echo "111";
    // report the error to the user, then exit program
    // die("connection object not created: ".mysqli_error($con));
}else{
   echo "222";
}

if( mysqli_connect_errno() )  // returns false if no error occurred
{ echo "333";
    // report the error to the user, then exit program
    // die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}else{
   echo "4444";
}

// when got here, successfully connected to database
?>