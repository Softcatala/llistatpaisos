<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php require( 'lib/db.php' ); ?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Llistat de Països i codis ISO</title>
        <meta name="description" content="Llistat de Països i codis ISO" />
        <meta name="keywords" content="iso,païsossoftcatala, catalanitzador, windows, mac os x, ios, android, linux" />
        <meta name="author" content="Softcatalà" />
        <link rel="shortcut icon" href="<?php echo $globals['base_domain'] ?>/favicon.ico" />
	    <link rel="image_src" href="<?php echo $globals['base_domain'] ?>/images/logo_catalanitzador.png" />

        <link type="text/css" rel="stylesheet" media="all" href="<?php echo $globals['base_domain'] ?>css/sc.css" />


		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables jQuery UI example</title>

		<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/jqueryui/dataTables.jqueryui.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/jqueryui/dataTables.jqueryui.js"></script>
		
	</head>
	<body>

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-150131-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
        'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
  })();

</script>
<!-- Fi Google Analytics -->

<div id="boxheader">
<div id="boxheadersc_inside">
<!--
<div id="sidebar3">
<br />
</div>
-->
<div class="sidebar_home">
<div class="logo_home"><a href="/"><img title="Softcatalà" alt="Softcatalà" src="http://www.softcatala.org/img/SC_logo.png"></a></div>
</div>
<!--i menutop -->
<div class="menutop">
<div class="menutop1">
<div class="menutop1_links">
<h1><a href="/wiki/Qui_som">Qui som</a>  |     <a href="/wiki/Contacte">Contacte</a>   |      <a href="/wiki/RSS">RSS</a>   |     <a href="/wiki/Ajuda">Ajuda</a></h1>
</div>
<div class="boxcerca">

<form target="_top" action="/wiki/Especial:Cerca" name="cercaform" method="get">

<span class="cerca">Cerca</span>
<select onchange="selectform(this.value);" id="cer" class="i1" name="cerca1">
<option value="0">Notícies</option>
<option value="1">Wiki</option>
<option value="2">Fòrums</option>
<option value="3" selected="selected">Rebost</option>
</select>
<input type="text" onfocus="cleartext(this)" value="El vostre terme de cerca" id="es" class="i2" name="search">
<input type="hidden" id="fulltextsearch" value="yes" name="fulltext">
<input type="hidden" value="1" id="ns100search" name="ns100">
<!--
<input type="submit" value="Cerca-ho" />
<div class="botcercar"><a href="#">Cerca-ho</a></div> -->
</form>
</div>
</div>
<div class="menutop2">
<ul>
<li><a href="/wiki/Aparells">Aparells</a></li>
<li><a href="/wiki/Projectes">Projectes</a></li>
<li><a href="/forum">Fòrums</a></li>
<li><a href="/wiki/Categoria:Rebost">Rebost</a></li>
<li><a href="/recursos/">Glossaris</a></li>
<li><a href="/diccionari_de_sinonims">Sinònims</a></li>
<li><a href="/corrector">Corrector</a></li>
<li><a href="/traductor">Traductor</a></li>
</ul>
</div>
</div>
<!--f menutop -->
</div>
</div>
<!-- F header -->