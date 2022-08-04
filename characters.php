<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<?php include("includes/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="resources/tabstyleinspiration/css/tabs.css" />
	<script src="resources/tabstyleinspiration/js/modernizr.custom.js"></script>
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
									<a href="characters.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="characters.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
								</div>
								<?php include("includes/header.php"); ?>
							</header>
						</div>
						<div id="contenedor">
							<?php $menu = "characters"; include("includes/menu.php"); ?>
							<section class="interior">
								<div class="estatua estatua-izquierda"></div>
								<div class="text-center cuadro-texto">
									<?php 
										if($cod_idioma==1){$title="characters";}else{$title="personajes";};
										echo "<img class='titular-seccion' src='img/".$title."-action-platformer-openbor-indie-game.png' />"; 
									?>
									<div class="tabs tabs-style-bar">
										<div class="info-characters">
											<div class="content-wrap border-text">
												<section id="sheebafaulkner">
													<div class="sheeba-sprite sprite-content">
														<h3 class="name-character">Sheeba Faulkner</h3>
														<div class="col-desc">
															<img class="face-image" src="img/sheeba-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Age";}else{ echo "Edad";}; ?>:</strong><br>
															25 <?php if($cod_idioma==1){ echo "years old";}else{ echo "a&ntilde;os";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Weight";}else{ echo "Peso";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "145 lbs";}else{ echo "66 kg";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Height";}else{ echo "Altura";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "5’83 ft";}else{ echo "1.78 m";}; ?></span>
															<span class="actor"><strong><?php if($cod_idioma==1){ echo "Voice actress";}else{ echo "Actriz de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Vanessa Rigo";}else{ echo "Vanessa Rigo";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>She was from the Silver Moon Clan before it's disappearance. Ever since, she's wandered Europe, avoiding the church and practicing her arts in secrecy. Snow, her spirit owl, is always with her.<?php }else{ ?>Perteneci&oacute; al Clan Luna de Plata antes de su desaparici&oacute;n. Desde entonces, viaja errante por Europa esquivando a la iglesia y practicando sus artes con discreci&oacute;n. Snow, su buho esp&iacute;ritu, la acompa&ntilde;a siempre.<?php } ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												<section id="ethangraymont">
													<div class="ethan-sprite sprite-content">
														<h3 class="name-character">Ethan Graymont</h3>
														<div class="col-desc">
															<img class="face-image" src="img/ethan-graymont-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Age";}else{ echo "Edad";}; ?>:</strong><br>
															25 <?php if($cod_idioma==1){ echo "years old";}else{ echo "a&ntilde;os";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Weight";}else{ echo "Peso";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "143 lbs";}else{ echo "65 kg";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Height";}else{ echo "Altura";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "5’64 ft";}else{ echo "1.72 m";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Voice Actor";}else{ echo "Actor de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Guillermo Arenivar";}else{ echo "Guillermo Arenivar";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>Many small villages contract his services for the extermination of vampires and other dark creatures. He lives in Čachtice along with his sister where, lately, he has a lot of work.<?php }else{ ?>Muchas peque&ntilde;as aldeas contratan sus servicios para el exterminio de vampiros y otras criaturas oscuras. Vive en &Ccaron;achtice junto con su hermana, donde &uacute;ltimamente tiene mucho trabajo.<?php } ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												<section id="franbloodrose">
													<div class="fran-sprite sprite-content">
														<h3 class="name-character">Francis Bloodrose</h3>
														<div class="col-desc">
															<img class="face-image" src="img/fran-bloodrose-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Age";}else{ echo "Edad";}; ?>:</strong><br>
															18 <?php if($cod_idioma==1){ echo "years old";}else{ echo "a&ntilde;os";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Weight";}else{ echo "Peso";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "132 lbs";}else{ echo "60 kg";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Height";}else{ echo "Altura";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "5'47 ft";}else{ echo "1.67 m";}; ?></span>
															<span><strong><?php if($cod_idioma==1){ echo "Voice Actor";}else{ echo "Actor de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Fabio Shaggy Rivas";}else{ echo "Fabio Shaggy Rivas";}; ?></span>
															<div class="cl"></div>
                                                            <p><?php if($cod_idioma==1){ ?>
                                                            After the loss of his family, he met Ethan while his vampire hunting and became his partner. He conceals his Dhampir lineage with a quiet demeanor and by hiding his magic.<?php }else{ ?>Tras perder a su familia decide trabajar con Ethan a quien conoci&oacute; durante sus cacer&iacute;as de vampiros. Disimula su identidad como Dhampiro con un perfil bajo y ocultando sus poderes.<?php } ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												<section id="berthagraymont">
													<div class="bertha-sprite sprite-content secondary">
														<h3 class="name-character">Bertha Graymont</h3>
														<div class="col-desc">
															<img class="face-image" src="img/bertha-graymont-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice actress";}else{ echo "Actriz de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Pris Bego";}else{ echo "Pris Bego";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>Ethan's little sister and a dealer of weapons and information. Loves money, pretty greedy.<?php }else{ ?>Hermana de Ethan, dedicada a la venta de armas e informaci&oacute;n. Ama el dinero, es muy avara.<?php }; ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												<section id="teobaldomondragon">
													<div class="teobaldo-sprite sprite-content secondary">
														<h3 class="name-character"><?php if($cod_idioma==1){ ?>Theobald Mondragon<?php }; ?><?php if($cod_idioma==0){ ?>Teobaldo Mondrag&oacute;n<?php }; ?></h3>
														<div class="col-desc">
															<img class="face-image" src="img/teobaldo-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice Actor";}else{ echo "Actor de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Julio L&oacute;pez";}else{ echo "Julio L&oacute;pez";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>Among the most pious and powerful paladin of the church, both witches and heretics alike fear the one whom they've dubbed “The Sword of God.”<?php }else{ ?>Uno de los m&aacute;s devotos y poderosos paladines de la iglesia, tanto brujas como herejes le temen a quien han apodado como "La espada de Dios".<?php }; ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												 <section id="xavierbogdan">
													<div class="xavier-sprite sprite-content secondary">
														<h3 class="name-character">Xavier Bogdan</h3>
														<div class="col-desc">
															<img class="face-image" src="img/xavier-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice Actor";}else{ echo "Actor de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Martin Mariano Méndez";}else{ echo "Martin Mariano Méndez";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>Paladin and right hand of the Grand Inquisitor. His vast experience ranges from commanding crusades to overseeing internal affairs of the church.<?php }else{ ?>Palad&iacute;n y Mano derecha del sumo inquisidor, su vasta experiencia abarca desde el comando de las cruzadas hasta la supervisi&oacute;n de asuntos internos en la iglesia.<?php }; ?></p>
														</div>
													</div>
												</section>
												<section id="ujvarijohanes">
													<div class="ficzko-sprite sprite-content secondary">
														<h3 class="name-character">Ficzk&oacute;</h3>
														<div class="col-desc">
															<img class="face-image" src="img/ficzko-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice Actor";}else{ echo "Actor de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Ra&uacute;l Mel&eacute;ndez";}else{ echo "Ra&uacute;l Mel&eacute;ndez";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>Bathory's personal jester. He welcomes her guests with macabre magic tricks.<?php }else{ ?>Buf&oacute;n personal de la condesa, da la bienvenida a sus invitados empleando macabros trucos de magia.<?php } ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												<section id="anadarvulia">
													<div class="darvulia-sprite sprite-content secondary">
														<h3 class="name-character">Ana Darvulia</h3>
														<div class="col-desc">
															<img class="face-image" src="img/darvulia-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice actress";}else{ echo "Actriz de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Liliana Robledo";}else{ echo "Liliana Robledo";}; ?></span>
															<div class="cl"></div>
                                                        	<p><?php if($cod_idioma==1){ ?>Bathory's seer and counselor. It's said that after her arrival to the castle, the Countess' crimes became bloodier.<?php }else{ ?>Vidente y consejera de Bathory. Se dice que tras su llegada al castillo los cr&iacute;menes de la condesa se hicieron m&aacute;s sangrientos.<?php } ?></p>
														</div>
														<div class="cl"></div>
													</div>
												</section>
												<section id="elizabethbathory">
													<div class="elizabeth-sprite sprite-content secondary">
														<h3 class="name-character">Isabel B&aacute;thory de Ecsed</h3>
														<div class="col-desc">
															<img class="face-image" src="img/elizabeth-bathory-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice Actress";}else{ echo "Actriz de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Saii Garcia";}else{ echo "Saii Garcia";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>Murdered countless virgin girls to use their blood in beautification rituals. Unsatisfied, she utilized a mysterious pagan relic to restore her youth, attracting the interest of the church.<?php }else{ ?>Asesin&oacute; a multitud de j&oacute;venes v&iacute;rgenes en sangrientos rituales cosm&eacute;ticos. Insatisfecha, consigui&oacute; una misteriosa reliquia pagana que restaur&oacute; su juventud, lo que atrajo el inter&eacute;s de la iglesia.<?php } ?></p>
														</div>
													</div>
												</section>
												<section id="evaine">
													<div class="evaine-sprite sprite-content secondary">
														<h3 class="name-character">Evaine Belvoir</h3>
														<div class="col-desc">
															<img class="face-image" src="img/evaine-belvoir-face-action-platformer-openbor-indie-game.jpg" /><span><strong><?php if($cod_idioma==1){ echo "Voice actress";}else{ echo "Actriz de doblaje";}; ?>:</strong><br>
															<?php if($cod_idioma==1){ echo "Susana Guajardo";}else{ echo "Susana Guajardo";}; ?></span>
															<div class="cl"></div>
															<p><?php if($cod_idioma==1){ ?>One of the many kidnapped girls by the countess. Bathory has taken a particular liking to her for her beauty, quietness, and femininity, which has spared her from being sacrificed.<?php }else{ ?>Una de muchas jovenes secuestradas por la condesa. Bathory le ha tomado un gusto particular por su belleza, tranquilidad y feminidad, lo que ha evitado que sea sacrificada.<?php } ?></p>
														</div>
													</div>
												</section>
											</div><!-- /content -->
										</div>
										<div class="text-characters">
											<nav>
												<ul>
													<li><a href="#sheebafaulkner" class="charam psheeba"></a></li>
													<li><a href="#ethangraymont" class="charam pethan"></a></li>
													<li><a href="#franbloodrose" class="charam pfran"></a></li>
												</ul>
												<ul class="second-list">
													<li><a href="#berthagraymont" class="charas pbertha"></a></li>
													<li><a href="#teobaldomondragon" class="charas pteobaldo"></a></li>
													<li><a href="#xavierbogdan" class="charas pxavier"></a></li>
													<li><a href="#ujvarijohanes" class="charas pficzko"></a></li>
													<li><a href="#anadarvulia" class="charas pdarvulia"></a></li>
													<li><a href="#elizabethbathory" class="charas pelizabeth"></a></li>
													<li><a href="#evaine" class="charas pevaine"></a></li>
												</ul>
											</nav>
										</div>
									</div>
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
	<script src="resources/tabstyleinspiration/js/cbpFWTabs.js"></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});
		})();
	</script>
</body>
</html>