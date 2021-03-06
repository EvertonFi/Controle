<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Painel de Administração">
     <meta name="author" content="Everton Figueiredo">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />
    <!-- TITLE -->
    <title>Histórico de Vendas</title>
    <!-- BOOTSTRAP CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!-- SIDE-MENU CSS -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet">
    <!-- INTERNAL  DATA TABLE CSS-->
    <link href="../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="../assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />
    <!-- SIDEBAR CSS -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />
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
                        <h1 class="page-title">Histórico de Vendas</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Histórico de Vendas</li>
                        </ol>
                    </div>
                    <?php require 'botoesSuperior.php' ?>
                </div>
                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Histórico de Vendas</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Qtd.</th>
                                                <th>Preço C.</th>
                                                <th>Preço V.</th>
                                                <th>Total</th>
                                                <th>Data</th>
                                                <th>Rede Social</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Relógio Y68</td>
                                                <td>6</td>
                                                <td>R$26,00</td>
                                                <td>R$50,00</td>
                                                <td>R$50,00</td>
                                                <td>01/01/2020</td>
                                                <td>Facebook</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-4 CLOSED-->
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
    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>
    <!-- RATING STARJS -->
    <script src="../assets/plugins/rating/jquery.rating-stars.js"></script>
    <!-- EVA-ICONS JS -->
    <script src="../assets/iconfonts/eva.min.js"></script>
    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>
    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>
    <!-- INTERNAL  CLIPBOARD JS -->
    <script src="../assets/plugins/clipboard/clipboard.min.js"></script>
    <script src="../assets/plugins/clipboard/clipboard.js"></script>
    <!-- INTERNALPRISM JS -->
    <script src="../assets/plugins/prism/prism.js"></script>
    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>
    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>
    <!-- INTERNAL  DATA TABLE JS-->
    <script src="../assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatable/datatable.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/jszip.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
</body>
</html>