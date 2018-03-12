<?php
function array_key_lookup($haystack, $needle)
{
    $matches = preg_grep("/$needle/", array_keys($haystack));

    return array_intersect_key($haystack, array_flip($matches));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- These meta tags come first. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Happening</title>

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

    <style>
        @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
            body {
                width: 1px;
                min-width: 100%;
                *width: 100%;
            }

            #stage {
                height: 1px;
                overflow: auto;
                min-height: 100vh;
                -webkit-overflow-scrolling: touch;
            }
        }

    </style>

</head>


<body>


<div class="pt-4 py-5 px-1" style="background: url(img/iPad-Retina.png) top center; background-size: cover">
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

                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./admin-login.php">Secure Section</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       User Section
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="sign-up-form.php">User Creation</a>
                        <a class="dropdown-item" href="user-search.php">User Search</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="website-users.php">Website Users</a>
                </li>


            </ul>
        </div><!--/.nav-collapse -->
    </nav>
</div>


<div class="block app-block-intro">
    <div class="container text-xs-center">
        <h1 class="block-title mb-0 text-uppercase app-myphone-brand">Vladyno</h1>
        <p class="lead mb-5 pb-5">One app to rule them all</p>
        <!-- <img src="img/iphone-to-iphone-sized.jpg">-->
    </div>
</div>

<div class="block block-bordered-lg">
    <div class="container text-center app-translate-15" data-transition="entrance">
        <blockquote class="pull-quote">
            <img class="rounded-circle" src="img/quickorder-301139.jpg">-
            <p>
                “We make beautiful apps. These apps would definitely be part of your life and increase your productivity
                tremendously”
            </p>
            <cite>Arav, Creator of Vladyno</cite>
        </blockquote>
    </div>
</div>

<div class="block block-bordered-lg pb-0 app-block-stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center pb-5">
                <p class="lead">
                    We've been working for over 100 years to build the best possible app for all your needs. We're glad
                    that others agree.
                </p>
                <div class="row my-4">
                    <div class="col-6 mb-3">
                        <div class="statcard">
                            <h1 class="statcard-number block-title">92m</h1>
                            <span class="statcard-desc">Downloads</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="statcard">
                            <h1 class="statcard-number block-title">8m</h1>
                            <span class="statcard-desc">Reviews</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 hidden-md-down">
                    <div class="col-6 mb-3">
                        <div class="statcard">
                            <h1 class="statcard-number block-title">78k</h1>
                            <span class="statcard-desc">Developers</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="statcard">
                            <h1 class="statcard-number block-title">97%</h1>
                            <span class="statcard-desc">Happiness</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block block-bordered-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center mb-5">
                <p class="lead mx-auto">With over <strong>20 years of collective experience</strong>, we take the
                    unthinkable and make it just a couple quick taps away.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="featured-list">
                    <li class="mb-5">
                        <div class="featured-list-icon text-primary">
                            <span class="icon icon-image"></span>
                        </div>
                        <p class="featured-list-icon-text mb-0"><strong>Upload unlimited images</strong></p>
                        <p class="featured-list-icon-text">
                            We process all the images you upload and take full advantage of modern cloud based storage
                            to host them at blazing fast speeds.
                        </p>
                    </li>

                    <li class="mb-5">
                        <div class="featured-list-icon text-primary">
                            <span class="icon icon-hour-glass"></span>
                        </div>
                        <p class="featured-list-icon-text mb-0"><strong>Tracked time savings</strong></p>
                        <p class="featured-list-icon-text">
                            This means you save tons of time by using our world class task manager and calendar and
                            constantly reminds you how great it is.
                        </p>
                    </li>

                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="featured-list">

                    <li class="mb-5">
                        <div class="featured-list-icon text-primary">
                            <span class="icon icon-cloud"></span>
                        </div>
                        <p class="featured-list-icon-text mb-0"><strong>Share from anywhere</strong></p>
                        <p class="featured-list-icon-text">
                            Do it over the cloud, from anywhere, on any device. Vladyno is super fast and always
                            available, to not only you, but all your friends
                        </p>
                    </li>

                    <li class="mb-5">
                        <div class="featured-list-icon text-primary">
                            <span class="icon icon-emoji-neutral"></span>
                        </div>
                        <p class="featured-list-icon-text mb-0"><strong>Use stickers and express yourself</strong></p>
                        <p class="featured-list-icon-text">
                            Share with emoji anyone in the world. We've baked them directly into Vladyno. These probably
                            won't help with productivity though.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="block block-bordered-lg">
    <div class="container" id="products">
        <h4>Products </h4>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product1">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product2">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product3">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product4">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product5">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product6">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product7">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product8">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product9">
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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product10">
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

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product11"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product12"></div>
           <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product11">
                <div class="my-list">
                    <img class="align-content-center" src="img/task.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <h3 class="text-center">File Manager</h3>
                    <h6 class="text-center">Product-ID:TDU004 </h6>
                    <div class="offer text-center">Extra 3% Off</div>
                    <div class="detail">
                        <p>A beautiful app that integrates with our AI to aid you everyday </p>
                        <img src="img/task.jpg " style="width: 200px; height: 150px"
                             alt="dsadas"/>
                        <a href="#" class="btn btn-primary m-2">View Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="product12">
                <div class="my-list">
                    <img class="align-content-center" src="img/task.jpg" style="width: 200px; height: 150px"
                         alt="dsadas"/>
                    <h3 class="text-center">File Manager</h3>
                    <h6 class="text-center">Product-ID:TDU004 </h6>
                    <div class="offer text-center">Extra 3% Off</div>
                    <div class="detail">
                        <p>A beautiful app that integrates with our AI to aid you everyday </p>
                        <img src="img/task.jpg " style="width: 200px; height: 150px"
                             alt="dsadas"/>
                        <a href="#" class="btn btn-info">View Detail</a>
                    </div>
                </div>
            </div>
-->
            <div class="col-md-6 text-center mt-5">
                <h5><a href="last-visited-products.php" class="text-center"> 5 Last visited products</a></h5>
            </div>
            <div class="col-md-6 text-center mt-5">
                <h5><a href="most-visited-products.php">5 Most visited products</a></h5>
            </div>

        </div>
    </div>
</div>


<div class="block block-bordered-lg pl-0 pt-0 pr-0">
    <div id="carousel-example-generic" class="carousel carousel-light slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <p class="lead mx-auto text-center">
                                    Instead of you working, built with a touch of AI and Machine learnng <span
                                            class="hidden-xs">our apps learn your way and assists you in every possible way.</span>
                                </p>
                            </div>
                        </div>
                        <!--<img class="img-fluid mt-5 app-block-game-img d-block img-fluid" src="img/StockSnap_V5GYFMPMBR.jpg" style="width:651px;height:154px;" >-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <p class="lead mx-auto text-center">
                                    Our task scheduler makes sure that you never procrastinate and get your things done
                                    faster<span class="hidden-xs">, as Happiness and a pinch of motivation is imbibed within our apps</span>
                                </p>
                            </div>
                        </div>
                        <!--<img class="img-fluid mt-5 app-block-game-img d-block img-fluid" src="img/StockSnap_V5GYFMPMBR.jpg" style="width:651px;height:154px;" >-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <p class="lead mx-auto text-center">
                                    Well what do you know we make really cool apps, download them, customize them, <span
                                            class="hidden-xs">show it to your friends.</span>
                                </p>
                            </div>
                        </div>
                        <!--<img class="img-fluid mt-5 app-block-game-img d-block img-fluid" src="img/StockSnap_V5GYFMPMBR.jpg" style="width:651px;height:154px;" >-->
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon icon-chevron-thin-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon icon-chevron-thin-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="block block-bordered-lg pb-0 app-block-stats">
    <div class="container">
        <div class="statcard p-3">
            <h3 class="statcard-number">12,938</h3>
            <span class="statcard-desc">Page views</span>
        </div>
        <div class="statcard p-3 text-xs-center">
            <h3 class="statcard-number">758</h3>
            <span class="statcard-desc">Downloads</span>
        </div>
        <div class="statcard p-3 text-xs-right">
            <h3 class="statcard-number">1,293</h3>
            <span class="statcard-desc">Sign-ups</span>
        </div>
    </div>
</div>

<div class="block block-bordered-lg text-center">
    <div class="container-fluid">
        <p class="lead mb-4">
            Join over 900,000 nerds already using Vladyno. Get the Vladyno App <strong>free</strong> forever!
        </p>
        <form class="form-inline d-flex justify-content-center">
            <input class="form-control mb-3" placeholder="email address">
            <input class="form-control mb-3 mx-1" type="password" placeholder="Create a Password">
            <button class="btn btn-primary mb-3">Get started</button>
        </form>
        <small class="text-muted">
            By clicking "Get started" I agree to Vladyno's
            <a href="#">Terms of service</a>
        </small>
    </div>
</div>

<div class="block block-bordered-lg text-center">
    <div class="container-fluid">
        <div class="col-lg-12">
            <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="icoGithub" title="Github"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="block app-block-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 mb-4">
                <ul class="list-unstyled list-spaced">
                    <li><h6 class="text-uppercase">Products</h6></li>
                    <li>Todo</li>
                    <li>Calendario</li>
                    <li>Email Town</li>
                    <li>Pomodorotary</li>
                    <li>ChillTower</li>
                </ul>
            </div>
            <div class="col-sm-2 mb-4">
                <ul class="list-unstyled list-spaced">
                    <li><h6 class="text-uppercase">Extras</h6></li>
                    <li>AutotuneU</li>
                    <li>Freestyler</li>
                    <li>Chillaxation</li>
                </ul>
            </div>
            <div class="col-sm-2 mb-4">
                <ul class="list-unstyled list-spaced">
                    <li><h6 class="text-uppercase">Support</h6></li>
                    <li>Online Support</li>
                    <li>Telephone Sales</li>
                    <li>Help Desk</li>
                    <li>Workshops</li>
                </ul>
            </div>
            <div class="col-sm-2 mb-4">
                <ul class="list-unstyled list-spaced">
                    <li><h6 class="text-uppercase" id="contacts">Contacts</h6></li>
                    <?php
                    $contacts = file("./contacts.txt");
                    foreach ($contacts as $contact) {
                        echo "<li>$contact</li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="col-sm-4">
                <h6 class="text-uppercase">About</h6>
                <p> We are a small company that aims towards making beautiful apps that serve your needs. Go ahead and
                    give it a try. To know more about our company, click on the button above to subscribe.</p>
            </div>
        </div>
    </div>


</div>



<!-- Include jQuery (required) and the JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="dist/tether.min.js"></script>
<script src="dist/toolkit.js"></script>
<script src="dist/application.js"></script>


<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '{your-app-id}',
            cookie     : true,
            xfbml      : true,
            version    : '{latest-api-version}'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>