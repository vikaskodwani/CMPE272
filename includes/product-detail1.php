<?php

// echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
    $pName = htmlspecialchars($_GET["pName"]);
    $pPrice = htmlspecialchars($_GET["pPrice"]);
    $pImage = htmlspecialchars($_GET["pImage"]);
    $pSlugName = htmlspecialchars($_GET["pSlug"]);
    $pId = htmlspecialchars($_GET["pId"]);
    



$name = $_POST['name'];
$password = $_POST['password'];
$userVerified = 0;

$postData = array(
    'action' => 'visitedProduct',
    'slugName' => $pSlugName,
    'username' => 'guest-vik'
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
// echo  $response;
// Decode the response
$responseData = json_decode($response, TRUE);


// echo 'getting review for product '. $pId .'<br>';

// Get reviews of product
$reviewPostData = array(
    'action' => 'getReview',
    'productId' => $pId
);
// echo 'Request ';
// print_r ($reviewPostData);
// echo '<br>';



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
    CURLOPT_POSTFIELDS => json_encode($reviewPostData)
));

// Send the request
$reviewResponse = curl_exec($ch);

// Check for errors
if($reviewResponse === FALSE){
  echo $reviewResponse;
    die(curl_error($ch));
}
// echo  'reviewResponse '.$reviewResponse;
// Decode the response
$reviewResponseData = json_decode($reviewResponse, TRUE);
$reviewCount = count($reviewResponseData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="/css/toolkit-minimal3.css" rel="stylesheet">
    <link href="/css/application-minimal3.css" rel="stylesheet">

    <style type="text/css">

        body{
            margin-top:20px;
            background:#eee;
        }


        .product-content {
            border: 1px solid #dfe5e9;
            margin-bottom: 20px;
            margin-top: 12px;
            background: #fff
        }

        .product-content .carousel-control.left {
            margin-left: 0
        }

        .product-content .product-image {
            background-color: #fff;
            display: block;
            min-height: 238px;
            overflow: hidden;
            position: relative
        }

        .product-content .product-deatil {
            border-bottom: 1px solid #dfe5e9;
            padding-bottom: 17px;
            padding-left: 16px;
            padding-top: 16px;
            position: relative;
            background: #fff
        }

        .product-content .product-deatil h5 a {
            color: #2f383d;
            font-size: 15px;
            line-height: 19px;
            text-decoration: none;
            padding-left: 0;
            margin-left: 0
        }

        .product-content .product-deatil h5 a span {
            color: #9aa7af;
            display: block;
            font-size: 13px
        }

        .product-content .product-deatil span.tag1 {
            border-radius: 50%;
            color: #fff;
            font-size: 15px;
            height: 50px;
            padding: 13px 0;
            position: absolute;
            right: 10px;
            text-align: center;
            top: 10px;
            width: 50px
        }

        .product-content .product-deatil span.sale {
            background-color: #21c2f8
        }

        .product-content .product-deatil span.discount {
            background-color: #71e134
        }

        .product-content .product-deatil span.hot {
            background-color: #fa9442
        }

        .product-content .description {
            font-size: 12.5px;
            line-height: 20px;
            padding: 10px 14px 16px 19px;
            background: #fff
        }

        .product-content .product-info {
            padding: 11px 19px 10px 20px
        }

        .product-content .product-info a.add-to-cart {
            color: #2f383d;
            font-size: 13px;
            padding-left: 16px
        }

        .product-content name.a {
            padding: 5px 10px;
            margin-left: 16px
        }

        .product-info.smart-form .btn {
            padding: 6px 12px;
            margin-left: 12px;
            margin-top: -10px
        }

        .product-entry .product-deatil {
            border-bottom: 1px solid #dfe5e9;
            padding-bottom: 17px;
            padding-left: 16px;
            padding-top: 16px;
            position: relative
        }

        .product-entry .product-deatil h5 a {
            color: #2f383d;
            font-size: 15px;
            line-height: 19px;
            text-decoration: none
        }

        .product-entry .product-deatil h5 a span {
            color: #9aa7af;
            display: block;
            font-size: 13px
        }

        .load-more-btn {
            background-color: #21c2f8;
            border-bottom: 2px solid #037ca5;
            border-radius: 2px;
            border-top: 2px solid #0cf;
            margin-top: 20px;
            padding: 9px 0;
            width: 100%
        }

        .product-block .product-deatil p.price-container span,
        .product-content .product-deatil p.price-container span,
        .product-entry .product-deatil p.price-container span,
        .shipping table tbody tr td p.price-container span,
        .shopping-items table tbody tr td p.price-container span {
            color: #21c2f8;
            font-family: Lato, sans-serif;
            font-size: 24px;
            line-height: 20px
        }

        .product-info.smart-form .rating label {
            margin-top: 0
        }

        .product-wrap .product-image span.tag2 {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            padding: 10px 0;
            color: #fff;
            font-size: 11px;
            text-align: center
        }

        .product-wrap .product-image span.sale {
            background-color: #57889c
        }

        .product-wrap .product-image span.hot {
            background-color: #a90329
        }

        .shop-btn {
            position: relative
        }

        .shop-btn>span {
            background: #a90329;
            display: inline-block;
            font-size: 10px;
            box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
            font-weight: 700;
            border-radius: 50%;
            padding: 2px 4px 3px!important;
            text-align: center;
            line-height: normal;
            width: 19px;
            top: -7px;
            left: -7px
        }

        .description-tabs {
            padding: 30px 0 5px!important
        }

        .description-tabs .tab-content {
            padding: 10px 0
        }

        .product-deatil {
            padding: 30px 30px 50px
        }

        .product-deatil hr+.description-tabs {
            padding: 0 0 5px!important
        }

        .product-deatil .carousel-control.left,
        .product-deatil .carousel-control.right {
            background: none!important
        }

        .product-deatil .glyphicon {
            color: #3276b1
        }

        .product-deatil .product-image {
            border-right: none!important
        }

        .product-deatil .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .product-deatil .name small {
            display: block
        }

        .product-deatil .name a {
            margin-left: 0
        }

        .product-deatil .price-container {
            font-size: 24px;
            margin: 0;
            font-weight: 300
        }

        .product-deatil .price-container small {
            font-size: 12px
        }

        .product-deatil .fa-2x {
            font-size: 16px!important
        }

        .product-deatil .fa-2x>h5 {
            font-size: 12px;
            margin: 0
        }

        .product-deatil .fa-2x+a,
        .product-deatil .fa-2x+a+a {
            font-size: 13px
        }

        .profile-message ul {
            list-style: none ;
        }

        .product-deatil .certified {
            margin-top: 10px
        }

        .product-deatil .certified ul {
            padding-left: 0
        }

        .product-deatil .certified ul li:not(first-child) {
            margin-left: -3px
        }

        .product-deatil .certified ul li {
            display: inline-block;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 13px 19px
        }

        .product-deatil .certified ul li:first-child {
            border-right: none
        }

        .product-deatil .certified ul li a {
            text-align: left;
            font-size: 12px;
            color: #6d7a83;
            line-height: 16px;
            text-decoration: none
        }

        .product-deatil .certified ul li a span {
            display: block;
            color: #21c2f8;
            font-size: 13px;
            font-weight: 700;
            text-align: center
        }

        .product-deatil .message-text {
            width: calc(100% - 70px)
        }

        @media only screen and (min-width:1024px) {
            .product-content div[class*=col-md-4] {
                padding-right: 0
            }
            .product-content div[class*=col-md-8] {
                padding: 0 13px 0 0
            }
            .product-wrap div[class*=col-md-5] {
                padding-right: 0
            }
            .product-wrap div[class*=col-md-7] {
                padding: 0 13px 0 0
            }
            .product-content .product-image {
                border-right: 1px solid #dfe5e9
            }
            .product-content .product-info {
                position: relative
            }
        }

        .message img.online {
            width:40px;
            height:40px;
        }
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="col-sm-12 col-md-12 col-lg-12">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12 ">
                <div class="product-image">
                    <div id="myCarousel-2" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="item active">
                                <img src= <?php print($pImage); ?> alt="">
                            </div>
                            <!-- Slide 2 -->
                            <div class="item">
                                <img src=<?php print($pImage); ?> alt="">
                            </div>
                            <!-- Slide 3 -->
                            <div class="item">
                                <img src=<?php print($pImage); ?> alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                        <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">

                <h2 class="name">
                   <?php print($pName); ?>
                    <small>Serviced by <a href="javascript:void(0);">progresswithus</a></small>
<!--                     <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-muted"></i>
 --><!--                     <span class="fa fa-2x"><h5>(109) Votes</h5></span>-->
                     <!-- <a href="javascript:void(0);"><?php echo $reviewCount ?> customer reviews</a> -->
                </h2>
                <hr>
                <h3 class="price-container">
                    $<?php print($pPrice); ?>
                    <small>*includes tax</small>
                </h3>
                <div class="certified">
                    <ul>
                    </ul>
                </div>
                <hr>
                <div class="description description-tabs">
                    <ul id="myTab" class="nav nav-pills">
                        <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Product Description </a></li>
                        <li class=""><a href="#specifications" data-toggle="tab">Specifications</a></li>
                        <li class=""><a href="#reviews" data-toggle="tab">Reviews</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="more-information">
                            <br>
                            <strong>Description Title</strong>
                            <p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
                        </div>
                        <div class="tab-pane fade" id="specifications">
                            <br>
                            <dl class="">
                                <dt>Gravina</dt>
                                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dd>Eget lacinia odio sem nec elit.</dd>
                                <br>

                                <dt>Test lists</dt>
                                <dd>A description list is perfect for defining terms.</dd>
                                <br>

                                <dt>Altra porta</dt>
                                <dd>Vestibulum id ligula porta felis euismod semper</dd>
                            </dl>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <br>
                            <form method="post" class="well padding-bottom-10" onsubmit="return false;">
<!--                                 <textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
 -->                                <div style="margin-top: 10px">
<!--                                     <button type="submit" class="btn btn-sm btn-primary pull-right">
                                        Submit Review
                                    </button>
 -->                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
                                </div>
                            </form>

<?php  

if($reviewCount > 0){
    // echo "Display reviews here ....".$reviewCount;
     foreach ($reviewResponseData as $key => $value) {
    $pId = $value["id"];
    $pReview = $value["review"];
    $pUser = $value["name"];
    $pRating = $value["rating"];
    // $pSlug = $value["slug"]; 



        echo"
        
 <div class=\"chat-body no-padding profile-message\">
                                <ul>
                                    <li class=\"message\">
                                        
                                        <span class=\"message-text\">
                                                    <a href=\"javascript:void(0);\" class=\"username\">
                                                       $pUser
                                                        <span class=\"pull-right\">
                                                            $pRating<i class=\"fa fa-star fa-2x text-primary\"></i>
                                                        </span>
                                                    </a>
                                                    $pReview
                                                </span>
                                      
                                    </li>

                                </ul>
                            </div>";

        }
    }

echo
"                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>



<script src=\"../js/jquery.min.js\"></script>
<script src=\"../js/toolkit3.js\"></script>
<script src=\"../js/application3.js\"></script>
<script type=\"../js/javascript\">


</script>
</body>
</html>

        ";


?>
                           