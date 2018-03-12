<?php
function array_key_lookup($haystack, $needle)
{
    $matches = preg_grep("/$needle/", array_keys($haystack));
    return array_intersect_key($haystack, array_flip($matches));
}

?>

<?php
$lvl = $_COOKIE;
$arr_lvl = array();
$filtered_lvl = array_key_lookup($lvl, "product");
arsort($filtered_lvl);
$lvl5 = array_slice($filtered_lvl, 0, 5);
//echo "Last 5 visited products:";
foreach ($lvl5 as $key => $value) {
    // echo "$key\n";
    array_push($arr_lvl, $key);
}
//print_r($arr_lvl);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="dist/toolkit-minimal.css" rel="stylesheet">
    <link href="dist/application-minimal.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/productgrid.css">
    <style>
        .custom-hidden{
            display:none;
        }

        .custom-show{
            display:inline;
        }

    </style>
</head>
<body>


<div class="container pt-4">
    <h4>Last Visited Products </h4>
    <hr>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product1">
            <div class="my-list">
                <img class="align-content-center" src="img/task.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Task app</h3>
                <h6 class="text-center">Product-ID:TDU001 </h6>
                <div class="offer text-center">Extra 5% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/task.jpg " style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail1.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product2">
            <div class="my-list">
                <img class="align-content-center" src="img/calculator.jpeg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Calculator app</h3>
                <h6 class="text-center">Product-ID:TDU002 </h6>
                <div class="offer text-center">Extra 10% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/calculator.jpeg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail2.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product3">
            <div class="my-list">
                <img class="align-content-center" src="img/calendar.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Calendar app</h3>
                <h6 class="text-center">Product-ID:TDU003 </h6>
                <div class="offer text-center">Extra 5% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/calendar.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail3.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product4">
            <div class="my-list">
                <img class="align-content-center" src="img/Filemanager.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">File Manager</h3>
                <h6 class="text-center">Product-ID:TDU004 </h6>
                <div class="offer text-center">Extra 3% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/Filemanager.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail4.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product5">
            <div class="my-list">
                <img class="align-content-center" src="img/torchlight.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Torch App</h3>
                <h6 class="text-center">Product-ID:TDU005 </h6>
                <div class="offer text-center">Extra 11% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/torchlight.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail5.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product6">
            <div class="my-list">
                <img class="align-content-center" src="img/gallery.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Gallery app</h3>
                <h6 class="text-center">Product-ID:TDU006 </h6>
                <div class="offer text-center">Extra 1% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/gallery.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail6.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product7">
            <div class="my-list">
                <img class="align-content-center" src="img/musicplayer.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Music Player</h3>
                <h6 class="text-center">Product-ID:TDU007 </h6>
                <div class="offer text-center">Extra 9% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/musicplayer.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail7.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product8">
            <div class="my-list">
                <img class="align-content-center" src="img/reddit.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Reddit app</h3>
                <h6 class="text-center">Product-ID:TDU008 </h6>
                <div class="offer text-center">Extra 4% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/reddit.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail8.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product9">
            <div class="my-list">
                <img class="align-content-center" src="img/camera.png" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Camera</h3>
                <h6 class="text-center">Product-ID:TDU009 </h6>
                <div class="offer text-center">Extra 3% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/camera.png " style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail9.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product10">
            <div class="my-list">
                <img class="align-content-center" src="img/message.png" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Message</h3>
                <h6 class="text-center">Product-ID:TDU010 </h6>
                <div class="offer text-center">Extra 19% Off</div>
                <div class="detail">
                    <p>A beautiful app that integrates with our AI to aid you everyday </p>
                    <img src="img/message.png" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="product-detail10.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.js"></script>
<script src="dist/application.js"></script>
<script type="text/javascript">
    <?php
    $js_array = json_encode($arr_lvl);
    echo "var js_arr = " . $js_array . ";\n";
    ?>
    console.log("Ids array:" + js_arr);
    $(document).ready(function () {

        $.each(js_arr, function() {
            $('#'+this).removeClass('custom-hidden');
            $('#'+this).addClass('custom-show');
        });

        console.log("done");
    });

</script>
</body>
</html>