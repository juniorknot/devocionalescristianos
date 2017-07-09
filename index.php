<?php function child_theme_head_script() { ?>
	<meta name="Author" content="@devocionale"/>
	<meta property="og:title" content="Biblia DC"/>
	<meta name="twitter:image" content="https://www.devocionalescristianos.org/biblia/assets/img/social/social_logo.jpg">
	<meta property="og:image" content="https://www.devocionalescristianos.org/biblia/assets/img/social/social_logo.jpg"/>
	<meta content="Consulta la biblia online en todas las versiones - Antiguo y nuevo testamento" name="description"/>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" lang='es'>

<!-- la-biblia , Wed, 21 Dec 2016 12:31:25 GMT -->
<?php require( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' ); get_header();  ?><link rel="stylesheet" href="style.css">
<body>
<div id="main-content" class="container fade-in animated3 sidebar-narrow-left">
<div class="content-wrap tie-col-md-8 tie-col-xs-12">
<div class="content"> 
<div class="off-canvas-wrapper">
<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
<div id="off-canvas" class="off-canvas position-right" aria-hidden="false" data-off-canvas data-position="right">
<button class="close-button" aria-label="Close menu" type="button" data-close="off-canvas">
<span aria-hidden="true">×</span>
</button>
 
</div>
<div id="buscar" class="off-canvas position-left" aria-hidden="false" data-off-canvas data-position="left">
<button class="close-button" aria-label="Close menu" type="button" data-close="buscar">
<span aria-hidden="true">×</span>
</button>
 
</div>
</form></li>
</ul>
</div>
<div class="off-canvas-content" data-off-canvas-content>
<div class="row">
<div class="large-8">

</div> <div class="row">
<div class="large-12 small-12 medium-12 columns">
<div class="row ">
<div class="large-5 medium-5 small-12 columns">
<select id="versiones" onchange="verificar_version()" name="versiones" class="drop">
<option value="Versiones">Versiones</option>
<option value="Reina-valera-1960">Reina Valera 1960</option>
<option value="Traduccion-lenguaje-actual">Traducción en Lenguaje Actual</option>
<option value="Nueva-version-internacional-1984">Nueva Version Internacional</option>
<option value="nueva-version-internacional-1999">Nueva Versión Internacional 1999</option>
<option value="Biblia-de-las-americas">Biblia de las Americas</option>
<option value="Dios-habla-hoy">Dios habla hoy</option>
<option value="kadosh-israelita-mesianica">Kadosh Israelita Mesiánica</option>
<option value="Nueva-traduccion-viviente">Nueva Traducción Viviente</option>
<option value="La-biblia-del-oso-1569">La Biblia del Oso  RV1569</option>
<option value="reina-valera-antigua-1602">Reina Valera Antigua 1602</option>
<option value="reina-valera-1858">Reina Valera 1858 (Nuevo Testamento)</option>
<option value="reina-valera-1862">Reina Valera 1862</option>
<option value="Reina-valera-1865">Reina Valera 1865</option>
<option value="Reina-Valera-1909">Reina Valera 1909</option>
<option value="Reina-valera-1977">Reina Valera 1977</option>
<option value="Reina-valera-1989">Reina Valera Actualizada 1989</option>
<option value="reina-valera-1990-adventista">Reina Valera 1990 (Adventista)</option>
<option value="Reina-valera-1995">Reina Valera 1995</option>
<option value="Reina-valera-2000">Reina Valera 2000</option>
<option value="Reina-valera-2004">Reina Valera 2004</option>
<option value="Reina-valera-Gomez">Reina Valera Gómez (2010)</option>
<option value="Valera-contemporanea">Reina Valera Contemporanea</option>
<option value="Biblia-de-Jerusalem-1976">Biblia de Jerusalem 1976</option>
<option value="Biblia-de-jerusalen-1998">Biblia de Jerusalén 1998</option>
<option value="biblia-corona-de-jerusalen">Biblia Corona de Jerusalen</option>
<option value="Biblia-de-jerusalem-3-edicion">Biblia de Jerusalem 3-Edicion</option>
<option value="Version-universidad-de-jerusalem">Biblia Universidad de Jerusalem</option>
<option value="Version-Israelita-nazarena-2011">Versión Israelita Nazarena 2011</option>
<option value="Biblia-al-dia">Biblia al día 1989</option>
<option value="Castilian-2003">Biblia Castilian 2003</option>
<option value="Biblia-del-siglo-de-oro">Biblia del Siglo de Oro</option>
<option value="Latinoamericana-1995">Biblia Latinoamericana (1995)</option>
<option value="biblia-latinoamericana-de-hoy">La Nueva Biblia Latinoamericana de Hoy</option>
<option value="Schokel-y-mateos">Nueva Biblia Española (1975)</option>
<option value="Biblia-de-nuestro-pueblo">Biblia de nuestro Pueblo</option>
<option value="Nacar-colunga">Nacar-Colunga</option>
<option value="Version-martin-nieto">Martin Nieto</option>
<option value="El-libro-del-pueblo-de-Dios">El Libro del Pueblo de Dios</option>
<option value="Version-septuaginta">Biblia Septuaginta al Español</option>
<option value="Junemann-septuaginta">Jünemann Septuaginta en español</option>
<option value="Textual-3a-edicion">La Biblia Textual 3a Edicion</option>
<option value="Version-moderna-1929">Version Moderna (1929) </option>
<option value="La-palabra-hispanoamericana">La Palabra (HispanoAmericana)</option>
<option value="Nueva-biblia-de-los-hispanos-nblh">Nueva Biblia de los Hispanos</option>
<option value="Palabra-de-Dios-para-todos">Palabra de Dios para Todos</option>
<option value="Serafin-de-ausejo">Serafín de Ausejo 1975</option>
<option value="Espanol-sagradas-escrituras">Spanish Sagradas Escrituras</option>
<option value="Torres-amat">Torres Amat</option>
<option value="Nuevo-mundo-testigos-de-jehova">Traducción del Nuevo Mundo (Testigos de Jehová)</option>
<option value="Brit-xadasha-judia-ortodoxa">Brit Xadasha Judia Ortodoxa (Nuevo Testamento)</option>
<option value="Castellano-Antiguo">Castellano Antiguo (Nuevo Testamento)</option>
<option value="Lenguaje-sencillo">Lenguaje Sencillo (Nuevo Testamento)</option>
<option value="La-sagrada-biblia-edicion-eunsa">EUNSA (Nuevo Testamento)</option>
<option value="Peshita-nuevo-testamento">Peshita (Nuevo Testamento)</option>
<option value="Nuevo-Testamento-F-arcas-y-a-fernandez">Arcas-Fernandez (Nuevo Testamento)</option>
<option value="Nuevo-testamento-pablo-besso">Pablo Besso (Nuevo Testamento)</option>
<option value="La-torah">La Torah </option>
<option value="Evangelios-scio-de-san-miguel">Scio de San Miguel (Solo los Evangelios)</option>
<option value="Biblia-de-israel-Genesis">Biblia de Israel (Solo Genesis)</option>
<option value="Mateo-hebreo-duTillet">DuTillet - Solo Mateo - Hebreo </option>
</select>
</div>
<div class="large-3 medium-3 small-12 columns">
<select id="libros" onChange="cargarCapsVers(this.value)" name="libros" class="drop">
<option>Libros</option>
</select>
</div>
<div class="large-2 medium-2 small-12 columns">
<select id="num_capitulos" name="num_capitulos" class="drop">
<option>Capítulos</option>
</select>
</div>
<div class="large-2 medium-2 small-12 columns">
<a id="bbuscar_cap" onclick="consulta_cap()" class="button search-white"></a>
</div>
</div>
</div>
<div class="small-12 columns">
<div class="row">
 
</div>
</div>
<div class="cuadro biblia large-12 columns">
<h2></h2>
<div class="large-6 medium-6 columns">
<div class="row categorias">
<div class="large-12 columns ends">
<h3>Versiones Completas</h3>
</div>
</div>
<div class="row categorias">
<div class="large-12 medium-8 columns">
<ul class="home">
<li><a title="Reina Valera 1960" href="la-biblia/version/Reina-valera-1960.php">Reina Valera 1960</a></li>
<li><a title="Traducción en Lenguaje Actual" href="la-biblia/version/Traduccion-lenguaje-actual.php">Traducción en Lenguaje Actual</a></li>
<li><a title="Nueva Versión Internacional 1984" href="la-biblia/version/Nueva-version-internacional-1984.php">Nueva Version Internacional 1984</a></li>
<li><a title="Nueva Versión Internacional 1999" href="la-biblia/version/nueva-version-internacional-1999.php">Nueva Versión Internacional 1999</a></li>
<li><a title="Biblia de las Américas" href="la-biblia/version/Biblia-de-las-americas.php">Biblia de las Americas</a></li>
<li><a title="Dios habla hoy" href="la-biblia/version/Dios-habla-hoy.php">Dios habla hoy</a></li>
<li><a title="Kadosh Israelita Mesiánica" href="la-biblia/version/kadosh-israelita-mesianica.php">Kadosh Israelita Mesiánica</a></li>
<li><a title="Nueva Traducción Viviente" href="la-biblia/version/Nueva-traduccion-viviente.php">Nueva Traducción Viviente </a></li>
<li><a title="La Biblia del Oso  RV1569" href="la-biblia/version/La-biblia-del-oso-1569.php">La Biblia del Oso RV1569</a></li>
<li><a title="Reina Valera Antigua 1602" href="la-biblia/version/reina-valera-antigua-1602.php">Reina Valera Antigua 1602</a></li>
<li><a title="Reina Valera 1862" href="la-biblia/version/reina-valera-1862.php">Reina Valera 1862</a></li>
<li><a title="Reina Valera 1865" href="la-biblia/version/Reina-valera-1865.php">Reina Valera 1865</a></li>
<li><a title="Reina Valera 1909" href="la-biblia/version/Reina-Valera-1909.php">Reina Valera 1909</a></li>
<li><a title="Reina Valera 1977" href="la-biblia/version/Reina-valera-1977.php">Reina Valera 1977</a></li>
<li><a title="Reina Valera Actualizada 1989" href="la-biblia/version/Reina-valera-1989.php">Reina Valera Actualizada 1989 </a></li>
<li><a title="Reina Valera 1990 (Adventista)" href="la-biblia/version/reina-valera-1990-adventista.php">Reina Valera 1990 (Adventista)</a></li>
<li><a title="Reina Valera 1995" href="la-biblia/version/Reina-valera-1995.php">Reina Valera 1995</a></li>
<li><a title="Reina Valera 2000" href="la-biblia/version/Reina-valera-2000.php">Reina Valera 2000</a></li>
<li><a title="Reina Valera 2004" href="la-biblia/version/Reina-valera-2004.php">Reina Valera 2004</a></li>
<li><a title="Reina Valera Gómez (2010)" href="la-biblia/version/Reina-valera-Gomez.php">Reina Valera Gómez (2010)</a></li>
<li><a title="Reina Valera Contemporanea 2011" href="la-biblia/version/Valera-contemporanea.php">Reina Valera Contemporanea 2011</a></li>
<li><a title="Biblia de Jerusalén 1976" href="la-biblia/version/Biblia-de-Jerusalem-1976.php">Biblia de Jerusalem 1976 </a></li>
<li><a title="Biblia de Jerusalén 1998" href="la-biblia/version/Biblia-de-jerusalen-1998.php">Biblia de Jerusalén 1998</a></li>
<li><a title="Biblia de Jerusalén 3-Edicion" href="la-biblia/version/Biblia-de-jerusalem-3-edicion.php">Biblia de Jerusalem 3-Edicion</a></li>
<li><a title="Biblia Corona de Jerusalen" href="la-biblia/version/biblia-corona-de-jerusalen.php">Biblia Corona de Jerusalen 2009</a></li>
<li><a title="Versión Universidad de Jerusalén" href="la-biblia/version/Version-universidad-de-jerusalem.php">Versión Universidad de Jerusalem</a></li>
<li><a title="Versión Israelita Nazarena 2011" href="la-biblia/version/Version-Israelita-nazarena-2011.php">Versión Israelita Nazarena 2011</a></li>
<li><a title="Biblia al día 1989" href="la-biblia/version/Biblia-al-dia.php">Biblia al día 1989</a></li>
<li><a title="Biblia Castilian 2003" href="la-biblia/version/Castilian-2003.php">Biblia Castilian 2003</a></li>
<li><a title="Biblia del Siglo de Oro" href="la-biblia/version/Biblia-del-siglo-de-oro.php">Biblia del Siglo de Oro (2009)</a></li>
<li><a title="Biblia Latinoamericana (1995)" href="la-biblia/version/Latinoamericana-1995.php">Biblia Latinoamericana (1995)</a></li>
<li><a title="La Nueva Biblia Latinoamericana de Hoy (2005)" href="la-biblia/version/biblia-latinoamericana-de-hoy.php">La Nueva Biblia Latinoamericana de Hoy (2005)</a></li>
<li><a title="Biblia de nuestro Pueblo" href="la-biblia/version/Biblia-de-nuestro-pueblo.php">Biblia de nuestro Pueblo (2009)</a></li>
<li><a title="Biblia Nacar-Colunga" href="la-biblia/version/Nacar-colunga.php">Biblia Nacar-Colunga</a></li>
<li><a title="Martin Nieto Versión 1962" href="la-biblia/version/Version-martin-nieto.php">Biblia Version Martin Nieto</a></li>
<li><a title="Septuaginta al Español" href="la-biblia/version/Version-septuaginta.php">Biblia Version Septuaginta al Español</a></li>
<li><a title="El Libro del Pueblo de Dios" href="la-biblia/version/El-libro-del-pueblo-de-Dios.php">El Libro del Pueblo de Dios</a></li>
<li><a title="Jünemann Septuaginta en español" href="la-biblia/version/Junemann-septuaginta.php">Jünemann Septuaginta en español</a></li>
<li><a title="La Biblia Textual 3ra Edicion" href="la-biblia/version/Textual-3a-edicion.php">La Biblia Textual 3ra Edicion</a></li>
<li><a title="Version Moderna (1929)" href="la-biblia/version/Version-moderna-1929.php">Version Moderna (1929)</a></li>
<li><a title="La Palabra (HispanoAmericana) 2010" href="la-biblia/version/La-palabra-hispanoamericana.php">La Palabra (HispanoAmericana)</a></li>
<li><a title="Nueva Biblia de los Hispanos 2005" href="la-biblia/version/Nueva-biblia-de-los-hispanos-nblh.php">Nueva Biblia de los Hispanos</a></li>
<li><a title="Palabra de Dios para Todos" href="la-biblia/version/Palabra-de-Dios-para-todos.php">Palabra de Dios para Todos</a></li>
<li><a title="Serafín de Ausejo 1975" href="la-biblia/version/Serafin-de-ausejo.php">Biblia Versión de Serafín de Ausejo</a></li>
<li><a title="Spanish Sagradas Escritura" href="la-biblia/version/Espanol-sagradas-escrituras.php">Spanish Sagradas Escritura</a></li>
<li><a title="Biblia Torres Amat 1823" href="la-biblia/version/Torres-amat.php">Biblia Torres Amat</a></li>
<li><a title="Nueva Biblia Española (1975)" href="la-biblia/version/Schokel-y-mateos.php">Nueva Biblia Española (1975)</a></li>
<li><a title="Traducción Del Nuevo Mundo (Testigos de Jehová)" href="la-biblia/version/Nuevo-mundo-testigos-de-jehova.php">Traducción Del Nuevo Mundo (Testigos de Jehová)</a></li>
</ul>
</div>
</div>
</div>
<div class="large-6 medium-6 columns">
<div class="row categorias">
<div class="large-12 columns ends">
<h3>Solo Nuevo Testamento</h3>
</div>
</div>
<div class="row categorias">
<div class="large-12 medium-8 columns">
<ul class="home">
<li><a title="Reina Valera 1858 (Nuevo Testamento)" href="la-biblia/version/reina-valera-1858.php">Reina Valera 1858 (Nuevo Testamento)</a></li>
<li><a title="Brit Xadasha Judia Ortodoxa 1999" href="la-biblia/version/Brit-xadasha-judia-ortodoxa.php">Brit Xadasha Judia Ortodoxa 1999</a></li>
<li><a title="Castellano Antiguo - Nuevo Testamento" href="la-biblia/version/Castellano-Antiguo.php">Castellano Antiguo (Nuevo Testamento)</a></li>
<li><a title="Lenguaje Sencillo (Nuevo Testamento)" href="la-biblia/version/Lenguaje-sencillo.php">Lenguaje Sencillo (Nuevo Testamento)</a></li>
<li><a title="EUNSA - Nuevo Testamento" href="la-biblia/version/La-sagrada-biblia-edicion-eunsa.php">EUNSA - Nuevo Testamento</a></li>
<li><a title="Peshita Nuevo Testamento" href="la-biblia/version/Peshita-nuevo-testamento.php">Peshita (Nuevo Testamento)</a></li>
<li><a title="Arcas-Fernandez - Nuevo Testamento" href="la-biblia/version/Nuevo-Testamento-F-arcas-y-a-fernandez.php">Arcas-Fernandez (Nuevo Testamento)</a></li>
<li><a title="Pablo Besso - Nuevo Testamento" href="la-biblia/version/Nuevo-testamento-pablo-besso.php">Pablo Besso (Nuevo Testamento)</a></li>
</ul>
</div>
</div>
<div class="row categorias">
<div class="large-12 columns ends">
<h3>Solos Los Evangelios</h3>
</div>
</div>
<div class="row categorias">
<div class="large-12 medium-8 columns medium-8 columns">
<ul class="home">
<li><a title="Los Santos Evangelios - Scio de San Miguel" href="la-biblia/version/Evangelios-scio-de-san-miguel.php">Los Santos Evangelios - Scio de San Miguel</a></li>
</ul>
</div>
</div>
<div class="row categorias">
<div class="large-12 columns ends">
<h3>Solo Mateo</h3>
</div>
</div>
<div class="row categorias">
<div class="large-12 medium-8 columns">
<ul class="home">
<li><a title="San Mateo-Hebreo - Solo Mateo" href="la-biblia/version/Mateo-hebreo-duTillet.php">San Mateo-Hebreo - Solo Mateo</a></li>
</ul>
</div>
</div>
<div class="row categorias">
<div class="large-12 columns ends">
<h3>Solo Génesis</h3>
</div>
</div>
<div class="row categorias">
<div class="large-12 medium-8 columns">
<ul class="home">
<li><a title="Biblia de Israel - Solo Génesis" href="la-biblia/version/Biblia-de-israel-Genesis.php">Biblia de Israel - Solo Genesis</a></li>
</ul>
</div>
</div>
<div class="row categorias">
<div class="large-12 columns ends">
<h3>Solo Pentateuco</h3>
</div>
</div>
<div class="row categorias">
<div class="large-12 medium-8 columns">
<ul class="home">
<li><a title="La Torah" href="la-biblia/version/La-torah.php">La Torah</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class=" large-12 columns">
</div>
</div><?php echo do_shortcode("[the_ad_placement id='biblia-down']") ?>
</div>
</div>
</div>
</div>
 
</div>
<?php get_sidebar('home1'); get_footer(); ?>
<script type="text/javascript" src="assets/js/au.min.js"></script>