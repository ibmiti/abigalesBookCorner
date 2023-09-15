<!DOCTYPE HTML>
<html>
	<head>
		<title>Abigales Reading Corner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <!-- <link rel="script" href="{{ asset('js/main.js')}}"/> -->
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
							<h1>Login</h1>
							<p>Command Center Entry</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="{{ asset('images/fourth.png') }}" alt="first image of abigale" /></span>
						</div>
					</section>


				<!-- Section -->
					<section>
						<header>
							<h2>IT Support</h2>
						</header>
						<div class="content">
							<p><strong>Admin Login</strong> Beyond this area, will allow you to make changes to your store, curate your blog and more.</p>
                    <form action="{{ route('process.form') }}" method="POST">
                        @csrf
								<div class="fields">
									<!-- <div class="field half">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div> -->
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
                                    <div class="field half">
										<input type="text" name="password" id="password" placeholder="Password" />
									</div>
									<!-- <div class="field">
										<textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
									</div> -->
								</div>
								<ul class="actions">
									<li><input type="submit" value="Access" class="button primary" /></li>
								</ul>
							</form>
						</div>
						<footer>
							<ul class="items">
								<li>
									<h3>Email</h3>
									<a href="#">information@untitled.ext</a>
								</li>
								<li>
									<h3>Phone</h3>
									<a href="#">(000) 000-0000</a>
								</li>
								<li>
									<h3>Address</h3>
									<span>1234 Somewhere Road, Nashville, TN 00000</span>
								</li>
								<li>
									<h3>Elsewhere</h3>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="#" class="icon brands fa-codepen"><span class="label">Codepen</span></a></li>
									</ul>
								</li>
							</ul>
						</footer>
					</section>

				<!-- Copyright -->
					<div class="copyright">&copy; Untitled. All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/js/browser.min.js') }}"></script>
			<script src="{{ asset('/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/js/util.js') }}"></script>
			<script src="{{ asset('/js/main.js') }}"></script>

	</body>
</html>
