<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<?php include("includes/head.php"); ?>
</head>
<body>
	<div id="inline1" style="display: none; text-align:center;">
		<div class="background-popup" style="width:340px;">
			<?php if ($cod_idioma==1){?>
			<h4 class="version">Choose version</h4>
			<a href="https://cuty.io/SNCGame" class="btn-download-2" target="_blank">Original (PC)</a><br>
			<a href="https://cuty.io/SNCGameM" class="btn-download-3" target="_blank">.Pak file (Android)</a>
			<?php }else{ ?>
			<h4 class="version">Elija la versi&oacute;n</h4>
			<a href="https://cuty.io/SNCJuego" class="btn-download-2" target="_blank">Original (PC)</a><br>
			<a href="https://cuty.io/SNCJuegoM" class="btn-download-3" target="_blank">Archivo .Pak (Android)</a>
			<?php } ?>
		</div>
	</div>
	
	<?php include("includes/menu-responsive.php"); ?>
	<div class="back_moon">
		<div class="back_mountains">
			<div class="castle">
				<div class="sheeba">
					<div class="body-web">
						<div id="contenedor">
							<header class="logo">
								<div class="languaje hide-responsive">
									<a href="index.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Espa&ntilde;"></a> <a href="index.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</header>
						</div>
						<div id="contenedor">
							<?php $menu = "index"; include("includes/menu.php"); ?>
							<section class="home">
								<div class="text-center">
									<a class="<?php if($cod_idioma==1){ echo "trailer trailer-eng";}else{ echo "trailer";}; ?> fancybox-media" rel="mediagallery" href="<?php if($cod_idioma==1){?>https://www.youtube.com/watch?v=LHXNMNpZvS8<?php ;}else{ ?>https://www.youtube.com/watch?v=irduV9cW8d8<?php }; ?>"></a>
									<a class="<?php if($cod_idioma==1){ echo "btn-download btn-download-eng fancybox";}else{ echo "btn-download fancybox";}; ?>" href="#inline1" target="_blank"></a>
								</div>
							</section>
						</div>
						<?php include("includes/footer.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>