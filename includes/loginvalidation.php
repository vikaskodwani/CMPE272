<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
<link href="/css/toolkit-minimal.css" rel="stylesheet">
<?php
$name = $_POST['name'];
$password = $_POST['password'];
$userVerified = 0;

     if (!empty($name) && !empty($password))
     {
          $userfile = fopen("../txt/credentials.txt", "r");
            while(($line=fgets($userfile))!==false){
                    $line = rtrim($line,"\r\n");
                    $user = explode(",", $line);
                    if ($name==$user[0]  && $password==$user[1]){
                       $userVerified = 1;
                       break;
                    }
                }
     }

if ($userVerified) {
        $name = ucwords($name);
        echo "<div class='container-fluid pt-4'><div class='alert alert-success' role='alert'>";
        echo "<strong> Welcome, $name!</strong>";
        echo "</div></div>";

        echo "<div class='container-fluid'> <div class='col-md-4 pt-4'>";
        echo "<div class='page-header'> <h6>List of Current Users</h6></div>";
        echo "<table class='table table-striped'>";
        echo "<thead>
                  <tr>
                    <th> Name</th>
                  </tr>  
              </thead>";
        echo "<tbody>";

        $users = file("../txt/currentusers.txt");
        foreach ($users as $user) {
            echo "<tr><td>$user</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'><strong>Invalid Credentials!</strong> You are not authorised to access this page</div>";
    }
?>


</body>
</html>