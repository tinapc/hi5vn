<!doctype html>
<!--[if lt IE 7]>
<body class="no-js ie9 ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<body class="no-js ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<body class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $template['title']?></title>

    <meta name="description" content="Hi5Vietnam">
    <meta name="keywords" content="Hi5Vietnam">

    <!--This meta only for Facebook-->
    <meta property="og:image" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Hi5Vietnam">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="Hi5Vietnam">
    <meta property="fb:app_id" content="">
    <!--End Meta for Facebook-->

    <!--Meta for Twitter-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content=" http://www.example.com/image.jpg">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="The Name or Title Here">
    <meta itemprop="description" content="This is the page description">
    <meta itemprop="image" content=" http://www.example.com/image.jpg">

    <link rel="icon" type="image/png" href="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!--Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>

    <!--Style inlcide-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/custom_modal.css">
    <link rel="stylesheet" href="/assets/css/custom_responsive.css">
    <!--Jquery Lib include-->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


    <!--[if lt IE 9]> HTML5Shiv
    <script src="./assets/js/html5shiv.min.js"></script>
    <script src="./assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="header">
    <a class="logo" href="<?php echo base_url()?>">
        <img src="/assets/img/logo.png" alt="Hi5Vietnam" class="img-responsive">
    </a>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default my-nav-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".nav-top-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-top-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Location <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Da Nang</a></li>
                                    <li><a href="#">HCM</a></li>
                                    <li><a href="#">Ha Noi</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Vietnam</a></li>
                                    <li><a href="#">France</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="nav navbar-nav navbar-right">

                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" data-toggle="modal" data-target="#ml-login" onclick="$('#ml-register').modal('hide')">Login</a>
                                </li>
                                <li class=""><a href="#" data-toggle="modal" data-target="#ml-register">Sign Up</a></li>
                            </ul>

                        </div>

                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
</div>
<!--End header-->