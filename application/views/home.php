<!doctype html>
<!--[if lt IE 7]> <body class="no-js ie9 ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <body class="no-js ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <body class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hi5 Vietnam</title>
 		
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
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!--Font Awesome-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>

		<!--Style inlcide-->
		<link rel="stylesheet" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/landing.css">
		<link rel="stylesheet" href="./assets/css/custom_responsive.css">

		<!--Autocomplete-->
		<link rel="stylesheet" type="text/css" href="./assets/js/autocomplete/jquery.autocomplete.css">

		<!--Jquery Lib include-->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="./assets/js/autocomplete/jquery.autocomplete.js"></script>

        <!--[if lt IE 9]> HTML5Shiv
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
        	var BASE_URL = '<?php echo base_url()?>';
        	var states = [
        		<?php foreach($this->config->item('cityLists') as $id => $fullname): ?>
        			{id:'<?=$id?>', fullname: '<?=$fullname?>'},
				<?php endforeach?>
			];

			$(function() {
				$("input#find_place").autocomplete({
					source:[{states}],
					getTitle:function(item){
					  return item['title']
					},
					getValue:function(item){
					  return item['id']
					},
					openOnFocus: true
				}).on('selected.xdsoft',function(e,datum){
					 alert(datum.id);
					 alert(datum.title);
				});  
			});
        </script>
    </head>
    <body>

    	<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>Ha Long Bay</h3></div></li>
            <li><span>Image 02</span><div><h3>Ha Long Bay</h3></div></li>
            <li><span>Image 03</span><div><h3>Hoi An City</h3></div></li>
            <li><span>Image 04</span><div><h3>Lao Cai</h3></div></li>
            <li><span>Image 05</span><div><h3>Can Tho</h3></div></li>
            <li><span>Image 06</span><div><h3>HCM</h3></div></li>
        </ul>

    	<div class="h5-landing">
	    	<div class="container">
	    		<div class="col-md-8 col-md-offset-2 text-center">
	    			<div class="left-box">
		    			<h3>Hi5Vietnam.Com</h3>
		    			<h4>travel & lifestyle social network</h4>
		    			<div class="clearfix"></div>
		    			<h6>Khám phá Việt Nam</h6>	
		    			<div class="box-search">
							<div class="col-md-12">
								<div class="form-group">
								    <label class="control-label">Where do you like to explore?</label>
									<div class="input-group col-md-6 col-md-offset-3">
										<input type="text" id="find_place" class="form-control" placeholder="Please choose your place">
										<span class="input-group-addon"><i class="fa fa-search"></i></span>
									</div>
									
								</div>	
							</div>
						</div>
	    			</div>
	    		</div>
	    	</div>
    	</div>
    	<link rel="stylesheet" type="text/css" href="assets/plugin/CSS3FullscreenSlideshow/css/style3.css" />
		<script type="text/javascript" src="assets/plugin/CSS3FullscreenSlideshow/js/modernizr.custom.86080.js"></script>
	    <!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!--Include Js Common-->
		<script type="text/javascript" src="./assets/js/interface.js"></script>
	</body>
</html>