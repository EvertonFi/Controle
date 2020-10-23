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
    <title>Relatorio de Vendas</title>

    <!-- BOOTSTRAP CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet">
    <!-- INTERNAL SELECT2 CSS -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- INTERNAL  DATA TABLE CSS-->
    <link href="../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="../assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />
    <!-- SIDEBAR CSS -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

    <!-- INTERNAL SELECT2 CSS -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

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
                        <h1 class="page-title">Relatorio de Vendas</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Relatorio de Vendas</li>
                        </ol>
                    </div>
                    <?php require 'botoesSuperior.php' ?>
                </div>
                <!-- PAGE-HEADER END -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0 card-title">Adicionar Item na Venda</h3>
                            </div>
                            <form action="" method="get">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label class="form-label">Item</label>
                                            <select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
                                                <option value="0">--Selecionar--</option>
                                                <option value="1">Dress</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label">Preço</label>
                                            <input type="text" name="preco" value="00" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label">Qtd</label>
                                            <input type="text" name="preco" value="00" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label">Local da Venda</label>
                                            <select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
                                                <option value="0">--Selecionar--</option>
                                                <option value="1">Dress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9"></div>
                                        <div class="form-group col-md-3">
                                            <input type="submit" class="btn btn-info btn-block" value="Adicionar Item">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- COL-END -->
                </div>
                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Histórico de Vendas no Periodo</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Nome</th>
                                                <th>Qtd.</th>
                                                <th>Preço V.</th>
                                                <th>Total</th>
                                                <th>Rede Social</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/01/2020</td>
                                                <td>Relógio Y68</td>
                                                <td>6</td>
                                                <td>R$26,00</td>
                                                <td>R$50,00</td>
                                                <td>Facebook</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <h3>Total da Venda: R$11,11</h3>
                                <a href="" class="btn btn-success">Finalizar Venda</a>
                                <a href="" class="btn btn-warning">Gerar Orçamento</a>
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

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!--INTERNAL  FORMELEMENTS JS -->
    <script src="../assets/js/select2.js"></script>

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