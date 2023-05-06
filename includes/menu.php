<div id="mySidenav" class="sidenav">
	<div class="border-sidebar">
		<div class="languaje">
			<?php if($menu == "index" ){?>
			<a href="index.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="index.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
			<?php } ?>
			<?php if($menu == "story" ){?>
			<a href="story.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="story.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
			<?php } ?>
			<?php if($menu == "characters" ){?>
			<a href="characters.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="characters.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
			<?php } ?>
			<?php if($menu == "equipment" ){?>
			<a href="subweapons.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="subweapons.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
			<?php } ?>
			<?php if($menu == "gallery" ){?>
			<a href="gallery.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="gallery.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
			<?php } ?>
			<?php if($menu == "tips" ){?>
			<a href="tips.php"><img class="flag" src="img/spain-action-platformer-openbor-indie-game.png" alt="Idioma en Español"></a> <a href="tips.php?cod_idioma=1"><img class="flag" src="img/english-action-platformer-openbor-indie-game.png" alt="English Languaje"></a>
			<?php } ?>
		</div>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<ul class="menu-nav">
			<li <?php if($menu == "index" ){echo 'class="activo"';} ?>><a href="index.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Home";}else{ echo "Inicio";}; ?></a></li>
			<li <?php if($menu == "story" ){echo 'class="activo"';} ?>><a href="story.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Story";}else{ echo "Historia";}; ?></a></li>
			<li <?php if($menu == "characters" ){echo 'class="activo"';} ?>><a href="characters.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Characters";}else{ echo "Personajes";}; ?></a></li>
			<li <?php if($menu == "equipment" ){echo 'class="activo"';} ?>><a href="subweapons.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Sub-Weapons";}else{ echo "Sub-Armas";}; ?></a></li>
			<li <?php if($menu == "gallery" ){echo 'class="activo"';} ?>><a href="gallery.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Gallery";}else{ echo "Galería";}; ?></a></li>
			<li <?php if($menu == "tips" ){echo 'class="activo"';} ?>><a href="tips.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>">Tips</a></li>
		</ul>
		
	</div>
</div>
<div class="aside hide-responsive">
	<nav class="main-menu">
		<ul>
			<li <?php if($menu == "index" ){echo 'class="activo"';} ?> ><span class="flame1-a"></span><span class="flame1-b"></span><a href="index.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Home";}else{ echo "Inicio";}; ?></a></li>
			<li <?php if($menu == "story" ){echo 'class="activo"';} ?>><span class="flame1-a"></span><span class="flame1-b"></span><a href="story.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Story";}else{ echo "Historia";}; ?></a></li>
			<li <?php if($menu == "characters" ){echo 'class="activo"';} ?>><span class="flame1-a"></span><span class="flame1-b"></span><a href="characters.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Characters";}else{ echo "Personajes";}; ?></a></li>
			<li <?php if($menu == "equipment" ){echo 'class="activo"';} ?>><span class="flame1-a"></span><span class="flame1-b"></span><a href="subweapons.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Sub-Weapons";}else{ echo "Sub-Armas";}; ?></a></li>
			<li <?php if($menu == "gallery" ){echo 'class="activo"';} ?>><span class="flame1-a"></span><span class="flame1-b"></span><a href="gallery.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>"><?php if($cod_idioma==1){ echo "Gallery";}else{ echo "Galería";}; ?></a></li>
			<li <?php if($menu == "tips" ){echo 'class="activo"';} ?>><span class="flame1-a"></span><span class="flame1-b"></span><a href="tips.php<?php if($cod_idioma==1){ echo "?cod_idioma=1"; }; ?>">Tips</a></li>
		</ul>
	</nav>
	<div class="novedades">
		<div class="scrollbar" id="style-2">
			<ul>
			<li><strong><?php if($cod_idioma==1){ echo "April 17, 2023"; }else{ echo "17 de Abril, 2023"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "1.6 ver. released! Minor bugs solved and falling animation glitch."; }else{ echo "Ver. 1.6 publicada! Bug menores resueltos y glitch gr&aacute;fico de ca&iacute;da."; }; ?></li>
			    <li><strong><?php if($cod_idioma==1){ echo "Aug 6, 2022"; }else{ echo "6 de Agosto, 2022"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "1.5 version released! (with Android .pak file) Other bugs solved."; }else{ echo "Ver 1.5 publicada! (y archivo .pak para Android) Otros bug resueltos."; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "May 1, 2021"; }else{ echo "1 de Mayo, 2021"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "1.3 version released! (with spanish dub) Enjoy! :D."; }else{ echo "Versi&oacute;n 1.3 Publicada! (con Doblaje). Disfrutenla :D."; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "Apr 25, 2021"; }else{ echo "25 de abril, 2021"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "1.3 version will come with spanish dub the 1st of may this year."; }else{ echo "La versi&oacute;n 1.3 vendr&aacute; con doblaje el 1 de mayo de este año."; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "Dec 13, 2020"; }else{ echo "13 de diciembre, 2020"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "1.2 version and 'Gameplay edition' with silenced credits released."; }else{ echo "Version 1.2 y 'Edici&oacute;n Gameplay' con cr&eacute;ditos silenciados lista."; }; ?></li>
			    <li><strong><?php if($cod_idioma==1){ echo "Oct 31, 2020"; }else{ echo "31 de octubre, 2020"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "Official game release!<br> Download now!"; }else{ echo "&iexcl;Lanzamiento Oficial del juego! &iexcl;Descarga ahora!"; }; ?></li>
			    <li><strong><?php if($cod_idioma==1){ echo "Oct 30, 2020"; }else{ echo "30 de octubre, 2020"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "updated tips and gallery section with new videos!"; }else{ echo "&iexcl;Actualizada sección de tips y galer&iacute;a con nuevos v&iacute;deos!"; }; ?></li>
			    <li><strong><?php if($cod_idioma==1){ echo "Oct 4, 2020"; }else{ echo "4 de octubre, 2020"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "Added trailer of the game! Release date 31 of October."; }else{ echo "&iexcl;A&ntilde;adido trailer del juego! Fecha de salida 31 de Octubre."; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "Ago 1, 2020"; }else{ echo "1 de agosto, 2020"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "Updated gallery with final version images of the game!"; }else{ echo "Galería actualizada con imágenes de la versión final del juego!"; }; ?></li>
			    <li><strong><?php if($cod_idioma==1){ echo "May 31, 2020"; }else{ echo "31 de mayo, 2020"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "Changed some little story facts from the game. Soon the release date xd."; }else{ echo "Cambiamos algunos hechos en la historia. Pronto la fecha de salida xd.
"; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "Dec 9, 2019"; }else{ echo "9 de diciembre, 2019"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "We added two new characters profiles!"; }else{ echo "¡Añadidos dos nuevos perfiles de personajes!"; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "Jul 29, 2019"; }else{ echo "29 de Julio, 2019"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "Game information checked and updated!"; }else{ echo "¡Información del juego corregida y actualizada!"; }; ?></li>
				<li><strong><?php if($cod_idioma==1){ echo "May 29, 2019"; }else{ echo "29 de Mayo, 2019"; }; ?></strong><br />
					<?php if($cod_idioma==1){ echo "Oficial website released! Check out the lastest news of the proyect."; }else{ echo "¡Estreno del sitio web oficial! Con las últimas novedades del proyecto."; }; ?></li>
			</ul>
		</div>
	</div>
	<div class="titulo-novedad">
		<h3><?php if($cod_idioma==1){ echo "News";}else{ echo "Novedades";}; ?></h3>
	</div>
</div>