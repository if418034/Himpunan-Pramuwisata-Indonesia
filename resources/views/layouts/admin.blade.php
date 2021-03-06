@if(!Session::get('login'))
 <?php
	header('Location: /login');
	exit;
 ?>
@endif 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../img/logo.png">
	<title>Admin HPI Toba</title>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/ruang-admin.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/ruang-admin.css">
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/indexAdmin">
				<div class="sidebar-brand-icon">
					<img src="img/logo.png">
				</div>
				<div class="sidebar-brand-text mx-3">Administrator</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item active">
				<a class="nav-link" href="/indexAdmin"> <i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<hr class="sidebar-divider">
			<div class="sidebar-heading">Menu</div>			
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable"> <i class="fas fa-fw fa-table"></i>
					<span>Tables</span>
				</a>
				<div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Tabel</h6>					
						<a class="collapse-item" href="/bookingAdmin">Booking</a>
						<a class="collapse-item" href="/pramuwisataAdmin">Pramuwisata</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/destinasiAdmin"> <i class="fas fa-fw fa-bus"></i>
					<span>Destinasi</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/paketAdmin"> <i class="fas fa-fw fa-gift"></i>
					<span>Paket Tur</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/kegiatanAdmin"> <i class="fas fa-fw fa-calendar"></i>
					<span>Kegiatan</span>
				</a>
			</li>
			
			
			<hr class="sidebar-divider">
			
			
		</ul>
		<!-- Sidebar -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- TopBar -->
				<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
					<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3"> <i class="fa fa-bars"></i>
					</button>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell fa-fw"></i>
								<span class="badge badge-danger badge-counter">0</span>
							</a>
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
								Alerts Center
								</h6>
								<!-- <a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-primary"> <i class="fas fa-file-alt text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 12, 2019</div> <span class="font-weight-bold">A new monthly report is ready to download!</span>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-success"> <i class="fas fa-donate text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 7, 2019</div>$290.29 has been deposited into your account!</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-warning"> <i class="fas fa-exclamation-triangle text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 2, 2019</div>Spending Alert: We've noticed unusually high spending for your account.</div> 
								</a> -->
								<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
							</div>
						</li>
						
						<div class="topbar-divider d-none d-sm-block"></div>
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px"> 
								<span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout</a>
							</div>
						</li>
					</ul>
				</nav>
				<!-- Topbar -->
				
				@yield('content')



			</div>
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto"> <span>copyright &copy;dpdhpitobasa.org <script> document.write(new Date().getFullYear()); </script> - developed by Kelompok 5 KREN
              
            </span>
					</div>
				</div>
			</footer>
			<!-- Footer -->
		</div>
	</div>
	<!-- Scroll to top -->
	<a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i>
	</a>
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	
	<script>
	CKEDITOR.replace( 'ckeditor', {
		filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
	});
	</script>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="js/ruang-admin.min.js"></script>
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="js/demo/chart-area-demo.js"></script>
</body>

</html>