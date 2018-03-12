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

<?php


//$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
$connection = mysqli_connect('shareddb1d.hosting.stackcp.net', 'admin-13', 'aravi-13', 'credentials-313726f7');
//$connection = mysqli_connect('localhost', 'root', '', 'php');
$cumurow = array();
echo "<div class='container'>";
echo "<h2>Our users</h2>";
echo "<table class=\"table table-striped col-md-6\">
  <thead>
    <tr>
     
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Last Name</th>
      
    </tr>
  </thead>
  <tbody>";

if ($connection) {
    $result = mysqli_query($connection, "Select FirstName,LastName from `Signup`");
    // echo mysqli_num_rows($result);
    //$dat = mysqli_fetch_row($result);
    while ($row = mysqli_fetch_row($result)) {
        array_push($cumurow, $row);
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
    }
    /*  echo count($cumurow);
      print_r($cumurow);*/

    header('Content-Type: application/json');
 //   echo json_encode($cumurow);
} else {
    echo mysqli_connect_errno();
}
echo "</tbody> </table>";

?>


<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "http://www.muster.tech/users.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$productList =  json_decode(curl_exec($ch),true);
//echo count($productList);

//print_r($productList);

echo "<h2>Muster Users</h2>";
echo "<table class=\"table table-striped\">
  <thead>
    <tr>
     
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Last Name</th>
      
    </tr>
  </thead>
  <tbody>";

foreach ($productList as $product){

   echo "<tr><td>$product[0]</td><td>$product[1]</td></tr>";
   /* foreach ($product as $item){

        echo $item."\t";
    }*/
}

echo "</tbody> </table> </div>";
//echo $productList[1];
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.js"></script>
<script src="dist/application.js"></script>
</body>
</html>


