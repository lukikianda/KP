
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <script src="https://kit.fontawesome.com/73a5bd7ed6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Dashboard | Ainthisar Media Teknologi</title>

	<link href="{!! asset('css/app.css') !!}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Ainthisar Workspace</span>
        </a>
			<ul class="sidebar-nav">
			    <li class="sidebar-header">
                    <h5 style="color:white">Login as : {{ Auth::user()->name }} <br> (Staff)</h5> <br>
                    Pages
                </li>
                <li class="sidebar-item">
					<a class="sidebar-link" href="home">
                        <i class="align-middle" data-feather="sliders"></i>
                        <span class="align-middle">Dashboard</span>
                    </a>
				</li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="laporan">
                        <i class="align-middle" data-feather="book"></i>
                        <span class="align-middle">Laporan</span>
                    </a>
                </li>

                <NY>        
                                    <!--
                                    <li class="sidebar-header">
                                        Tools & Components
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                            </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                            </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="ui-cards.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                            </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="ui-typography.html">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                            </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="icons-feather.html">
                            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                            </a>
                                    </li>

                                    <li class="sidebar-header">
                                        Plugins & Addons
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                            </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                            </a>
                                    </li>
                                </ul>

                                <div class="sidebar-cta">
                                    <div class="sidebar-cta-content">
                                        <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                                        <div class="mb-3 text-sm">
                                            Are you looking for more components? Check out our premium version.
                                        </div>
                                        <div class="d-grid">
                                            <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                                        </div>
                                    </div>
                                </div> -->
                </NY>
            
            </div>
        </nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <span class="text-dark">{{ Auth::user()->name }}</span>
                            </a>
							<div class="dropdown-menu dropdown-menu-end">
                                <!--
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i> Settings</a>
								<div class="dropdown-divider"></div>
                                -->
								<a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
                <div class="container-fluid p-0">
                    @yield('namahalaman')
                    @yield('isi')
                </div>
            </main>
            
		</div>
	</div>

	<script src="{!! asset('js/app.js') !!}"></script>

</body>

</html>