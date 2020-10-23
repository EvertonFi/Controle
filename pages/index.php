<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/index5 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 14:27:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Yoha –  HTML5 Bootstrap Admin Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard html template, admin dashboard template bootstrap 4, analytics dashboard templates, best admin template bootstrap 4, best bootstrap admin template, bootstrap 4 template admin, bootstrap admin template premium, bootstrap admin ui, bootstrap basic admin template, cool admin template, dark admin dashboard, dark admin template, dark dashboard template, dashboard template bootstrap 4, ecommerce dashboard template, html5 admin template, light bootstrap dashboard, sales dashboard template, simple dashboard bootstrap 4, template bootstrap 4 admin">

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

	<!-- TITLE -->
	<title>Loja Virtual</title>

	<!-- BOOTSTRAP CSS -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- STYLE CSS -->
	<link href="../assets/css/style.css" rel="stylesheet" />

	<!-- SIDE-MENU CSS -->
	<link href="../assets/css/sidemenu.css" rel="stylesheet">

	<!--PERFECT SCROLL CSS-->
	<link href="../assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

	<!-- CUSTOM SCROLL BAR CSS-->
	<!-- <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" /> -->
	<!--- FONT-ICONS CSS -->
	<link href="../assets/css/icons.css" rel="stylesheet" />

	<!-- SIDEBAR CSS -->
	<link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

</head>

<body class="app sidebar-mini">


	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- PAGE -->
	<div class="page">
		<?php require 'menu.php' ?>
		<!--app-content open-->
		<div class="app-content">
			<div class="side-app">
				<!-- PAGE-HEADER -->
				<div class="page-header">
					<div>
						<h1 class="page-title">Páginas Inicial</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="#">Home</a></li>
						</ol>
					</div>
					<?php require 'botoesSuperior.php' ?>
				</div>
				<!-- PAGE-HEADER END -->
				<!-- Row1 -->
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body text-center">
								<div class="d-flex mb-0">
									<span class="brround align-self-center avatar-lg br-3 cover-image bg-orange">
										<i class="fe fe-user-plus"></i>
									</span>
									<div class="svg-icons text-right ml-auto">
										<p class="text-muted mb-2">Total de Vendas</p>
										<h2 class="mb-0 number-font">0</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-body text-center">
								<div class="d-flex mb-0">
									<span class="brround align-self-center avatar-lg br-3 cover-image bg-secondary">
										<i class="fe fe-bar-chart text-white"></i>
									</span>
									<div class="svg-icons text-right ml-auto">
										<p class="text-muted mb-2">Total de Itens</p>
										<h2 class="mb-0 number-font">0</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-body text-center">
								<div class="d-flex mb-0">
									<span class="brround align-self-center avatar-lg br-3 cover-image bg-secondary1">
										<i class="fe fe-dollar-sign text-white"></i>
									</span>
									<div class="svg-icons text-right ml-auto">
										<p class="text-muted mb-2">Total de Lucro</p>
										<h2 class="mb-0 number-font">R$0</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-body text-center">
								<div class="d-flex mb-0">
									<span class="brround align-self-center avatar-lg br-3 cover-image bg-warning">
										<i class="fe fe-dollar-sign text-white"></i>
									</span>
									<div class="svg-icons text-right ml-auto">
										<p class="text-muted mb-2">Total de Vendas</p>
										<h2 class="mb-0 number-font">0</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row1 CLOSED -->

				<!-- Row2 -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-8">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Vendas nos Últimos 30 Dias</h3>
							</div>
							<div class="card-body">
								<div id="echart" class="chartwidget "></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="card overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Locais de Vendas</h3>
							</div>
							<div class="card-body">
								<div class="row text-center mb-6">
									<div class="col dash-1">
										<p class="mb-0"><span class="dot-label bg-green mr-2"></span>WhatsApp</p>
										<h2 class="mb-0 number-font1">0<span class="fs-16 ml-1">%</span></h2>
									</div>
									<div class="col dash-1">
										<p class="mb-0"><span class="dot-label bg-orange mr-2"></span>Instagram</p>
										<h2 class="mb-0 number-font1">0<span class="fs-16 ml-1">%</span></h2>
									</div>
									<div class="col">
										<p class="mb-0"><span class="dot-label bg-blue mr-2"></span>Facebook
										</p>
										<h2 class="mb-0 number-font1">0<span class="fs-16 ml-1">%</span></h2>
									</div>
								</div>
								<div class="">
									<canvas id="canvasDoughnut" class="h-230"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row2 CLOSED -->

				<!-- ROW-3 OPEN -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header ">
								<h3 class="card-title ">Top 10 Produtos Mais Vendidos</h3>
							</div>
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-bordered text-nowrap mb-0">
										<thead>
											<tr>
												<th>Nome do Produto</th>
												<th>QTD. Vendas</th>
												<th>Itens Vendidos</th>
												<th>Quantidade Em Estoque</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Relógio Y68</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
				</div>
				<!-- ROW-3 CLOSED -->
			</div><!-- End Page -->
		</div>
	</div>
	<!-- CONTAINER END -->
	<!-- FOOTER -->
	<?php require 'footer.php' ?>
	<!-- FOOTER END -->
	</div>

	<!-- JQUERY JS -->
	<script src="../assets/js/jquery-3.4.1.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>

	<!-- SPARKLINE JS-->
	<script src="../assets/js/jquery.sparkline.min.js"></script>

	<!-- CHART-CIRCLE JS-->
	<script src="../assets/js/circle-progress.min.js"></script>

	<!-- RATING STARJS -->
	<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

	<!-- EVA-ICONS JS -->
	<script src="../assets/iconfonts/eva.min.js"></script>

	<!-- INPUT MASK JS-->
	<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

	<!-- SIDE-MENU JS-->
	<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- INTERNAL CHARTJS CHART JS -->
	<script src="../assets/plugins/chart/Chart.bundle.js"></script>
	<script src="../assets/plugins/chart/utils.js"></script>
	<!-- INTERNAL  ECHART JS-->
	<script src="../assets/plugins/echarts/echarts.js"></script>
	<!-- INTERNAL INDEX-SCRIPTS -->
	<script src="../assets/js/index5.js"></script>
	<!-- SIDEBAR JS -->
	<script src="../assets/plugins/sidebar/sidebar.js"></script>
	<!-- CUSTOM JS -->
	<script src="../assets/js/custom.js"></script>

</body>


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/index5 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 14:27:24 GMT -->

</html>