<section id="hero-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center general_info_location">
                <h1>Welcome to <?php echo $data['location_fullname']?></h1>

                <div>
                    <ul class="list-inline">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>2000</span>
                        </li>
                        <li>
                            <i class="fa fa-home"></i>
                            <span>2000</span>
                        </li>
                        <li>
                            <i class="fa fa-camera"></i>
                            <span>2000</span>
                        </li>
                        <li>
                            <i class="fa fa-info-circle"></i>
                            <span>500</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="main-nav">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default my-nav-top nav-second" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target=".nav-top-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-top-2">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0)"
                               onclick="$('.location-information').slideToggle(); $(this).parent().toggleClass('active')"><i
                                    class="fa fa-info"></i> About Da Nang</a>
                        </li>
                    </ul>

                    <div class="nav navbar-nav navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo $data['location_url'] ?>"><i class="fa fa-th"></i> All </a></li>
                            <li><a href="<?php echo $data['location_url'] ?>photo"><i class="fa fa-image"></i> Photos </a></li>
                            <li><a href="<?php echo $data['location_url'] ?>tips"><i class="fa fa-info-circle"></i> Tips </a></li>
                            <li><a href="<?php echo $data['location_url'] ?>question"><i class="fa fa-question-circle"></i> Questions </a></li>
                            <li><a href="<?php echo $data['location_url'] ?>hotel"><i class="fa fa-home"></i> Hotels </a></li>
                            <li><a href="<?php echo $data['location_url'] ?>restaurant"><i class="fa fa-home"></i> Restaurants </a></li>
                            <li><a href="<?php echo $data['location_url'] ?>place"><i class="fa fa-map-marker"></i> Places </a></li>
                        </ul>
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>
<div id="main-content" class="main-content">
    <div class="container">
        <div class="location-information">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#information" role="tab" data-toggle="tab">Information</a>
                        </li>
                        <li><a href="#weather" role="tab" data-toggle="tab">Weather</a></li>
                        <li><a href="#traffic" role="tab" data-toggle="tab">Traffic</a></li>
                        <li><a href="#transit" role="tab" data-toggle="tab">Transit</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="information">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                            <a href="http://en.wikipedia.org/wiki/Da_Nang" class="btn btn-primary" target="_blank">View
                                More</a>
                        </div>
                        <div class="tab-pane" id="weather">
                            <div id="map-weather" class="map"></div>
                        </div>
                        <div class="tab-pane" id="traffic">
                            <div id="map-traffic" class="map"></div>
                        </div>
                        <div class="tab-pane" id="transit">
                            <div id="map-transit" class="map"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h2 class="cat_title">Top Place Interest</h2>

                <?php if ( !empty($data['top_places'])) : ?>
                    <div class="row">
                        <?php foreach($data['top_places'] as $top_place) : ?>
                            <div class="col-sm-4 col-md-4">
                                <div class="item place img-thumbnail">
                                    <a href="<?php echo $data['location_url']?>place-detail/<?php echo $top_place->slug?>">
                                        <img src="/sources/travel2.jpg" class="img-responsive">

                                        <div class="short">
                                            <i class="fa fa-map-marker pull-right"></i>
                                            <span><?php echo $top_place->name?></span>
        											<span class="desc">
        												Attraction 1 km from center of Da Nang
        											</span>
                                        </div>
                                        <div class="social">
                                            <button class="btn btn-primary btn-sm">Share</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>

                <div class="clearfix"></div>
                <h2 class="cat_title">New Photo</h2>

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="item photo img-thumbnail">
                            <a href="detail-place.html">
                                <img src="/sources/travel2.jpg" class="img-responsive">

                                <div class="short">
                                    <i class="fa fa-camera pull-right"></i>
                                    <span>Picture take in Ha Noi</span>
											<span class="desc">
												Photo by Leonel Messi
											</span>
                                </div>
                                <div class="social">
                                    <button class="btn btn-primary btn-sm">Share Photo</button>
                                    <button class="btn btn-primary btn-sm">Like</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item photo img-thumbnail">
                            <a href="detail-place.html">
                                <img src="/sources/pic4.jpg" class="img-responsive">

                                <div class="short">
                                    <i class="fa fa-camera pull-right"></i>
                                    <span>Picture take in Da Nang</span>
											<span class="desc">
												Photo by Leonel Messi
											</span>
                                </div>
                                <div class="social">
                                    <button class="btn btn-primary btn-sm">Share Photo</button>
                                    <button class="btn btn-primary btn-sm">Like</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item photo img-thumbnail">
                            <a href="detail-place.html">
                                <img src="/sources/pic1.jpg" class="img-responsive">

                                <div class="short">
                                    <i class="fa fa-camera pull-right"></i>
                                    <span>Picture take in Hoi An</span>
											<span class="desc">
												Photo by Leonel Messi
											</span>
                                </div>
                                <div class="social">
                                    <button class="btn btn-primary btn-sm">Share Photo</button>
                                    <button class="btn btn-primary btn-sm">Like</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="item photo img-thumbnail">
                            <a href="detail-place.html">
                                <img src="/sources/travel2.jpg" class="img-responsive">

                                <div class="short">
                                    <i class="fa fa-camera pull-right"></i>
                                    <span>Picture take in Ha Noi</span>
											<span class="desc">
												Photo by Leonel Messi
											</span>
                                </div>
                                <div class="social">
                                    <button class="btn btn-primary btn-sm">Share Photo</button>
                                    <button class="btn btn-primary btn-sm">Like</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item photo img-thumbnail">
                            <a href="detail-place.html">
                                <img src="/sources/pic4.jpg" class="img-responsive">

                                <div class="short">
                                    <i class="fa fa-camera pull-right"></i>
                                    <span>Picture take in Da Nang</span>
											<span class="desc">
												Photo by Leonel Messi
											</span>
                                </div>
                                <div class="social">
                                    <button class="btn btn-primary btn-sm">Share Photo</button>
                                    <button class="btn btn-primary btn-sm">Like</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item photo img-thumbnail">
                            <a href="detail-place.html">
                                <img src="/sources/pic1.jpg" class="img-responsive">

                                <div class="short">
                                    <i class="fa fa-camera pull-right"></i>
                                    <span>Picture take in Hoi An</span>
											<span class="desc">
												Photo by Leonel Messi
											</span>
                                </div>
                                <div class="social">
                                    <button class="btn btn-primary btn-sm">Share Photo</button>
                                    <button class="btn btn-primary btn-sm">Like</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <h2 class="cat_title">Top Tips</h2>

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="item tip img-thumbnail">
                            <a href="detail-tip.html">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="avatar pull-left img-thumbnail">
                                            <img src="/sources/travel2.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="text-short pull-right">
                                            <i class="fa fa-quote-left"></i>

                                            <p>It is summer and good time to visit Jerash , you will visit a historical
                                                places in Jordan , Ajloun Petra, Karak , Madaba , and Wadi Rum...</p>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="short">
                                    <i class="fa fa-info-circle pull-right"></i>
                                    <span>Tip by Hung Nguyen</span>
											<span class="desc">
												About Da Nang
											</span>
                                </div>
                            </a>

                            <div class="count-like-comment text-center">
                                <ul class="list-inline">
                                    <li>10 <i class="fa fa-comment"></i></li>
                                    <li>10 <i class="fa fa-thumbs-o-up"></i></li>
                                </ul>
                            </div>

                            <div class="social">
                                <button class="btn btn-primary btn-sm">Share Tip</button>
                                <button class="btn btn-primary btn-sm">Like</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item tip img-thumbnail">
                            <a href="detail-tip.html">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="avatar pull-left img-thumbnail">
                                            <img src="/sources/travel2.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="text-short pull-right">
                                            <i class="fa fa-quote-left"></i>

                                            <p>It is summer and good time to visit Jerash , you will visit a historical
                                                places in Jordan , Ajloun Petra, Karak , Madaba , and Wadi Rum...</p>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="short">
                                    <i class="fa fa-info-circle pull-right"></i>
                                    <span>Tip by Hung Nguyen</span>
											<span class="desc">
												About Da Nang
											</span>
                                </div>
                            </a>

                            <div class="count-like-comment text-center">
                                <ul class="list-inline">
                                    <li>10 <i class="fa fa-comment"></i></li>
                                    <li>10 <i class="fa fa-thumbs-o-up"></i></li>
                                </ul>
                            </div>

                            <div class="social">
                                <button class="btn btn-primary btn-sm">Share Tip</button>
                                <button class="btn btn-primary btn-sm">Like</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item tip img-thumbnail">
                            <a href="detail-tip.html">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="avatar pull-left img-thumbnail">
                                            <img src="/sources/travel2.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="text-short pull-right">
                                            <i class="fa fa-quote-left"></i>

                                            <p>It is summer and good time to visit Jerash , you will visit a historical
                                                places in Jordan , Ajloun Petra, Karak , Madaba , and Wadi Rum...</p>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="short">
                                    <i class="fa fa-info-circle pull-right"></i>
                                    <span>Tip by Hung Nguyen</span>
											<span class="desc">
												About Da Nang
											</span>
                                </div>
                            </a>

                            <div class="count-like-comment text-center">
                                <ul class="list-inline">
                                    <li>10 <i class="fa fa-comment"></i></li>
                                    <li>10 <i class="fa fa-thumbs-o-up"></i></li>
                                </ul>
                            </div>


                            <div class="social">
                                <button class="btn btn-primary btn-sm">Share Tip</button>
                                <button class="btn btn-primary btn-sm">Like</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="item tip img-thumbnail">
                            <a href="detail-tip.html">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="avatar pull-left img-thumbnail">
                                            <img src="/sources/travel2.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="text-short pull-right">
                                            <i class="fa fa-quote-left"></i>

                                            <p>It is summer and good time to visit Jerash , you will visit a historical
                                                places in Jordan , Ajloun Petra, Karak , Madaba , and Wadi Rum...</p>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="short">
                                    <i class="fa fa-info-circle pull-right"></i>
                                    <span>Tip by Hung Nguyen</span>
											<span class="desc">
												About Da Nang
											</span>
                                </div>
                            </a>

                            <div class="count-like-comment text-center">
                                <ul class="list-inline">
                                    <li>10 <i class="fa fa-comment"></i></li>
                                    <li>10 <i class="fa fa-thumbs-o-up"></i></li>
                                </ul>
                            </div>


                            <div class="social">
                                <button class="btn btn-primary btn-sm">Share Tip</button>
                                <button class="btn btn-primary btn-sm">Like</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item tip img-thumbnail">
                            <a href="detail-tip.html">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="avatar pull-left img-thumbnail">
                                            <img src="/sources/travel2.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="text-short pull-right">
                                            <i class="fa fa-quote-left"></i>

                                            <p>It is summer and good time to visit Jerash , you will visit a historical
                                                places in Jordan , Ajloun Petra, Karak , Madaba , and Wadi Rum...</p>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="short">
                                    <i class="fa fa-info-circle pull-right"></i>
                                    <span>Tip by Hung Nguyen</span>
											<span class="desc">
												About Da Nang
											</span>
                                </div>
                            </a>

                            <div class="count-like-comment text-center">
                                <ul class="list-inline">
                                    <li>10 <i class="fa fa-comment"></i></li>
                                    <li>10 <i class="fa fa-thumbs-o-up"></i></li>
                                </ul>
                            </div>


                            <div class="social">
                                <button class="btn btn-primary btn-sm">Share Tip</button>
                                <button class="btn btn-primary btn-sm">Like</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item tip img-thumbnail">
                            <a href="detail-tip.html">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="avatar pull-left img-thumbnail">
                                            <img src="/sources/travel2.jpg" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="text-short pull-right">
                                            <i class="fa fa-quote-left"></i>

                                            <p>It is summer and good time to visit Jerash , you will visit a historical
                                                places in Jordan , Ajloun Petra, Karak , Madaba , and Wadi Rum...</p>
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="short">
                                    <i class="fa fa-info-circle pull-right"></i>
                                    <span>Tip by Hung Nguyen</span>
											<span class="desc">
												About Da Nang
											</span>
                                </div>
                            </a>

                            <div class="count-like-comment text-center">
                                <ul class="list-inline">
                                    <li>10 <i class="fa fa-comment"></i></li>
                                    <li>10 <i class="fa fa-thumbs-o-up"></i></li>
                                </ul>
                            </div>


                            <div class="social">
                                <button class="btn btn-primary btn-sm">Share Tip</button>
                                <button class="btn btn-primary btn-sm">Like</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>