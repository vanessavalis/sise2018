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
	
	
	
	<!-- Bootstrap dos tenis 
    <link href="template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Itatech - Eventos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicial
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
			src= "itatech.png" 
			width= "250"
			height= "70"
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

            <?php
                if ($arrayEventosAbertos != null)
                    foreach (($arrayEventosAbertos) as $evento){?>

                        <div class="col-lg-9">
                            <div class="row x_panel" style="border: 1px solid #E6E9ED; padding: 20px;">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="<?php echo $evento->getImagem()?>" alt="..." style="width: 100%;">
                                    </div>
                                </div>

                                <div class="col-lg-6" style="border:0px solid #e5e5e5;">

                                    <h3 class="prod_title" style="border-bottom: 1px solid #DFDFDF;"><?php echo $evento->getNome() ?></h3>

                                    <p><?php echo $evento->getNome() ?></p>
                                    <br>
                                    <br>

                                    <div class="">
                                        <div class="product_price" style="margin:20px 0;padding:3px 8px;background-color:#FFF;text-align:left;border:2px dashed #ADD8E6;">
                                            <span class="price-tax">Preço: </span>
                                            <h1 class="price">R$: <?php echo $evento->getValor() ?></h1>
                                            <br>
                                        </div>
                                    </div>
                    <?php } ?>
						<div class="">
							<button type="button" class="btn btn-default btn-lg">Inscrever-se</button>
						</div>
						
						<div class="product_social">
							<ul class="list-inline">
								<br><br>
								<p>Siga nosso evento no Facebook:</p>
								<li><a href="#" style="font-size: 50px"><i class="fa fa-facebook-square"></i></a>
								</li>     
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<br>
	<br>
    
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