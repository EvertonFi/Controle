<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 14:28:01 GMT -->
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
    <title>Yoha – HTML5 Bootstrap Admin Template</title>

    <!-- BOOTSTRAP CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet">

    <!--PERFECT SCROLL CSS-->
    <link href="../assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />


    <!-- INTERNAL  FILE UPLODE CSS -->
    <link href="../assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />

    <!-- INTERNAL SELECT2 CSS -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- INTERNAL BOOTSTRAP-DATERANGEPICKER CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

    <!-- INTERNAL  TIME PICKER CSS -->
    <link href="../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

    <!-- INTERNAL  DATE PICKER CSS-->
    <link href="../assets/plugins/date-picker/spectrum.css" rel="stylesheet" />

    <!-- INTERNAL  MULTI SELECT CSS -->
    <link rel="stylesheet" href="../assets/plugins/multipleselect/multiple-select.css">

    <!-- INTERNAL TELEPHONE CSS-->
    <link rel="stylesheet" href="../assets/plugins/telephoneinput/telephoneinput.css">
    <!-- SIDEBAR CSS -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

    <!-- Switcher CSS -->
    <link href="../assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="../assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="app sidebar-mini">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <?php require 'menu.php' ?>
            <div class="app-content">
                <div class="side-app">
                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <div>
                            <h1 class="page-title">Cadastro de Novo Item</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cadastro de Novo Item</li>
                            </ol>
                        </div>
                        <?php require 'botoesSuperior.php'; ?>
                    </div>
                    <!-- PAGE-HEADER END -->
                    <div class="row">
                        <form action="">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-0 card-title">Cadastro de Novo Item</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Nome</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="nome" placeholder="Nome do Produto">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Marca</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="marca" placeholder="Marca do Produto" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Quantidade</label>
                                                    <input type="number" class="form-control" name="quantidade" placeholder="Quantidade">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Preço de Compra</label>
                                                    <input type="text" class="form-control" name="precocompra" placeholder="Preço em R$">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Categoria</label>
                                                    <select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option value="0">--Selecionar--</option>
                                                        <option value="1">Dress</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Material</label>
                                                    <select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option value="0">--Selecionar--</option>
                                                        <option value="1">Dress</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Cor</label>
                                                    <select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option value="0">--Selecionar--</option>
                                                        <option value="1">Dress</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Preço de Venda</label>
                                                    <input type="text" class="form-control" name="precovenda" placeholder="Preço em R$">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 ">
                                                <div class="form-group mb-0">
                                                    <label class="form-label">Descrição do Item</label>
                                                    <br>
                                                    <textarea class="form-control" name="example-textarea-input" rows="14" placeholder="Descrição do Item"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card shadow">
                                                    <label class="form-label">Imagem do Item</label>
                                                    <div class="card-body">
                                                        <input type="file" class="dropify" data-height="300" />
                                                    </div>
                                                </div>
                                            </div><!-- COL END -->
                                            <div class="col-lg-6">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        <button class="btn btn-success" type="submit">Adicionar Item</button>
                                                    </div>
                                                </div>
                                            </div><!-- COL END -->

                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->

                        </form>
                    </div>
                    <!-- ROW-6 CLOSED -->
                </div><!-- End Page -->
            </div>
        </div>
        <!-- CONTAINER END -->
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2020 <a href="#">Yoha</a>. Designed by <a href="#"> Spruko Technologies Pvt.Ltd </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

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

    <!-- PERFECT SCROLL BAR js-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/sidemenu/sidemenu-scroll.js"></script>

    <!-- CUSTOM SCROLLBAR JS-->
    <script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>


    <!-- INTERNAL  FILE UPLOADES JS -->
    <script src="../assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="../assets/plugins/fileuploads/js/file-upload.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="../assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- INTERNAL  TIMEPICKER JS -->
    <script src="../assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="../assets/plugins/time-picker/toggles.min.js"></script>

    <!-- INTERNAL DATEPICKER JS-->
    <script src="../assets/plugins/date-picker/spectrum.js"></script>
    <script src="../assets/plugins/date-picker/jquery-ui.js"></script>
    <script src="../assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- INTERNAL MULTI SELECT JS -->
    <script src="../assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="../assets/plugins/multipleselect/multi-select.js"></script>

    <!--INTERNAL  FORMELEMENTS JS -->
    <script src="../assets/js/form-elements.js"></script>
    <script src="../assets/js/select2.js"></script>

    <!-- INTERNAL TELEPHONE JS -->
    <script src="../assets/plugins/telephoneinput/telephoneinput.js"></script>
    <script src="../assets/plugins/telephoneinput/inttelephoneinput.js"></script>
    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>
    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

    <!-- Swicther JS -->
    <script src="../assets/switcher/js/switcher.js"></script>
</body>


<!-- Mirrored from laravel.spruko.com/yoha/Sidemenu-Icon-Light/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 14:28:06 GMT -->

</html>