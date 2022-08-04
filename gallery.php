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
					<div class="body-web">
						<div id="contenedor">
							<header class="logo">
								<div class="languaje hide-responsive">
									<a href="gallery.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Espa&ntilde;ol"></a> <a href="gallery.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</header>
						</div>
						<div id="contenedor">
							<?php $menu = "gallery"; include("includes/menu.php"); ?>
							<section class="interior">
								<div class="estatua estatua-izquierda"></div>
								<div class="text-center cuadro-texto">
									<img class="titular-seccion <?php if($cod_idioma==1){ echo "title-gallery";}else{ echo "titulo-galeria";}; ?>" src="img/<?php if($cod_idioma==1){ echo "gallery";}else{ echo "galeria";}; ?>-action-platformer-openbor-indie-game.png" />
									<?php if($cod_idioma==1){ ?>
									<ul class="gallery">
										<li><a class="fancybox" href="img/screens/eng/screen1.png"><img src="img/screens/eng/screen1.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen2.png"><img src="img/screens/screen2.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen3.png"><img src="img/screens/eng/screen3.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen4.png"><img src="img/screens/eng/screen4.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen5.png"><img src="img/screens/eng/screen5.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen6.png"><img src="img/screens/eng/screen6.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen7.png"><img src="img/screens/eng/screen7.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen8.png"><img src="img/screens/eng/screen8.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen9.png"><img src="img/screens/eng/screen9.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen10.png"><img src="img/screens/eng/screen10.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen11.png"><img src="img/screens/eng/screen11.png"></a></li>
										<li><a class="fancybox" href="img/screens/eng/screen12.png"><img src="img/screens/eng/screen12.png"></a></li>
										<li><a class="fancybox-media" href="https://www.youtube.com/watch?v=tz-XdT-rONg"><img src="img/screens/movie1.jpg"></a></li>
										<li><a class="fancybox-media" href="https://www.youtube.com/watch?v=Brg0h2PlyPI"><img src="img/screens/movie2.jpg"></a></li>
										<li><a class="fancybox-media" href="https://www.youtube.com/watch?v=zfASD-Um8KA"><img src="img/screens/movie3.jpg"></a></li>
									</ul>	
									<?php }else{ ?>
									<ul class="gallery">
									    
										<li><a class="fancybox" href="img/screens/screen1.png"><img src="img/screens/screen1.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen2.png"><img src="img/screens/screen2.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen3.png"><img src="img/screens/screen3.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen4.png"><img src="img/screens/screen4.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen5.png"><img src="img/screens/screen5.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen6.png"><img src="img/screens/screen6.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen7.png"><img src="img/screens/screen7.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen8.png"><img src="img/screens/screen8.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen9.png"><img src="img/screens/screen9.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen10.png"><img src="img/screens/screen10.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen11.png"><img src="img/screens/screen11.png"></a></li>
										<li><a class="fancybox" href="img/screens/screen12.png"><img src="img/screens/screen12.png"></a></li>
										<li><a class="fancybox-media" href="https://www.youtube.com/watch?v=tz-XdT-rONg"><img src="img/screens/movie1.jpg"></a></li>
										<li><a class="fancybox-media" href="https://www.youtube.com/watch?v=Brg0h2PlyPI"><img src="img/screens/movie2.jpg"></a></li>
										<li><a class="fancybox-media" href="https://www.youtube.com/watch?v=zfASD-Um8KA"><img src="img/screens/movie3.jpg"></a></li>
									</ul>
									<?php } ?>
								</div>
								<div class="estatua estatua-derecha"></div>
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