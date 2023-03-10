
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SIPUTA</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('/') }}assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('/') }}assets/js/plugin/webfont/webfont.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('/') }}assets/css/adminlte.min.css"> --}}
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href=" " class="logo">
					<img src="{{ asset('/') }}assets/img/logosiputa.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('logout') }}" role="button">
                                <i class="nav-icon fas fa-sign-out-alt"></i>Logout
                                </a>
                            </li>
                        </li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ $user->name }}
									<span class="user-level">{{ $user->username }}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">{{ $user->email }}</span>
										</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
                    <ul class="nav">
					@include('layout.menu')
                    </ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">
                            @yield('judul')
                        </h4>
					</div>
                    @yield('isi')
					{{-- <div class="page-category">Starter Description</div> --}}
				</div>
			</div>	
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('/') }}assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ asset('/') }}assets/js/core/popper.min.js"></script>
	<script src="{{ asset('/') }}assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('/') }}assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{ asset('/') }}assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('/') }}assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="{{ asset('/') }}assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="{{ asset('/') }}assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('/') }}assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('/') }}assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{ asset('/') }}assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('/') }}assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{ asset('/') }}assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('/') }}assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{ asset('/') }}assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="{{ asset('/') }}assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('/') }}assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Azzara JS -->
	<script src="{{ asset('/') }}assets/js/ready.min.js"></script>
</body>
</html>