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

$postData = array(
    'action' => 'doLogin',
    'username' => $name,
    'password' => $password
);

// Setup cURL
$ch = curl_init('https://cmpe272.tanmay.one/api/v1/');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);


curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'auth-key: '.'34c7c85e562d40fe581ebab3e9c0823e345b55eef8a7ec02c618f99b4f972d8d',
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

// Send the request
$response = curl_exec($ch);

// Check for errors
if($response === FALSE){
  echo $response;
    die(curl_error($ch));
}
echo  $response;
// Decode the response
$responseData = json_decode($response, TRUE);
$isSucess = $responseData['success'];

if($isSucess == "true"){
  $userVerified = 1;
}


     // if (!empty($name) && !empty($password))
     // {
     //      $userfile = fopen("../txt/credentials.txt", "r");
     //        while(($line=fgets($userfile))!==false){
     //                $line = rtrim($line,"\r\n");
     //                $user = explode(",", $line);
     //                if ($name==$user[0]  && $password==$user[1]){
     //                   $userVerified = 1;
     //                   break;
     //                }
     //            }
     // }

if ($userVerified) {
        $name = ucwords($name);
        echo "<div class='container-fluid pt-4'><div class='alert alert-success' role='alert'>";
        echo "<strong> Welcome, $name!</strong>";
        echo "</div></div>";

        // echo "<div class='container-fluid'> <div class='col-md-4 pt-4'>";
        // echo "<div class='page-header'> <h6>List of Current Users</h6></div>";
        // echo "<table class='table table-striped'>";
        // echo "<thead>
        //           <tr>
        //             <th> Name</th>
        //           </tr>  
        //       </thead>";
        // echo "<tbody>";

        // $users = file("../txt/currentusers.txt");
        // foreach ($users as $user) {
        //     echo "<tr><td>$user</td></tr>";
        // }
        // echo "</tbody>";
        // echo "</table>";
        // echo "</div>";
        // echo "</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'><strong>Invalid Credentials!</strong> You are not authorised to access this page</div>";
    }
?>


</body>
</html>