<!doctype html>
<html>
<head><meta charset="gb18030">
	
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
									<a href="story.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Espa&ntilde;ol"></a> <a href="story.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</header>
						</div>
						<div id="contenedor">
							<?php $menu = "story"; include("includes/menu.php"); ?>
							<section class="interior">
								<div class="estatua estatua-izquierda"></div>
								<div class="text-center cuadro-texto">
									<img class="titular-seccion" src="img/<?php if($cod_idioma==1){ echo "story";}else{ echo "historia";}; ?>-action-platformer-openbor-indie-game.png" />
									<?php if($cod_idioma==1){ ?>
									<p>Corruption, religious impiety and the unscrupulous selling of indulgences strengthened the Protestant Reformers who, denouncing the morality of the Roman Catholic Church, founded their own organizations to combat the growing dark forces. Witchcraft and vampire hunting are among the many unorthodox activities strongly condemned and persecuted by the church.</p>
									<p>At the beginning of the 17th century, reports emerged from the small hungarian village of &Ccaron;achtice regarding the disappearance of several young women, as well as the increasing presence of horrendous nocturnal creatures in the region.</p>
									<p>The church dismissed these claims until the victims included the young daughters of aristocrats and landowners close to the Countess Elizabeth Bathory, who owns a large castle in &Ccaron;achtice. Reports also mentioned the existence of an ancient pagan relic recently acquired by the Countess.</p>
									<p>Taking matters into their own hands, the church dispatched two of his paladins to pay a visit to the countess and investigate that mysterious relic...</p>
									<?php }else{ ?>
									<p>Corrupci&oacute;n, impiedad religiosa y la inescrupulosa venta de indulgencias fortalecieron las reformas protestantes quienes denunciando la moralidad de la iglesia cat&oacute;lica romana, fundaron sus propias organizaciones para combatir a las crecientes fuerzas oscuras. Brujer&iacute;a, caza de vampiros y muchas otras actividades ajenas a la ortodoxia son fuertemente perseguidas y condenadas por la iglesia.</p>
									<p>Y es a principios del siglo XVII, cuando emergieron reportes de la peque&ntilde;a aldea h&uacute;ngara de &Ccaron;achtice, sobre la desaparici&oacute;n de varias j&oacute;venes mujeres, as&iacute; como la creciente presencia de horrendas criaturas nocturnas en la regi&oacute;n.</p>
									<p>La iglesia desestim&oacute; estos reclamos hasta que a las v&iacute;ctimas  incluyeron a las hijas de arist&oacute;cratas y terratenientes cercanos a la condesa Elizabeth Bathory, propietaria de un gran castillo cerca a &Ccaron;achtice. Reportes tambi&eacute;n mencionaron la existencia de una antigua reliquia pagana recientemente adquirida por la condesa.</p>
									<p>Tomando el asunto en sus manos, la iglesia envi&oacute; a dos de sus paladines a dar una visita a la condesa e investigar sobre esa misteriosa reliquia...</p>
									<?php }; ?>
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