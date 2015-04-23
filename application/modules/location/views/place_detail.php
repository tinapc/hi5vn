<style type="text/css">
	.infowindow{
		min-height: 100px;
	}
	.infowindow h1{font-weight: bold; font-size: 15px;}
</style>
<script type="text/javascript">
	var map;
	function initialize() {
		var myLatlng = new google.maps.LatLng(<?=$data['place']->lat?>, <?=$data['place']->lng?>);
		var mapOptions = {
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: myLatlng
		};
		map = new google.maps.Map(document.getElementById('map-place'),mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			animation: google.maps.Animation.DROP,
			title: "<?=$data['place']->name?>"
	  	});

		var contentString = '<div class="infowindow"><h1><?=$data["place"]->name?></h1><p><?=$data["place"]->address?></p></div>';
	  	var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map,marker); 

		google.maps.event.addListener(marker, 'click', function() {
		    infowindow.open(map,marker);
		});

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php echo modules::run('location/widget_bannerLocation')?>

		<div id="main-nav">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default my-nav-top nav-second" role="navigation">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-top-2">
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
						        	<a href="javascript:void(0)" onclick="$('.location-information').slideToggle(); $(this).parent().toggleClass('active')"><i class="fa fa-info"></i> About Da Nang</a>
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

					    </div><!-- /.navbar-collapse -->
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
								  		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								  	</p>
								  	<p>
								  		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								  	</p>

								  	<a href="http://en.wikipedia.org/wiki/Da_Nang" class="btn btn-primary" target="_blank">View More</a>
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
					<div class="col-md-12" style="background:#f2f2f2; padding:10px">
						<ul class="nav nav-tabs" role="tablist">
						  	<li class="active">
						  		<a href="#map_view" role="tab" data-toggle="tab">Map View</a>
						  	</li>
						  	<li><a href="#photo_view" role="tab" data-toggle="tab">Photo View</a></li>						
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="map_view">
						  		<div id="map-place" style="width:100%; height:400px">
									
								</div>
							</div>
						  	<div class="tab-pane" id="photo_view">
						  		<ul class="list-unstyled nav-pills">
									<li>
										<a class="popImagePlace" href="/sources/ha_long1.jpg"><img src="http://dummyimage.com/120x90" alt="placeholder+image"></a>
									</li>
									<li>
										<a class="popImagePlace" href="/sources/ha_long1.jpg"><img src="http://dummyimage.com/120x90" alt="placeholder+image"></a>
									</li>
									<li>
										<a class="popImagePlace" href="/sources/ha_long1.jpg"><img src="http://dummyimage.com/120x90" alt="placeholder+image"></a>
									</li>
									<li>
										<a class="popImagePlace" href="/sources/ha_long1.jpg"><img src="http://dummyimage.com/120x90" alt="placeholder+image"></a>
									</li>
									<li>
										<a class="popImagePlace" href="/sources/ha_long1.jpg"><img src="http://dummyimage.com/120x90" alt="placeholder+image"></a>
									</li>
									
								</ul>
						  	</div>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="box">
						<div class="col-md-8 box-detail-left">
							<h1 class="cat_title"><?php echo $data['place']->name?></h1>
							<p> <i class="fa fa-map-marker"></i> <?php echo $data['place']->address?></p>
							<div class="share-box">
								<div class="fb-like" data-href="<?php echo $data['location_url']?>place-detail/<?php echo $data['place']->slug?>" data-layout="button" data-action="like" data-order-by="time" data-show-faces="true" data-share="true"></div>
								<script src="https://apis.google.com/js/platform.js" async defer>
								  {lang: 'vi'}
								</script>
								<div class="g-plusone" data-size="medium" data-annotation="bubble"></div>
							</div>
							<div class="clearfix"></div>
							<p style="line-height:20px; margin-top:20px; margin-bottom:20px;">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</p>

							<div class="clearfix"></div>
							<div class="fb-comments" data-href="<?php echo $data['location_url']?>place-detail/<?php echo $data['place']->slug?>" data-numposts="5" data-width="100%" data-colorscheme="light"></div>

						</div>

						<div class="col-md-4 text-left">
							<div class="author-post">
								<div class="avatar pull-left">
									<a href="">
										<img class="img-circle" src="http://dummyimage.com/40/" alt="placeholder+image">
									</a>
								</div>
								<div class="author-name pull-left">
									<span>Posted by </span><a href="profile/messi.html"><?php echo $data['place']->user->displayName?></a> 
									<div class="clearfix"></div>
									<span class="posted-date"><?php echo $this->util->timeAgo(strtotime($data['place']->created_at))?> <i class="fa fa-clock-o"></i> </span>
								</div>
								<div class="clearfix"></div>
								<p class="post-social text-center" style="margin-top: 20px; border-top: 1px solid #ccc; padding-top: 20px; border-bottom:0px;"> 
									<a href="">
										<i class="fa fa-hand-o-up"></i>
										<span>10</span>
									</a>
									<a href="">
										<i class="fa fa-hand-o-down"></i>
										<span>0</span>
									</a>
									<a href="">
										<i class="fa fa-comment"></i>
										<span>10</span>
									</a>	
								</p>
								<div class="panel panel-default">
								  <div class="panel-heading cat_title">Nearly Places</div>
								  <div class="panel-body">
									    <div class="media">
									    	<a class="pull-left" href="#">
									    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
									    	</a>
									    	<div class="media-body">
									    		<h4 class="media-heading">Media heading</h4>
									    		<p>Text goes here...</p>
									    	</div>
									    </div>
									    <div class="media">
									    	<a class="pull-left" href="#">
									    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
									    	</a>
									    	<div class="media-body">
									    		<h4 class="media-heading">Media heading</h4>
									    		<p>Text goes here...</p>
									    	</div>
									    </div>
									    <div class="media">
									    	<a class="pull-left" href="#">
									    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
									    	</a>
									    	<div class="media-body">
									    		<h4 class="media-heading">Media heading</h4>
									    		<p>Text goes here...</p>
									    	</div>
									    </div>
									    <div class="media">
									    	<a class="pull-left" href="#">
									    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
									    	</a>
									    	<div class="media-body">
									    		<h4 class="media-heading">Media heading</h4>
									    		<p>Text goes here...</p>
									    	</div>
									    </div>
								  </div>
								</div>

								<!--Top Hotels-->
								<div class="panel panel-default">
								  <div class="panel-heading cat_title">Nearly Hotels</div>
									  <div class="panel-body">
										    <div class="media">
										    	<a class="pull-left" href="#">
										    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
										    	</a>
										    	<div class="media-body">
										    		<h4 class="media-heading">Media heading</h4>
										    		<p>Text goes here...</p>
										    	</div>
										    </div>
										    <div class="media">
										    	<a class="pull-left" href="#">
										    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
										    	</a>
										    	<div class="media-body">
										    		<h4 class="media-heading">Media heading</h4>
										    		<p>Text goes here...</p>
										    	</div>
										    </div>
										    <div class="media">
										    	<a class="pull-left" href="#">
										    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
										    	</a>
										    	<div class="media-body">
										    		<h4 class="media-heading">Media heading</h4>
										    		<p>Text goes here...</p>
										    	</div>
										    </div>
										    <div class="media">
										    	<a class="pull-left" href="#">
										    		<img src="http://lorempixel.com/150/80" class=" media-object img-responsive">
										    	</a>
										    	<div class="media-body">
										    		<h4 class="media-heading">Media heading</h4>
										    		<p>Text goes here...</p>
										    	</div>
										    </div>
									  </div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<link rel="stylesheet" type="text/css" href="/assets/plugin/colorbox/colorbox.css">
		<script type="text/javascript" src="/assets/plugin/colorbox/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('a.popImagePlace').colorbox({rel:'popImagePlace'})
			})
		</script>