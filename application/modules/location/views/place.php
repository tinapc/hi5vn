<section id="hero-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center general_info_location">
						<h1>Welcome to Da Nang</h1>
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
					    			<li><a href="location.html"><i class="fa fa-th"></i> All </a></li>
					    			<li><a href="photos.html"><i class="fa fa-image"></i> Photos </a></li>
					    			<li><a href="tips.html"><i class="fa fa-info-circle"></i> Tips </a></li>
					    			<li><a href="questions.html"><i class="fa fa-question-circle"></i> Questions </a></li>
					    			<li><a href="hotels.html"><i class="fa fa-home"></i> Hotels </a></li>
					    			<li><a href="res.html"><i class="fa fa-home"></i> Restaurants </a></li>
					    			<li class="active"><a href="place.html"><i class="fa fa-map-marker"></i> Places </a></li>
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
					<ul class="nav nav-pills" role="tablist">
						<li class="active"><a href="">All</a></li>  
						<li><a href="">Restaurant</a></li>  
						<li><a href="">Nightlife</a></li>  
						<li><a href="">Bar</a></li>  
					</ul>
				</div>

				<div class="row" id="grid">
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/800/1024" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/400/600" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/700/500" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/400/600" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/400/600" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/600/400" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/800/1024" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/400/600" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/700/500" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/400/600" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/400/600" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
					<div class="col-sm-3 col-md-3">
						<div class="item place img-thumbnail">
							<a href="<?php echo $data['location_url']?>place-detail/hoi-an-beach">
								<img src="http://lorempixel.com/600/400" class="img-responsive">
								<div class="short">
									<i class="fa fa-map-marker pull-right"></i>
									<span>Da Nang beach</span>
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
				</div>
			</div>
		</div>

		<script type="text/javascript" src="/assets/plugin/masony/masonry.pkgd.min.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				var $container = $('#grid');
				// initialize
				$container.masonry({
				  columnWidth: '.col-md-3',
				  itemSelector: '.col-md-3'
				});
			})
		</script>