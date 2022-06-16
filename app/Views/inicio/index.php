<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="<?php echo base_url()?>/public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/public/css/glider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

</head>
<body>
	<!--MENU-->
	<?php require('app/Views/layout/nabvar.php') ?>

    <br>
	<!--CARRUSEL DE IMAGENES-->
	<div class="contenedor">
		<div class="carousel">
			<div class="carousel__contenedor">
				<button aria-label="Anterior" class="carousel__anterior">
					<i class="fas fa-chevron-left"></i>
				</button>

				<div class="carousel__lista">
					<div class="carousel__elemento">
						<img src="public/img/IMG1.jpg" alt="Rock and Roll Hall of Fame">
						<p>Rock and Roll Hall of Fame</p>
					</div>
					<div class="carousel__elemento">
						<img src="public/img/img.png" alt="Constitution Square - Tower I">
						<p>Constitution Square - Tower I</p>
					</div>

					<div class="carousel__elemento">
						<img src="public/img/img4.jpeg" alt="Harmony Tower">
						<p>Harmony Tower</p>
					</div>
	
					<div class="carousel__elemento">
						<img src="public/img/img5.jpg" alt="Empire State Building">
						<p>Empire State Building</p>
					</div>

				</div>

				<button aria-label="Siguiente" class="carousel__siguiente">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>

			<div role="tablist" class="carousel__indicadores"></div>
		</div>
	</div>


	<!--CONTENIDO PRINCIPAL-->
	<div class="row">
		<div class="col-md-6">
			<div class="contenido__principal1">

			</div>
		</div>

		<div class="col-md-6">
			<div class="contenido__principal1">
				
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="contenido__principal2">
				
			</div>
		</div>

		<div class="col-md-6">
			<div class="contenido__principal2">
				
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="contenido__principal3">
				
			</div>
		</div>

		<div class="col-md-6">
			<div class="contenido__principal1">
				
			</div>
		</div>

	</div>

    
    <script src="<?php echo base_url()?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>/public/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>/public/js/glider.js"></script>
	<br>
	<!--FOOTER-->
	<?php require('app/Views/layout/footer.php') ?>

	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>

</body>
</html>