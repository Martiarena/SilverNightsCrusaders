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
									<a href="tips.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="tips.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</header>
						</div>
						<div id="contenedor">
							<?php $menu = "tips"; include("includes/menu.php"); ?>
							<section class="interior">
								<div class="estatua estatua-izquierda"></div>
								<div class="text-center cuadro-texto">
									<img class="titular-seccion" src="img/tips-action-platformer-openbor-indie-game.png" />
									<ul class="tips">
										<?php if($cod_idioma==1){?>
										<li>Be patient. <u>Prioritize evasion over dealing damage</u>. Evasion button provides a brief period of invulnerability.</li>
										<li>Beware of cliffs. Falling down a pit costs one life, and you could run all your credits out if you're careless.</li>
										<li><strong>Discover new skills by trying button combinations</strong>, for example: Spell Button + Up Directional Button.</li>
										<li>Don't feel obligated to pick up every sub-weapon you find. Choose the one that suits better with your play-style.</li>
										<li>Explore every stage corner, useful items are hidden in each stage.</li>
										<li>Playing with a friend could make the game a little harder, if you're both novices, team work is the key!</li>
										<li>No boss is impossible, pay attention to his attack pattern and counter attack while his guard is down.</li>
										<?php }else{ ?>
										<li>S&eacute; paciente, <u>prioriza la evasi&oacute;n antes que el ataque</u>. Evadir proporcionar&aacute; un breve periodo de invulnerabilidad.</li>
										<li>Cuidado con los abismos. Caer te quitar&aacute; una vida, podr&iacute;as perder todos tus cr&eacute;ditos si eres descuidado.</li>
										<li><strong>Descubre nuevas habilidades probando combinaciones de botones</strong>, por ejemplo: Bot&oacute;n de Conjuro + Bot&oacute;n direccional hacia arriba.</li>
										<li>No te sientas obligado a recoger toda sub-arma que encuentres. Elige la que mejor se adapte a tu estilo de juego</li>
										<li>Explora cada esquina de los escenarios, hay objetos escondidos en cada nivel.</li>
										<li>Jugar con un amigo podr&iacute;a hacer que el juego sea un poco m&aacute;s dif&iacute;cil, si ambos son novatos &iexcl;El trabajo en equipo es la clave!</li>
										<li>Ning&uacute;n jefe es imposible, presta atenci&oacute;n a su patr&oacute;n de ataque y contraataca mientras tiene la guardia baja.</li>
										<?php }; ?>
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