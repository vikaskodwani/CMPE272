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
$password = $_POST['password'];


// The data to send to the API
$postData = array(
    'action' => 'addUser',
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'password' => $password,
    'homeAddress' => $address,
    'homePhone' => $homePhone,
    'cellPhone' => $cellPhone
);
// $a = json_encode($postData);
// echo $a;

// $ar = json_decode($a);
// echo '111';
// echo $ar[0];

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

// Decode the response
echo  $response;
echo "<div class='container pt-5'><div class=\"alert alert-success\" role=\"alert\">
 Signed up successfully!
</div> </div>";

$responseData = json_decode($response, TRUE);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/toolkit.js"></script>
<script src="/js/application.js"></script>

</body>
</html>
