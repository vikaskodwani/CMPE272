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
    <link href="/css/spinning-social.css" rel="stylesheet">
    <link href="/css/productgrid.css" rel="stylesheet">

</head>
<body>

<?php
// $myHost = "127.0.0.1"; // use your real host name
// $myUserName = "admin";   // use your real login user name
// $myPassword = "admin";   // use your real login password
// $myDataBaseName = "labProject"; // use your real database name

$myHost = "us-cdbr-iron-east-05.cleardb.net"; 
$myUserName = "bde8984a4db9c4";  
$myPassword = "d7290143";   
$myDataBaseName = "heroku_03a0031248e6bd9"; 

$con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );
$cumurow = array();
echo "<div class='container'>";
echo "<h2>Our Users</h2>";
echo "<table class=\"table table-striped col-md-6\">
  <thead>
    <tr>
     
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Last Name</th>
      
    </tr>
  </thead>
  <tbody>";

if( !$con ) // == null if creation of connection object failed
{ 
  // echo "111";
    // report the error to the user, then exit program
    // die("connection object not created: ".mysqli_error($con));
} else{
      $result = mysqli_query($con, "Select firstName,lastName from `Users`");
       while ($row = mysqli_fetch_row($result)) {
        array_push($cumurow, $row);
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
    }
}
echo "</tbody> </table>";

?>


<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/includes/users.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec ($ch);
$users = json_decode($result);




echo "<h2>Muster Users</h2>";
echo "<table class=\"table table-striped\">
  <thead>
    <tr>
     
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Last Name</th>
      
    </tr>
  </thead>
  <tbody>";

foreach ($users as $user){
   echo "<tr><td>$user[0]</td><td>$user[1]</td></tr>";
}

echo "</tbody> </table> </div>";
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/toolkit.js"></script>
<script src="../js/application.js"></script>
</body>
</html>


