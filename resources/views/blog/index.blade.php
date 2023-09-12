<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/blog/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/">Abigales Book Corner</a></h1>
						<nav class="links">
							<ul>
								<li><a href="/">Home</a></li>
								<li><a href=" {{ route('showBookProducts') }} ">Books</a></li>
								<li><a href=" {{ route('showGeneralProducts') }} ">Merch</a></li>
								<!-- <li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li> -->
							</ul>
						</nav>
						<nav class="main">
							<!-- <ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul> -->
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<!-- <section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section> -->

						<!-- Links -->
							<section>
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
							</section>

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
                        @if(isset($blogPosts))
                            @foreach($blogPosts as $post)
                                <article class="post">
                                    <header>
                                        <div class="title">
                                            <h2><a href="single.html">{{ $post->title }}</a></h2>
                                            <p>{{ $post->excerpt }}</p>
                                        </div>
                                        <div class="meta">
                                            <!-- TODO add blog author image -->
                                            <a href="#" class="author"><span class="name">Written By: {{ $post->author }}</span><img src="{{ $post->image_name }}" alt="author image" /></a>
                                        </div>
                                    </header>
                                    <a href="single.html" class="image featured"><img src="{{ $post->image_name }}" alt="blog post image" /></a>
                                    <p></p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="single.html" class="button large">Continue Reading</a></li>
                                        </ul>
                                        <ul class="stats">
                                            <li><a href="#">General</a></li>
                                            <li><a href="#" class="icon solid fa-heart">28</a></li>
                                            <li><a href="#" class="icon solid fa-comment">128</a></li>
                                        </ul>
                                    </footer>
                                </article>
                            @endforeach

                        @endif


						<!-- Pagination -->
							<ul class="actions pagination">
								<!-- <li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li> -->
                                {{ $blogPosts->links() }} <!-- Display pagination links -->
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2>Abigales Book Corner</h2>
									<p>Delve into a rich tapestry of content</p>
								</header>
							</section>



						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Join us in exploring the synergy of enchantment and education, as our blog delves into the heart of what matters most – nurturing curious minds and igniting a love for learning. Welcome to a world where stories inspire, knowledge empowers, and possibilities abound.</p>
								<!-- <ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul> -->
							</section>

						<!-- Footer -->
							<section id="footer">
								<!-- <ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul> -->
								<p class="copyright">Application by &copy;OFROOT</p>
							</section>

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
