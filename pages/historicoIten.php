<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/datatable by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 14:27:57 GMT -->
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
    <title>Histórico de Alterações</title>

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
                        <h1 class="page-title">Histórico de Alterações</h1>
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="listaItens.php">Lista de Itens</a></li>
                            <li class="breadcrumb-item"><a href="detalhesItens.php">Detalhes do Item</a></li>
                            <li class="breadcrumb-item active">Histórico de Alterações</li>
                        </ol>
                    </div>
                    <?php require 'botoesSuperior.php' ?>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Histórico de Alterações</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Qtd. de Itens</th>
                                                <th>Preço de C.</th>
                                                <th>Preço de V.</th>
                                                <th>Data de Modificação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Relógio Y68</td>
                                                <td>6</td>
                                                <td>R$26,00</td>
                                                <td>R$50,00</td>
                                                <td>01/01/2020</td>
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

    <!-- RATING STARJS -->
    <script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- EVA-ICONS JS -->
    <script src="../assets/iconfonts/eva.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- CUSTOM SCROLLBAR JS-->
    <script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>


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
    <script src="../assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
</body>


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/datatable by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 14:28:01 GMT -->

</html>