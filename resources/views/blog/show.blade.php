<!DOCTYPE HTML>
<html>
	<head>
		<title>Single - Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
        <link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet">
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/">Abigales Book Corner: The Blog</a></h1>
						<nav class="links">
							<ul>
								<li><a href="/">Home</a></li>
								<li><a href="/blog/all">Back</a></li>
                                <li><a href="/shop/books">Books</a></li>
                                <li><a href="/shop/general">Merch</a></li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">
						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<!-- <section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section> -->

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $blogPost->title ?? '' }}</a></h2>
										<p>{{  $blogPost->excerpt }}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">{{ $blogPost->author }}</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured">     <img src="{{ $blogPost->image_name }}" /></span>
								<h1>{{ $blogPost->heading1 }}</h1>

                                <p>{{ $blogPost->paragraph1Heading1 }}</p>



                                <!-- 'heading1',
    'heading2',
    'heading3',
    'heading4',
    'heading5',
    'heading6',
    'heading7',
    'heading8',
    'heading9',
    'heading10',
    'paragraph1Heading1',
    'paragraph2Heading1',
    'paragraph3Heading1',
    'paragraph1Heading2',
    'paragraph2Heading2',
    'paragraph3Heading2',
    'paragraph1Heading3',
    'paragraph2Heading3',
    'paragraph3Heading3',
    'paragraph1Heading4',
    'paragraph2Heading4',
    'paragraph3Heading4',
    'paragraph1Heading5',
    'paragraph2Heading5',
    'paragraph3Heading5',
    'paragraph1Heading6',
    'paragraph2Heading6',
    'paragraph3Heading6',
    'paragraph1Heading7',
    'paragraph2Heading7',
    'paragraph3Heading7',
    'paragraph1Heading8',
    'paragraph2Heading8',
    'paragraph3Heading8',
    'paragraph1Heading9',
    'paragraph2Heading9',
    'paragraph3Heading9',
    'paragraph1Heading10',
    'paragraph2Heading10',
    'paragraph3Heading10',
    'image_name',
    'image1_name',
    'image2_name',
    'image3_name',
    'image4_name',
    'image5_name',
    'image6_name',
    'image7_name',
    'image8_name',
    'image9_name',
    'image10_name',
    'imageCredit',
    'imageCredit1',
    'imageCredit2',
    'imageCredit3',
    'imageCredit4',
    'imageCredit5',
    'imageCredit6',
    'imageCredit7',
    'imageCredit8',
    'imageCredit9',
    'imageCredit10', -->


								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
