<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Itatech - Eventos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Itatech - Eventos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicial
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicos.html">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.html">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobrenos.html">Sobre nós</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Page Content -->
<div class="container">
    <br>
    <img
            src="itatech.png"
            width="250"
            height="70"
    />

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Eventos</h1>
            <h5 class="my-3">Itatech Jr.</h5>
            <div class="list-group">
                <a href="#" class="list-group-item">Eventos anteriores</a>
                <a href="#" class="list-group-item">Fotos</a>
                <a href="#" class="list-group-item">Pretensões para 2018</a>
                <a href="#" class="list-group-item">Anuncie seu evento</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <?php

        $active = true;

        //if ($arrayEventosAbertos != null)
            foreach (($arrayEventosAbertos) as $evento){ ?>
        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item <?php if ($active) echo "active" ?>">
                        <img class="d-block img-fluid" src="<?php echo $evento->getImagem() ?>" alt="slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php $active = false;
            } ?>

            <?php
            foreach (($arrayEventosAbertos) as $evento) { ?>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="evento1.html"><img class="card-img-top" src="<?php echo $evento->getImagem() ?>"
                                                        alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="idEvento=<?php echo $evento->getIdEvento()?>.html"> <?php echo $evento->getNome() ?> </a>
                                </h4>
                                <h5>Data: --/--/2018</h5>
                                <p class="card-text"><b>Localização:</b> <?php echo $evento->getLocal() ?>
                                    <br><b>Valor de Inscrição:</b> <?php echo $evento->getValor() ?> </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Itatech Jr. 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>