<?php 
if (isset($_REQUEST['cod_idioma'])) {
	$cod_idioma = $_REQUEST['cod_idioma'];
} else {
	$cod_idioma ="";
}
?>
<meta name="robots" content="noindex, nofollow">
<title>Silver Night's Crusaders | Action Platformer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="author" content="TrueRoleDreams" />
<meta name="description" lang="es" content="Corrupci&oacute;n, impiedad religiosa y la venta de indulgencias fortalecieron las doctrinas protestantes, quienes cuestionando la autoridad del clero, formaron comunidades y clanes que desde su f&eacute; combaten las fuerzas oscuras. Brujer&iacute;a, caza de vampiros y otras actividades, adem&aacute;s de doctrinas ajenas a la ortodoxia, son fuertemente perseguidas y condenadas por la iglesia..." />
<meta name="description" lang="en" content="Corruption, religious impiety and the sale of indulgences strengthened the Protestant doctrines, who questioning the authority of the clergy, formed communities and clans that fight against the dark forces. Witchcraft, vampire hunting and other activities, in addition to doctrines foreign to orthodoxy, are strongly persecuted and condemned by the church..." />
<meta name="keywords" content="True Role Dreams, Action platformer, Openbor, Indie game, Castlevania" />
<meta name="DC.title" content="Silver Night's Crusaders | Action Platformer" />
<meta name="DC.description" lang="es" content="Corrupci&oacute;n, impiedad religiosa y la venta de indulgencias fortalecieron las doctrinas protestantes, quienes cuestionando la autoridad del clero, formaron comunidades y clanes que desde su f&eacute; combaten las fuerzas oscuras. Brujer&iacute;a, caza de vampiros y otras actividades, adem&aacute;s de doctrinas ajenas a la ortodoxia, son fuertemente perseguidas y condenadas por la iglesia..." />
<meta name="DC.description" lang="en" content="Corruption, religious impiety and the sale of indulgences strengthened the Protestant doctrines, who questioning the authority of the clergy, formed communities and clans that fight against the dark forces. Witchcraft, vampire hunting and other activities, in addition to doctrines foreign to orthodoxy, are strongly persecuted and condemned by the church..." />

<meta property="og:title" content="Silver Night's Crusaders | Action Platformer" />
<meta property="og:type" content="Videogame" />
<meta property="og:description" lang="es" content="Corrupci&oacute;n, impiedad religiosa y la venta de indulgencias fortalecieron las doctrinas protestantes, quienes cuestionando la autoridad del clero, formaron comunidades y clanes que desde su f&eacute; combaten las fuerzas oscuras. Brujer&iacute;a, caza de vampiros y otras actividades, adem&aacute;s de doctrinas ajenas a la ortodoxia, son fuertemente perseguidas y condenadas por la iglesia..." />
<meta property="og:description" lang="en" content="Corruption, religious impiety and the sale of indulgences strengthened the Protestant doctrines, who questioning the authority of the clergy, formed communities and clans that fight against the dark forces. Witchcraft, vampire hunting and other activities, in addition to doctrines foreign to orthodoxy, are strongly persecuted and condemned by the church..." />
<meta property="og:url" content="http://www.trueroledreams.org/games/snc" />
<meta property="og:image" content="http://www.trueroledreams.org/games/snc/img/face1-action-platformer-openbor-indie-game.jpg" />
<meta property="og:image" content="http://www.trueroledreams.org/games/snc/img/face2-action-platformer-openbor-indie-game.jpg" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!--  Fancybox -->
<script src="resources/fancybox/lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="resources/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="resources/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
	});
</script>
<script type="text/javascript" src="resources/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox-media').attr('rel', 'media-gallery').fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			closeBtn   : false,
			padding : 0,
        
			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});
	});
</script>
<!-- Menu Mobile -->
<script type="text/javascript">
	$(function(){
		
		var pull		= $('#mmovil');
			menu		= $('.menu-principal ul');
			menuHeight	= menu.height();
			
		$(pull).on('click',function(e){
			e.preventDefault();
			menu.slideToggle();			
		});
		
		$(window).resize(function(){
			var w = $(window).width();
			if(w>768 && menu.is(':hidden')){
				menu.removeAttr('style');	
			}
		});
		
	});
</script>
<!-- estilo -->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.fancybox-item.fancybox-close{
	display: none;
}
.fancybox-type-iframe.fancybox-opened .fancybox-skin, .fancybox-type-inline.fancybox-opened .fancybox-skin {
    border: 8px solid;
	border-image-source: url("img/border-action-platformer-openbor-indie-game.png");
	-moz-border-image: url("img/border-action-platformer-openbor-indie-game.png");
	-webkit-border-image: url("img/border-action-platformer-openbor-indie-game.png");
    -o-border-image: url("img/border-action-platformer-openbor-indie-game.png");
	border-image-slice: 8;
	border-image-repeat: repeat;
	background: #000;
}
</style>