<?php
require '../class/class.php';

$cor = Lista::Cor();
$material = Lista::Material();
$categoria = Lista::Categoria();
$marca = Lista::Marca();
?>

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
    <title>Adicionar Novo Item</title>
    <!-- BOOTSTRAP CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!-- SIDE-MENU CSS -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet">
    <!-- INTERNAL  FILE UPLODE CSS -->
    <link href="../assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />
    <!-- INTERNAL SELECT2 CSS -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />
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
                        <form action="../class/envio.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="chave" value="cadastroitem">
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
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Marca</label>
                                                    <select name="marca" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option selected="true" disabled="disabled">--Selecionar--</option>
                                                        <?php foreach ($marca as $ma) { ?>
                                                            <option value="<?php echo $ma->id ?>"><?php echo $ma->nome ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Quantidade</label>
                                                    <input type="number" class="form-control" name="qtd" placeholder="Quantidade">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Preço de Compra</label>
                                                    <input type="text" class="form-control" name="precocompra" placeholder="Preço em R$">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Categoria</label>
                                                    <select name="categoria" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option selected="true" disabled="disabled">--Selecionar--</option>
                                                        <?php foreach ($categoria as $ca) { ?>
                                                            <option value="<?php echo $ca->id ?>"><?php echo $ca->nome ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Material</label>
                                                    <select name="material" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option selected="true" disabled="disabled">--Selecionar--</option>
                                                        <?php foreach ($material as $m) { ?>
                                                            <option value="<?php echo $m->id ?>"><?php echo $m->nome ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label class="form-label">Cor</label>
                                                    <select name="cor" id="select-beast" class="form-control custom-select select2-show-search">
                                                        <option selected="true" disabled="disabled">--Selecionar--</option>
                                                        <?php foreach ($cor as $c) { ?>
                                                            <option value="<?php echo $c->id ?>"><?php echo $c->nome ?></option>
                                                        <?php } ?>
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
                                                    <textarea class="form-control" name="descricao" rows="14" placeholder="Descrição do Item"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card shadow">
                                                    <label class="form-label">Imagem do Item</label>
                                                    <div class="card-body">
                                                        <input type="file" class="dropify" data-height="300" name="arquivo" />
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
    <!-- INTERNAL  FILE UPLOADES JS -->
    <script src="../assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="../assets/plugins/fileuploads/js/file-upload.js"></script>
    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <!--INTERNAL  FORMELEMENTS JS -->
    <script src="../assets/js/select2.js"></script>
    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>
    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>
</body>

</html>