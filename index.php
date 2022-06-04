<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<?php include("includes/head.php"); ?>
</head>
<body>
	<?php include("includes/menu-responsive.php"); ?>
	<div class="back_moon">
		<div class="back_mountains">
			<div class="castle">
				<div class="sheeba">
					<div>
						<header class="logo">
							<div id="contenedor">
								<div class="languaje hide-responsive">
									<a href="index.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Espa&ntilde;"></a> <a href="index.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</div>
						</header>
						<div id="contenedor">
							<?php $menu = "index"; include("includes/menu.php"); ?>
							<section class="home">
								<div class="text-center">
									<a class="<?php if($cod_idioma==1){ echo "trailer trailer-eng";}else{ echo "trailer";}; ?> fancybox-media" rel="mediagallery" href="<?php if($cod_idioma==1){?>https://www.youtube.com/watch?v=LHXNMNpZvS8<?php ;}else{ ?>https://www.youtube.com/watch?v=irduV9cW8d8<?php }; ?>"></a>
									<a class="<?php if($cod_idioma==1){ echo "btn-download btn-download-eng";}else{ echo "btn-download";}; ?>" href="<?php if($cod_idioma==1){ echo "http://q.gs/3029188/snc-game";}else{ echo "http://q.gs/3029188/snc-juego";}; ?>" target="_blank"></a>
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