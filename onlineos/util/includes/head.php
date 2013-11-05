<?php

require_once '/system/configs/config.ini.php';
require_once 'util/functions/utils.php';

$page = $_SERVER ['REQUEST_URI']; //E se for via ajax?? Vamos pensar
can_see($page);

?>

<head>
<!-- Meta Tags Gerais -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="pt, pt-br" />

<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="cache-control" content="public" />
<meta http-equiv="imagetoolbar" content="no" />

<meta name="language" content="pt-br" />
<meta name="rating" content="general" />
<meta name="doc-rights" content="Public" />
<meta name="classification" content="Internet" />
<meta name="robots" content="index, follow" />
<meta name="distribution" content="Global" />
<meta name="revisit-after" content="10 day" />

<meta name="DC.creator" content="ICruz Design & Tecnologia" />
<meta name="DC.creator.address" content="suporte@icruz.com.br" />
<meta name="DC.publisher" content="ICruz Design & Tecnologia" />
<meta name="DC.Identifier" content="http://www.icruz.com.br">
<meta name="author" content="ICruz Design & Tecnologia" />
<meta name="copyright" content="2013 ICruz Design & Tecnologia" />

<meta name="geo.region" content="SP" />
<meta name="geo.placename" content="São Paulo" />

<meta name="DC.title"
	content="OnlineOS - Sistema de gest&atilde;o online" />
<meta name="DC.description"
	content="Onlineos - Sistema que controla e organiza as ordens de serviços, seja em qualquer ramo, fortalecerá sua relação com os clientes e alavancará seu negócio, experimente!" />
<meta name="keywords"
	content="onlineos, Onlineos, OnlineOS, onlineOS, onlineOs, online os, sistema de os, sistema os, ordem de serviço, sistema ordem serviço, sistema simples, sistema de os online, sistema gratuito, sistema de os grátis, sistema, sistema online, sistema de os para empresa, sistema de os online free, controle de finan&ccedil;as, controle de estoque, emiss&atilde;o de NFSe, emiss&atilde;o de nota fiscal eletr&ocirc;nica de servi&ccedil;os, sistema de emiss&atilde;o de boleto banc&aacute;rio, sistema de controle de comiss&atilde;o" />

<link rel="canonical" href="<?php echo BASE_URL;?>">

<!-- Compartilhamento no Facebook -->
<meta property="og:title" content="OnlineOS" />
<meta property="og:image"
	content="<?php echo BASE_URL?>img/logo.png" />

<!-- Emulador de IEs -->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<!-- Favicon -->
<link rel="shortcut icon"
	href="http://onlineos.com.br/images/favicon.ico" type="image/x-icon">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo PATH_CSS;?>porque.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>reset.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>text.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>960.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>layoutMain.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>buttons.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>inputs.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>links.css">
<link rel="stylesheet"
	href="<?php echo PATH_CSS;?>themes/overcast/jquery.ui.all.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>labels.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>table.css">
<link rel="stylesheet"
	href="<?php echo PATH_CSS;?>features.list.slider.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>contato.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>tipTip.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>demos.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>jconfirm.css">
<link rel="stylesheet" href="<?php echo PATH_CSS;?>jTPS.css">
<?php if(is_logged_in() && DELICIOUS) {?>
<link rel="stylesheet" href="<?php echo PATH_CSS;?>app.css">
<?php } ?>
<link rel="stylesheet"
	href="<?php echo PATH_CSS;?>jquery.jgrowl.css">
<link rel="stylesheet/less"
	href="<?php echo PATH_CSS;?>jquery.ui.themes.override.less">
<!-- Fim CSS -->
	<?php 
	/* 
	 Estava depois do custom form elements.js
	 <style type="text/css">input.styled { display: none; } select.styled { position: relative; width: 190px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style><style type="text/css">input.styled { display: none; } select.styled { position: relative; width: 190px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style> 
	  
	 Analisar a possibilidade de colocarmos estilos diferentes para os browsers também, assim como o bling
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="capa/bling/estilos/estilo_ie6.css" media="all" />
	<![endif]-->

	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="capa/bling/estilos/estilo_ie7.css" media="all" />
	<![endif]-->
	<!-- Fim CSS -->

	<!--[if IE 6]>
		<script src="capa/bling/scripts/pngfix.js"></script>
		<script>
			DD_belatedPNG.fix('.pngfix');
		</script>
	<![endif]-->
	*/?>
	<!-- SCRIPTS HEADER -->
<script src="<?php echo PATH_JS;?>lab.js"></script>
<!-- Mudar a versão do JQuery, mas antes vamos garantir o funcionamento -->
<script>
	  $LAB
	    .script("<?php echo PATH_JS;?>jquery-1.6.2.js")
	    .wait()
	    .script("<?php echo PATH_JS;?>custom-form-elements.js")
		.script("<?php echo PATH_JS;?>jquery.ui.core.js")
		.script("<?php echo PATH_JS;?>jquery.ui.widget.js")
		.script("<?php echo PATH_JS;?>jquery.ui.mouse.js")
		.script("<?php echo PATH_JS;?>jquery.ui.draggable.js")
		.script("<?php echo PATH_JS;?>jquery.ui.sortable.js")
		.script("<?php echo PATH_JS;?>jquery.ui.button.js")
		.script("<?php echo PATH_JS;?>jquery.ui.position.js")
		.script("<?php echo PATH_JS;?>jquery.ui.autocomplete.js")
		.script("<?php echo PATH_JS;?>jquery.ui.datepicker.js")
		.script("<?php echo PATH_JS;?>jquery.list.slider.features.js")
		.script("<?php echo PATH_JS;?>jquery.validate.js")
		.script("<?php echo PATH_JS;?>jquery.form.js")
		.script("<?php echo PATH_JS;?>jquery.contato.js")
		.script("<?php echo PATH_JS;?>jquery.maskedinput-1.3.js")
		.script("<?php echo PATH_JS;?>jquery.price_format.1.3.js")
		.script("<?php echo PATH_JS;?>jquery.tipTip.js")
		.script("<?php echo PATH_JS;?>jQuery.label_over.js")
		.script("<?php echo PATH_JS;?>jquery-ui-1.8.14.custom.min.js")
	    .wait()
	    .script("<?php echo PATH_JS;?>jquery-ui-timepicker.js")
		.script("<?php echo PATH_JS;?>jquery.jgrowl.js")
		.script("<?php echo PATH_JS;?>prototype.js")
		.script("<?php echo PATH_JS;?>jquery.effects.core.js") 
		.script("<?php echo PATH_JS;?>jconfirmaction.jquery.js")
		.script("<?php echo PATH_JS;?>jTPS.js")
		.script("<?php echo PATH_JS;?>jquery.quicksearch.js")
		.script("<?php echo PATH_JS;?>scriptaculous.js")
		.script("<?php echo PATH_JS;?>builder.js")
		.script("<?php echo PATH_JS;?>effects.js")
		.script("<?php echo PATH_JS;?>dragdrop.js")		
		.script("<?php echo PATH_JS;?>builder.js")
		.script("<?php echo PATH_JS;?>effects.js")
		.script("<?php echo PATH_JS;?>dragdrop.js")
		.script("<?php echo PATH_JS;?>slide.js")
		.script("<?php echo PATH_JS;?>modalbox.js")
		.script("<?php echo PATH_JS;?>jquery.prettyPhoto.js")
		.script("<?php echo PATH_JS;?>jquery.quicksand.js")
		.script("<?php echo PATH_JS;?>jquery.easing.1.3.js")		
		.script("<?php echo PATH_JS;?>Element.Delegation-1.3.js")
		.script("<?php echo PATH_JS;?>less-1.1.3.min.js")
		<?php if(is_logged_in() && DELICIOUS) {?>
		.script("<?php echo PATH_JS;?>modernizr.js")	
		.script("<?php echo PATH_JS;?>main.js")	
		<?php } ?>				
		.script("<?php echo PATH_JS;?>special_combobox.js");

	  	<!-- Script Redes Sociais -->
		function openFB(){
			window.open("https://www.facebook.com/sharer.php?u=http://www.onlineos.com.br",'','scrollbars=no, menubar=no, resizable=yes, toolbar=no, location=no, status=no');
		}
		function openTwitter(){
			window.open("http://twitter.com/home?status=O OnlineOS é um sistema online que permite a voce controlar as financas, estoques e emitir notas fiscais de maneira rapida e descomplicada. Visite http://www.onlineos.com.br",'','scrollbars=no, menubar=no, resizable=yes, toolbar=no, location=no, status=no');
		}

	<?php if(is_logged_in()){?>
	$LAB
    .script("<?php echo PATH_JS;?>logged-user.js")	
	<?php }?>
		
	</script>
<!-- Fim Scripts -->

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
	  <?php echo "var langJS = '$lang'";?>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-17601908-5']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

<noscript>
	<p>Seu browser n&atilde; possui suporte a Javascript!</p>
</noscript>

<title>OnlineOS - Sistema de gest&atilde;o online</title>
</head>