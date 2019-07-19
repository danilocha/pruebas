
<?php



//echo $deviceType; 




?>



<!DOCTYPE html>
<html lang="es">
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="IDéntico México Las impresoras de credenciales de PVC y de tarjetas personalizadas para afiliación, identificación de empleados, bonos, regalos o gafetes.">
		<meta name="author" content="">
		<title>Home |  IDéntico</title>
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="js/fontawesome-all.js"></script>

		<!-- CSS Propios -->
		<link rel="stylesheet" href="css/estilos.css">

		<!-- Slick -->
		<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>

		<!-- Add the new slick-theme.css if you want the default styling -->
		<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>

		<!-- Animate On Scroll Library -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


		<!-- Custom styles for this template -->
		<style>
		[data-aos][data-aos][data-aos-duration="400"]:nth-child(2n+1), body[data-aos-duration="400"] [data-aos]:nth-child(2n+1) {
			transition-delay: .8s;
		}
		body {
		padding-top: 100px;
		}
		@media (min-width: 992px) {
		body {
		padding-top: 100px;
		}
		}
		</style>

		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>

		<?php include_once("menu.php"); ?>


<?php 
if(isset($_GET['gracias']))
{
	include_once("gracias.php");
}
?>    


		<!--====================== inicio de CUERPO ======================= -->
		<div class="container-fluid">
			<div class="row">
				<!-- <div class="col-12 fondoimg p-0" style="background-image: url(img/home-1.jpg); height: 600px;">
					<div class="titulo text-white text-center total">
						<div class="bajo">
							<h1 class="px-2 py-5 mb-0" style="background-color: rgba(0, 150, 199, .8)">30 Años ofreciendo soluciones en identificación para la industria en México.</h1>
						</div>
					</div>
				</div> -->

<div class="col p-0">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/slider/banner-1.jpg" alt="Expertos en IDentificación Segura">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/slider/banner-2.jpg" alt="Credencializa a todos tus empleados">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/slider/banner-3.jpg" alt="Somos distribuidores Zebra">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/slider/banner-4.jpg" alt="Somos distribuidores FARGO">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/slider/banner-5.jpg" alt="Contáctanos">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="" aria-hidden="true"><img src="img/prev-banner.png" alt=""></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="" aria-hidden="true"><img src="img/next-banner.png" alt=""></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
			</div>

			<div class="row mt-4">
				<div class="col-12" style="background-color: #005694; height: 45px;"></div>
				<div class="col-12 posr" style="background-color: #ededed;">
					<img src="img/btn-mas-vendidos.png" alt="Productos más vendidos" class="pestania">
<!-- ============================================ Inicia Productos Más Vendidos  ============================================ -->
					<div class="row justify-content-center masVendidos mt-5 text-center">






<?php
do{
	?>


<!-- =================================================== Inicia Producto  =================================================== -->
						<div  data-aos="fade-up" data-aos-duration="1000" class="col-md-4 mt-2 mb-4 p-4">
							<div class="marco posr">


<!-- =========================================== Inicia Imagen de Producto  =========================================== -->
								<img src="img/fotos_productos/<?php echo $row_MasVendidos['img']; ?>" alt="" class="img-fluid" />
<!-- =========================================== Fin Imagen de Producto  =========================================== -->


<!-- =========================================== Inicia Ttitulo de Producto  =========================================== -->
								<h5 class="m-0 font-weight-bold" style="background-color: #fff"><span class="py-5 py-xl-4 d-inline-block"><?php echo utf8_encode($row_MasVendidos['nombre']); ?></span></h5>
<!-- =========================================== Fin Ttitulo de Producto  =========================================== -->


								<div class="descripcion text-white px-4">
									<div class="total">
										<div class="medio">


<!-- =========================================== Inicia Descripción de Producto  =========================================== -->
											<p><?php echo substr($row_MasVendidos['descripcion'], 0, 150); ?> ...</p>
											<h3><?php echo utf8_encode($row_MasVendidos['nombre']); ?></h3>
<!-- =========================================== Fin Descripción de Producto  =========================================== -->


										</div>
									</div>
								</div>
							</div>
							<a class="btn btn-primary" href="producto-detalle.php?id_producto=<?php echo $row_MasVendidos['id_producto'] ?>" role="button">Más información</a>
						</div>
<!-- =================================================== Fin Producto  =================================================== -->




    
    <?php
}while($row_MasVendidos = mysql_fetch_assoc($MasVendidos));
?>










					</div>
<!-- ============================================ Fin Productos Más Vendidos  ============================================ -->
				</div>
			</div>

			<div class="row justify-content-center mt-5">
				<div class="col-11 mt-4 posr" style="background-color: #0096c7; height: 25px;">
					<img src="img/btn-productos-destacados.png" class="pestania" alt="Productos destecados" style="right: 5%; left: inherit;" />
				</div>






<!-- ============================================= Inicia Productos Destacados ============================================= -->
				<div class="col-11 destacados mt-4">

<?php

do{
	
	?>
<!-- =================================================== Inicia Producto  =================================================== -->
					<div data-aos="fade-down" data-aos-duration="1000" class="text-center px-2">

<!-- =============================================== Inicia Imagen Producto  =============================================== -->
						<a href="producto-detalle.php?id_producto=<?php echo $row_Destacados['id_producto']; ?>"><img src="img/fotos_productos/<?php echo $row_Destacados['img']; ?>" alt="" class="img-fluid"></a>
<!-- ================================================= fin Imagen Producto  ================================================= -->


<!-- =============================================== Inicia Titulo Producto  =============================================== -->
						<a href="producto-detalle.php?id_producto=<?php echo $row_Destacados['id_producto']; ?>"><p><?php echo utf8_encode($row_Destacados['nombre']); ?></p></a>
<!-- ================================================= Fin Titulo Producto  ================================================= -->

					</div>
<!-- =================================================== Fin Producto  =================================================== -->

    <?php
	
}while($row_Destacados = mysql_fetch_assoc($Destacados));

?>

				</div>
<!-- ============================================= Fin Productos Destacados ============================================= -->


    



			</div>

			<div class="row my-5">
				<div class="col-12 my-4 p-0 parallax fondoimg" style="background-image: url(img/home-2.jpg);">
					<div class="total" style="background-color: rgba(0, 150, 199, .6)">
						<div class="medio text-center">
							<img src="img/logo-blanco.png" alt="IDéntico" class="img-fluid" style="width: 550px; background-position: top;" />
							<h1 class="text-white mt-4 mb-0">Expertos en Identificación Segura</h1>
						</div>
					</div>
				</div>
			</div>

			<div class="row my-5">
				<div class="col-12 text-center">
					<h1>Somos distribuidores</h1>
					<img src="img/logo-fargo.jpg" alt="" class="img-fluid mx-2">
					<img src="img/logo-zebra.jpg" alt="" class="img-fluid mx-2">
				</div>
			</div>

			<div class="row justify-content-center my-5">
				<span id="contacto"></span>
				<div class="col-12 text-center"><h2>Nuestros clientes</h2></div>
				<div class="col-10 logos mb-4">
					<div><img src="img/clientes/180x180-aqr.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-azpe.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-caracol.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-cargill.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-ccl.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-consolid.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-convermex.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-cube.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-eutelast.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-fandeli.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-fox.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-icel-25.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-logotec.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-presidente.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-puma.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-triada.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-trompos-cometa.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-universidad-ecatepec.png" alt="" class="img-fluid mx-auto"></div>
					<div><img src="img/clientes/180x180-vencort.png" alt="" class="img-fluid mx-auto"></div>
				</div>
			</div>
		</div>
		<!--====================== Fin de CUERPO ======================= -->


		<?php include_once("pie.php"); ?>
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- JavaScript propios -->
		<script src="js/scripts.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/valida_contacto.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/valida_te_llamamos.js" type="text/javascript" charset="utf-8"></script>

		<!-- Slick -->
		<script type="text/javascript" src="js/slick/slick.js"></script>

		<!-- Animate On Scroll Library -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<!-- Fire the plugin onDocumentReady -->
		<script type="text/javascript">

			$(document).ready(function() {
				AOS.init();

				$('.destacados').slick({
					slidesToShow: 4,
					autoplay: true,
					infinite: true,
					autoplaySpeed: 3000,
					responsive: [
						{
							breakpoint: 800,
							settings: {
								arrows: true,
								slidesToShow: 3
							}
						},
						{
							breakpoint: 700,
							settings: {
								arrows: false,
								dots: true,
								slidesToShow: 2
							}
						},
						{
							breakpoint: 500,
							settings: {
								arrows: false,
								dots: true,
								slidesToShow: 1
							}
						}
					]
				});

				$('.logos').slick({
					slidesToShow: 6,
					autoplay: true,
					infinite: true,
					autoplaySpeed: 3000,
					responsive: [
						{
							breakpoint: 800,
							settings: {
								arrows: true,
								slidesToShow: 3
							}
						},
						{
							breakpoint: 700,
							settings: {
								arrows: false,
								dots: true,
								slidesToShow: 2
							}
						},
						{
							breakpoint: 500,
							settings: {
								arrows: false,
								dots: true,
								slidesToShow: 1
							}
						}
					]
				});
			});
		</script>

	</body>
</html>
<?php
mysql_free_result($MasVendidos);
?>
