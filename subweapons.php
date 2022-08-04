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
									<a href="subweapons.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="subweapons.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</header>
						</div>
						<div id="contenedor">
							<?php $menu = "equipment"; include("includes/menu.php"); ?>
							<section class="interior">
								<div class="estatua estatua-izquierda"></div>
								<div class="text-center cuadro-texto">
									<img class="titular-seccion" src="img/<?php if($cod_idioma==1){ echo "sub-weapons";}else{ echo "sub-armas";}; ?>-action-platformer-openbor-indie-game.png" />
									<ul class="sub-armas">
										<li><img class="weapon-image" src="img/cuchillas-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Silver Knife";}else{ echo "Cuchillas de plata";}; ?>:</strong> <?php if($cod_idioma==1){ echo "Effective against beasts.";}else{ echo "Efectivas contra bestias.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
										<li><img class="weapon-image" src="img/hacha-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Axe";}else{ echo "Hacha";}; ?>:</strong> <?php if($cod_idioma==1){ echo "Throwing weapon that arcs overhead.";}else{ echo "Arma arrojadiza que se arquea por encima.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
										<li><img class="weapon-image" src="img/bumeran-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Boomerang";}else{ echo "Bumeran";}; ?>:</strong> <?php if($cod_idioma==1){ echo "Effective against aerial foes.";}else{ echo "Eficaz contra enemigos aéreos.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
										<li><img class="weapon-image" src="img/biblia-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Bible";}else{ echo "Biblia";}; ?>:</strong> <?php if($cod_idioma==1){ echo "It's glow does gradual damage.";}else{ echo "Su resplandor hace daño gradual.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
										<li><img class="weapon-image" src="img/bomba-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Bomb";}else{ echo "Bomba";}; ?>:</strong> <?php if($cod_idioma==1){ echo "Explosive fire damage.";}else{ echo "Daño de fuego explosivo.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
										<li><img class="weapon-image" src="img/cruz-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Cross";}else{ echo "Cruz";}; ?>:</strong> <?php if($cod_idioma==1){ echo "Bumerang, strikes demons repeatedly.";}else{ echo "Bumerang, golpea demonios repetidamente.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
										<li><img class="weapon-image" src="img/agua-bendita-action-platformer-openbor-indie-game.jpg" /><p><strong><?php if($cod_idioma==1){ echo "Blessed Water";}else{ echo "Agua Bendita";}; ?>:</strong> <?php if($cod_idioma==1){ echo "Effective against terrestrial demons.";}else{ echo "Efectiva contra demonios terrestres.";}; ?><br>
										<strong><?php if($cod_idioma==1){ echo "Power";}else{ echo "Daño";}; ?>:</strong> <img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /><img src="img/star-action-platformer-openbor-indie-game.png" /></p></li>
									</ul>
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