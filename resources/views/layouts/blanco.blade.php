<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@stack('title_base')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/template/assets/css/main.css')}}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/portafolio/developer-1.ico')}}">
		<noscript><link rel="stylesheet" href="{{asset('assets/template/assets/css/noscript.css')}}" /></noscript>
        <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
        @livewireStyles
        @stack('styles')
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="/dashboard">Area Administrativa</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="/dashboard">Dashboard</a></li>
							<li>
								<a href="#">Correos</a>
								<ul>
									<li><a href="{{route('admin/email')}}">Entrantes</a></li>
									<li><a href="right-sidebar.html">Salientes</a></li>
									<li><a href="no-sidebar.html">Filtrado</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li> admin/email
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="{{route('portafolio')}}">Perfil</a></li>
                            <li><a class="button primary" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                @csrf                               
                            </form>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				{{ $slot }}

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{{asset('assets/template/assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/browser.min.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/util.js')}}"></script>
			<script src="{{asset('assets/template/assets/js/main.js')}}"></script>
            @stack('scripts')
            @livewireScripts

	</body>
</html>

{{-- G:\##__nuevaTrabajo\Pnatillas-para-perfil\html5up-landed --}}