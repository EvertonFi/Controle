<?php
require '../class/class.php';

if (isset($_GET, $_GET['id'])) {
    $item = Lista::ItemUnico($_GET['id']);
    $cor = Lista::Cor();
    $material = Lista::Material();
    $categoria = Lista::Categoria();
    $marca = Lista::Marca();
} else {
    header('Location: index.php');
}


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
    <title>Loja Virtual</title>
    <!-- BOOTSTRAP CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!-- SIDE-MENU CSS -->
    <link href="../assets/css/sidemenu.css" rel="stylesheet">
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
                        <h1 class="page-title">Página Inicial</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="listaItens.php">Lista de Itens</a></li>
                            <li class="breadcrumb-item active"><a href="#">Detalhes do Item</a></li>
                        </ol>
                    </div>
                    <?php require 'botoesSuperior.php' ?>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card productdesc">
                            <div class="card-body">
                                <div class="productdec text-center">
                                    <div class="bg-light-gray p-6 text-center">
                                        <img alt="Product" src="<?php echo $item->imagem ?>" class="border p-2">
                                    </div>
                                </div>
                                <div class="mt-4 mb-4">
                                    <h3><?php echo $item->nome . ' - ' . $item->cor ?></h3>
                                    <h5 class="mb-3 mt-2">Descrição do Produto</h5>
                                    <p><?php echo $item->descricao ?></p>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <h4 class="mb-5 mt-3">Informações Gerais</h4>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="row">
                                                        <div class="col-sm-3 text-muted">Nome:</div>
                                                        <div class="col-sm-3"><?php echo $item->nome ?></div>
                                                    </li>
                                                    <li class=" row">
                                                        <div class="col-sm-3 text-muted">Marca:</div>
                                                        <div class="col-sm-3"><?php echo $item->marca ?></div>
                                                    </li>
                                                    <li class="p-b-20 row">
                                                        <div class="col-sm-3 text-muted">Quantidade</div>
                                                        <div class="col-sm-3"><?php echo $item->qtd ?></div>
                                                    </li>
                                                    <li class="p-b-20 row">
                                                        <div class="col-sm-3 text-muted">Categoria</div>
                                                        <div class="col-sm-3"><?php echo $item->categoria ?></div>
                                                    </li>
                                                    <li class="p-b-20 row">
                                                        <div class="col-sm-3 text-muted">Material</div>
                                                        <div class="col-sm-3"><?php echo $item->material ?></div>
                                                    </li>
                                                    <li class="p-b-20 row">
                                                        <div class="col-sm-3 text-muted">Cor</div>
                                                        <div class="col-sm-3"><?php echo $item->cor ?></div>
                                                    </li>
                                                    <li class="p-b-20 row">
                                                        <div class="col-sm-3 text-muted">Preço de Compra</div>
                                                        <div class="col-sm-3">R$ <?php echo $item->preco_c ?></div>
                                                    </li>
                                                    <li class="p-b-20 row">
                                                        <div class="col-sm-3 text-muted">Preço de Venda</div>
                                                        <div class="col-sm-3">R$ <?php echo $item->preco_v ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL-END -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title"> Detalhes do Produto</div>
                            </div>
                            <form action="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" placeholder="Nome do Produto" value="<?php echo $item->nome ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Marca</label>
                                        <select name="marca" id="select-beast" class="form-control custom-select select2-show-search">
                                            <option selected="true" disabled="disabled">--Selecionar--</option>
                                            <?php foreach ($marca as $ma) { ?>
                                                <option <?php if ($ma->id == $item->id_marca) {
                                                            echo 'selected';
                                                        } ?> value="<?php echo $ma->id ?>"><?php echo $ma->nome ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Quantidade</label>
                                        <input type="number" class="form-control" name="qtd" placeholder="Quantidade" value="<?php echo $item->qtd ?>">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-label">Categoria</label>
                                        <select name="categoria" id="select-beast" class="form-control custom-select select2-show-search">
                                            <option value="0">--Selecionar--</option>
                                            <?php foreach ($categoria as $ca) { ?>
                                                <option <?php if ($ca->id == $item->id_marca) {
                                                            echo 'selected';
                                                        } ?> value="<?php echo $ca->id ?>"><?php echo $ca->nome ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-label">Material</label>
                                        <select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
                                            <option value="0">--Selecionar--</option>
                                            <option value="1">Dress</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cor</label>
                                        <select name="beast" id="select-beast3" class="form-control custom-select select2">
                                            <option value="0">--Selecionar--</option>
                                            <option value="1">Branco</option>
                                            <option value="2">Preto</option>
                                            <option value="3">Vermelho</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Preço de Compra</label>
                                        <input type="text" class="form-control" name="precocompra" placeholder="Preço de Compra">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Preço de Venda</label>
                                        <input type="text" class="form-control" name="precovenda" placeholder="Preço de Venda">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Descrição</label>
                                        <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Descrição do Item"></textarea>
                                    </div>
                                    <a class="btn btn-primary " href="#">Aplicar Alterações</a>
                                    <a class="btn btn-success " href="historicoIten.php">Histórico Alterações</a>
                                    <a class="btn btn-warning " data-toggle="modal" data-target="#addqtd" style="color: white">Add. Estoque</a>
                                </div>
                            </form>
                        </div>
                    </div><!-- COL-END -->
                </div>
                <!-- ROW-1 CLOSED -->
            </div><!-- End Page -->
        </div>
    </div>
    <!-- CONTAINER END -->
    <!-- MESSAGE MODAL -->
    <div class="modal" id="addqtd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addqtd">Adicionar Itens no Estoque</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Qtd. de Itens:</label>
                            <input type="number" name="qtd" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Preço:</label>
                            <input type="text" name="preco" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MESSAGE MODAL CLOSED -->
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

</html>