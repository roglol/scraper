<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from netgon.net/artstyles/v-card/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 19:25:23 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Blog</title>
    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"/>
	
</head>
<body class="bg-triangles">
    <main class="main">
	    <div class="container">
		    <div class="row sticky-parent">		        
				<!-- Content -->
		        <div class="col-12 col-md-12 col-xl-12">
				    <div class="box shadow pb-0">
						<!-- News -->
						<div class="news-grid pb-0">
                            <!-- Post -->
                            @foreach ($links as $link)
                            <article class="news-item box">
                                <a href='{{ $link }}'>
							    <div class="news-item__image-wrap overlay overlay--45">
								    <div class="news-item__date">Sep 16, 2019</div>
								    <img class="cover lazyload" src="assets/img/image_02.jpg" alt="" />
								</div>
								<div class="news-item__caption">
								    <h2 class="title title--h4">Design Conferences in 2019</h2>
									<p>Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                                </a>
                                </div>
							</article>
                              @endforeach
						</div>
					</div>					
					<!-- Footer -->
					<footer class="footer">© 2019 vCard</footer>
		        </div>
			</div>
		</div>	
    </main>
</body>
</html>
