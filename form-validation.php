<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link href="dist/toolkit-minimal.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-light navbar-toggleable-sm navbar-static-top text-uppercase app-navbar mb-5">
    <button
            class="navbar-toggler navbar-toggler-right hidden-md-up"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand mr-auto" href="../">
        <span>Vladyno</span>
    </a>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacts">Contacts</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link">Admin Login</a>
            </li>


        </ul>
    </div><!--/.nav-collapse -->
</nav>

<?php
$name = $_POST['name'];
$password = $_POST['password'];
$connection = mysqli_connect('shareddb1d.hosting.stackcp.net', 'admin-13', 'aravi-13', 'credentials-313726f7');
//$connection = mysqli_connect('localhost', 'root', '', 'php');
//mysqli_query($connection,"INSERT INTO `Credentials`( `Username`, `Password`) VALUES ('aravi','aravi')");
if ($connection) {
    // mysqli_query($connection,"INSERT INTO `Credentials`( `Username`, `Password`) VALUES ('aravi','aravi')");
    $query = mysqli_query($connection, "Select Username,Password from `Credentials`  where Username = '$name' and Password = '$password'");
    $data = mysqli_fetch_row($query);

    if (count($data) != 0) {
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

        $users = file("./currentusers.txt");
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

} else {
    echo "Error: Unable to connect to MySQL." . PHP_EOL . "\n";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . ' ';
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL . ' ';
    exit;
}

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.min.js"></script>
</body>
</html>