<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
     
    <title>crono.me - O seu cronôMEtro online</title>      
        
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="Cronômetro Online para marcar intervalos de tempo." />
    <meta name="keywords" content="Cronômetro,Relógio,Tempo,Cronome,Crono.me,Calculo,Diferença" />
    <meta name="language" content="pt-br" />
    <meta name="author" content="Henrique Weiand - nike_weiand@hotmail.com" />
    	
    <meta property="og:title" content="crono.me - O seu cronôMEtro online">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.crono.me">
    <meta property="og:image" content="http://www.crono.me/img/logo-fc.png">
    <meta property="og:site_name" content="Crono.me">
    <meta property="og:description" content="Cronômetro Online para marcar intervalos de tempo.">
    <meta property="fb:admins" content="100001357240207" />
        
    <!-- CSS Files -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    
    <!-- JS Files-->
    <script language="javascript" type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.fullscreenBackground.js"></script>
    <script language="javascript" type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27632490-5']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
    
</head>

<body>

<h1 style="display:none">Crono.me - Cronômetro Online para marcar intervalos de tempo</h1>

<?php 
$imgs = array('1.jpg','2.jpg','3.jpg','4.jpg',);
$img  = array_rand($imgs,1);
?>

<div id="background-image">
    <img src="img/backgrounds/<?php echo $imgs[$img]; ?>" width="2800" height="1600" />
</div>

<div id="main">
	
    <ul id="options">
    	<li><img src="img/keybord.png" width="16" height="16" title="Saiba como usar os atalhos do crono.me" id="keybord" /></li>
    </ul>
    
    <div id="logo">
    	<center>
    		<img src="img/logo.png" width="317" height="53" title="crono.me - Seu cronômetro online" alt="Cronometro" />
        </center>
    </div>
    
    <div id="counter">00:00:00</div>
    
    <ul id="options2">
    	<li>
        	<input type="button" class="bt-init" id="bt1" value="Iniciar" alt="Inicie a contagem" tabindex="1" />
        </li>
        <li style="margin-left:70px">
        	<input type="button" class="bt-end" id="bt2" value="Zerar" alt="Pare/Zere a contagem" tabindex="2" />
        </li>
    </ul>
    
    <ul id="historico"></ul>
    
</div> <!-- END #main -->

<div id="main2">
	<img src="img/closeBox.png" class="closeBox" width="16" height="16" style="cursor:pointer" onclick="$.fn.hiddenLoad();" title="Fechar" />
    
    <ul>
    	<li>&#9658; <b>Espaço</b> = Inicia/Pausa o cronometro.</li>
        <li>&#9658; <b>Enter</b> = Inicia/Pausa o cronometro.</li>
        <li>&#9658; <b>Esc</b> = Reseta o contador se estiver rodando e adiciona o valor ao histórico.</li>
    </ul>
    
</div>

<a href="http://www.weride.com.br" target="_blank">
	<img src="img/mini_weride.png" style="position:fixed; bottom:0; z-index:99; right:0; margin-right:5px; margin-bottom:5px;" title="WeRide | Criando alem da boa propaganda">
</a>

</body>
</html>