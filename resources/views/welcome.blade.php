@include('header.header')
<body>

	<!--top bar-->
	<section class="top-bar">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-6">
	                <ul class="list-inline top-nav">
	                    <li><a href="#">News</a></li>
	                    <li><a href="#">Economy</a></li>
	                    <li><a href="#">Politics</a></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</section>
    <!--top bar end-->

	<!--header-->
    <section class="header">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-3 col-md-3">
	                <a href="/" class="logo"><img src="img/logo.png" alt="logo"></a>
	            </div>
	            <div class="col-sm-9 col-md-9 text-right">
	                <a href="https://www.templatesell.com/item/quality-construction-pro-wordpress-themes/" target="blank">
	                	<img src="img/ad/add-1.jpg" class="img-responsive pull-right" alt="ad">
	                </a>
	            </div>
	        </div>
	    </div>
	</section>
    <!--end header-->

    <!--navigation-->
    <section class="navigation">
	    <div class="container">
	        <!-- Static navbar -->
	        <nav class="navbar navbar-default yamm">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"> 
	                	<span class="sr-only">Toggle navigation</span> 
	                	<span class="icon-bar"></span> 
	                	<span class="icon-bar"></span> 
	                	<span class="icon-bar"></span> 
	                </button>
	            </div>
	            <div id="navbar" class="navbar-collapse collapse">
	                <ul class="nav navbar-nav">
	                	<li class="active"><a href="/"><i class="fa fa-home"></i></a></li>
	                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Websites <span class="caret"></span></a>
	                        <ul class="dropdown-menu">
	                            <li><a href="/">Tabula</a></li>
	                            <li><a href="/">MarketWatch</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="/">News</a></li>
	                    <li><a href="/">Economy</a></li>
	                    <li><a href="/">Politics</a></li>
	                    <li class="dropdown  yamm-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Mega menu <span class="caret"></span></a>
	                        <ul class="dropdown-menu">
	                            <li>
	                                <div class="yamm-content">
	                                    <div class="r">
	                                        <div class="col-sm-3"> 
												<div class="column-post">
													<a href="#" class="img-thumbnail"> <img src="img/post/p2.jpg" alt="" class="img-responsive"> </a>
													<div class="topic"> 
														<a href="#" class="tag bg1">Science</a>
														<h4><a href="#">Nuclear Fusion Closer to Becoming a Reality</a></h4>
														<ul class="post-tools">
															<li> by <a href="#"><strong> Canyon</strong> </a></li>
															<li>  5 Hours Ago </li>
															<li><a href="#"> <i class="ti-thought"></i> 57</a> </li>
														</ul>
													</div>
												</div>
	                                        </div>
	                                        <div class="col-sm-3"> 
	                                            <div class="column-post">
													<a href="#" class="img-thumbnail"> <img src="img/post/p3.jpg" alt="" class="img-responsive"> </a>
													<div class="topic"> 
														<a href="#" class="tag bg2">Health</a>
														<h4><a href="#">Nuclear Fusion Closer to Becoming a Reality</a></h4>
														<ul class="post-tools">
															<li> by <a href="#"><strong> Canyon</strong> </a></li>
															<li>  5 Hours Ago </li>
															<li><a href="#"> <i class="ti-thought"></i> 57</a> </li>
														</ul>
													</div>
												</div>
	                                        </div>
	                                        <div class="col-sm-3"> 
	                                            <div class="column-post">
													<a href="#" class="img-thumbnail"> <img src="img/post/l1.jpg" alt="" class="img-responsive"> </a>
													<div class="topic"> 
														<a href="#" class="tag bg3">Technology</a>
														<h4><a href="#">Nuclear Fusion Closer to Becoming a Reality</a></h4>
														<ul class="post-tools">
															<li> by <a href="#"><strong> Canyon</strong> </a></li>
															<li>  5 Hours Ago </li>
															<li><a href="#"> <i class="ti-thought"></i> 57</a> </li>
														</ul>
													</div>
												</div>
	                                        </div>
	                                        <div class="col-sm-3"> 
	                                            <div class="column-post">
													<a href="#" class="img-thumbnail"> <img src="img/post/s4.jpg" alt="" class="img-responsive"> </a>
													<div class="topic"> 
														<a href="#" class="tag bg4">Sports</a>
														<h4><a href="#">Nuclear Fusion Closer to Becoming a Reality</a></h4>
														<ul class="post-tools">
															<li> by <a href="#"><strong> Canyon</strong> </a></li>
															<li>  5 Hours Ago </li>
															<li><a href="#"> <i class="ti-thought"></i> 57</a> </li>
														</ul>
													</div>
												</div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                        </ul>
	                    </li>
	                </ul>
	                <ul class="nav navbar-nav navbar-right">
	                    <li>
	                        <form class="nav-search">
	                            <input type="text" class="form-control" placeholder="Search For News">
	                            <button type="submit" class="btn-submit"><i class="fa fa-search"></i></button>
	                        </form>
	                    </li>
	                </ul>
	            </div>
	            <!--/.nav-collapse -->
	        </nav>
	    </div>
	</section>
	<!--navigation end-->

    <!--content-->
    <section class="content">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-9 col-md-9 ">
	            	<div class="content-col">
		                <!--short news -->
		                <div class="short-post">
		                    <h3 class="main-title">General</h3>
		                    <div class="row">
								@foreach($articles as $article)
								<div class="col-sm-6 wow animated fadeInUp" data-wow-delay="0.2s">
									
									<div class="media">
		                                <div class="media-left">
		                                    <a href={{$article->link}}> <img class="media-object" src={{$article->img}} width="150" height="100" alt="..."> </a>
		                                </div>
		                                <div class="media-body">
		                                    <h4 class="media-heading" style="max-height:97px;overflow:hidden;"><a href={{$article->link}}>{{$article->title}}</a></h4>
		                                </div>
									</div>
								
								</div>
								@endforeach
							</div>
							<div class="row">
								<div class="col-12 text-center">
								   {{$articles->appends(request()->except('page'))->links()}}
								</div>
							</div>
						</div>
		 <!--short news end -->
		            </div>
	        	</div>
		            
	            <div class="col-sm-3 col-md-3">
	            	<div class="sidebar-col">
		                <!--sidebar box-->
		                <div class="sidebar-box wow animated fadeInUp" data-wow-delay="0.6s">
		                    <h3>Top 5 news</h3>
		                    <ul class="list-unstyled">
		                        <li class="clearfix">
		                            <div class="order">1</div>
		                            <p><a href="#">Maecenas mauris elementum, est morbi at </a></p>
		                        </li>
		                        <li class="clearfix">
		                            <div class="order">2</div>
		                            <p><a href="#">Maecenas morbi interdum cursus at elite.</a></p>
		                        </li>
		                        <li class="clearfix">
		                            <div class="order">3</div>
		                            <p><a href="#">Maecenas mauris, est morbi at elite</a></p>
		                        </li>
		                        <li class="clearfix">
		                            <div class="order">4</div>
		                            <p><a href="#">Maecenas morbi interdum cursus at elite.</a></p>
		                        </li>
		                        <li class="clearfix">
		                            <div class="order">5</div>
		                            <p><a href="#">Maecenas mauris, est morbi at elite </a></p>
		                        </li>
		                    </ul>
		                </div>
		                <div class="sidebar-box wow animated fadeInUp" data-wow-delay="1.6s">
		                    <h3>Archives</h3>
		                    <ul class="list-unstyled archives">
		                        <li><a href="#">january 2017 <span>(44)</span></a></li>
		                        <li><a href="#">Febuary 2017 <span>(67)</span></a></li>
		                        <li><a href="#">March 2017 <span>(23)</span></a></li>
		                        <li><a href="#">April 2017 <span>(56)</span></a></li>
		                        <li><a href="#">May 2017 <span>(65)</span></a></li>
		                        <li><a href="#">June 2017 <span>(87)</span></a></li>
		                        <li><a href="#">May 2017 <span>(45)</span></a></li>
		                        <li><a href="#">August 2017 <span>(56)</span></a></li>
		                        <li><a href="#">September 2017 <span>(32)</span></a></li>
		                        <li><a href="#">October 2017 <span>(23)</span></a></li>
		                        <li><a href="#">November 2017 <span>(45)</span></a></li>
		                        <li><a href="#">December 2017 <span>(72)</span></a></li>
		                    </ul>
		                </div>
		            </div>
	            </div>
	        </div>
	    </div>
	</section>
    <!-- content end-->

    <!--footer-->
    <div class="footer">
    	<div class="container">
    		<div class="row">
	            <div class="col-md-3 col-sm-6">
	                <h3>About us</h3>
	                <p> Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus. </p>
	                <ul class="social-footer list-inline">
	                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
	                </ul>
	            </div>
	            <div class="col-md-3 col-sm-6">
	                <h3>Twitter Feeds</h3>
	                <ul class="list-unstyled twitter-feeds">
	                    <li> <span>Maecenas mauris elementum, <a href="#">@canyonthemes</a> interdum cursus at elite.</span> <em>2 Hours ago</em> </li>
	                    <li> <span>Maecenas mauris elementum, <a href="#">@canyonthemes</a> interdum cursus at elite.</span> <em>2 Hours ago</em> </li>
	                </ul>
	            </div>
	            <div class="col-md-3 col-sm-6">
	                <h3>Popular Posts</h3>
	                <div class="media">
	                    <div class="media-left">
	                        <a href="#"> <img class="media-object" src="img/thumb-3.html" width="80" alt="..."> </a>
	                    </div>
	                    <div class="media-body"> 
	                    	<a href="#" class="tag bg1">Fashion</a>
	                        <h4 class="media-heading"><a href="#">Maecenas mauris elementum</a></h4> 
	                    </div>
	                </div>
	                <!--media-->
	                <div class="media">
	                    <div class="media-left">
	                        <a href="#"> <img class="media-object" src="img/thumb-1.html" width="80" alt="..."> </a>
	                    </div>
	                    <div class="media-body"> 
	                    	<a href="#" class="tag bg1">Nature</a>
	                        <h4 class="media-heading"><a href="#">Maecenas mauris elementum</a></h4> 
	                    </div>
	                </div>
	                <!--media-->
	            </div>
	            <div class="col-md-3 col-sm-6">
	                <h3>Popular Tags</h3>
	                <div class="tag-list"> 
	                	<a href="#">Fashion</a> 
	                	<a href="#">Sports</a> 
	                	<a href="#">Business</a> 
	                	<a href="#">Politics</a> 
	                	<a href="#">Tennis</a> 
	                	<a href="#">Soccer</a> 
	                	<a href="#">Usa</a> 
	                	<a href="#">Cricket</a> 
	                	<a href="#">Health</a> 
	                	<a href="#">Nature</a> 
	                	<a href="#">Videos</a> 
	                	<a href="#">Asia</a> 
	                	<a href="#">Bootstrap</a> 
	                	<a href="#">Nba</a> 
	                	<a href="#">Africa</a> 
	                	<a href="#">Newser</a> 
	                	<a href="#">Flicks</a> 
	                </div>
	            </div>
        	</div>
    	</div>
    </div>
    <div class="footer-copyright"> 
    	<div class="container">
    		<span>&copy; Copyright 2017. All Right Reserved.</span>
    	</div>
    </div> 
</body>
@include('footer.footer')