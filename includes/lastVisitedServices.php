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
    <link href="/css/toolkit-minimal.css" rel="stylesheet">
    <link href="/css/application-minimal.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/productgrid.css">
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
    <h4>Last Visited Services </h4>
    <hr>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product1">
            <div class="my-list">
                <img class="align-content-center" src="../images/s1.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Competition Analysis</h3>
                <h6 class="text-center">Competition Analysis </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s1.jpg " style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail1.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product2">
            <div class="my-list">
                <img class="align-content-center" src="../images/s2.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Business Plan</h3>
                <h6 class="text-center">Business Plan </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    
                    <img src="../images/s2.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail2.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product3">
            <div class="my-list">
                <img class="align-content-center" src="../images/s3.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">International Expansion Advice</h3>
                <h6 class="text-center">International Expansion Advice </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <p></p>
                    <img src="../images/s3.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail3.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product4">
            <div class="my-list">
                <img class="align-content-center" src="../images/s4.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Branding & Rebranding</h3>
                <h6 class="text-center">Branding & Rebranding </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s4.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail4.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product5">
            <div class="my-list">
                <img class="align-content-center" src="../images/s5.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Staff Training</h3>
                <h6 class="text-center">Staff Training </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s5.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail5.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product6">
            <div class="my-list">
                <img class="align-content-center" src="../images/s6.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Strategic Plans</h3>
                <h6 class="text-center">Strategic Plans </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s6.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail6.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product7">
            <div class="my-list">
                <img class="align-content-center" src="../images/s7.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Succession Plans</h3>
                <h6 class="text-center">Succession Plans </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s7.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail7.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product8">
            <div class="my-list">
                <img class="align-content-center" src="../images/s8.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Market Shifts</h3>
                <h6 class="text-center">Market Shifts </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s8.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail8.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product9">
            <div class="my-list">
                <img class="align-content-center" src="../images/s9.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Service Development</h3>
                <h6 class="text-center">Service Development </h6>
                <div class="offer text-center">Contact us</div>

                <div class="offer text-center"></div>
                <div class="detail">
                    
                    <img src="../images/s9.jpg " style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail9.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 custom-hidden" id="product10">
            <div class="my-list">
                <img class="align-content-center" src="../images/s10.jpg" style="width: 200px; height: 150px"
                     alt="dsadas"/>
                <h3 class="text-center">Pricing Analysis</h3>
                <h6 class="text-center">Pricing Analysis </h6>
                <div class="offer text-center">Contact us</div>
                <div class="detail">
                    <img src="../images/s10.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <a href="service-detail10.php" class="btn btn-primary m-2">View Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/toolkit.js"></script>
<script src="../js/application.js"></script>
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