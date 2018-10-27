<!DOCTYPE HTML>
<html>
	<head>
		<title>Ajedrez de Torneo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="leyes del ajedrez, laws of chess, jugar ajedrez, ajedrez online, reglas del ajedrez, Informaci&oacute;n Ajedrez, ajedrez gratis, Noticias de Ajedrez en Madrid, Rondas y Torneos de Ajedrez" />
		<meta name="keywords" content="movimiento, movidas, piezas, fichas, ajedrez, chess, echecs, échecs, xadrez, escacs, schach, madrid, españa, spain, nacional, internacional, deportes, partida, partidas, descarga, tablero, tablas, piezas, peon, peón, torre, caballo, alfil, rey, dama, apertura, medio juego, finales,federación, torneo, torneos, enroque, peón al paso" />

		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
          <script>
  function valida(){
  
  var er = false;
  
  if(document.formu.email.value=="" ) {
  
	  alert("Debes introducir tu Email");
	  document.formu.email.focus();
	  er=true;
    
  }
  if(document.formu.BirthYear.value=="" && er ==false ) {
  
	  alert("Debes introducir tu Año de Nacimiento");
	  document.formu.BirthYear.focus();
	  er=true;
    
  }
  
   if(document.formu.ZipCode.value=="" && er==false ) {
  
	  alert("Debes introducir tu Código Postal");
	  document.formu.ZipCode.focus();
	  er=true;
    
  }
  
  if(document.formu.cd.checked==false && er==false ) {
  
	  alert("Debes Aceptar los Términos y Condiciones de Correo Direct");
	  document.formu.cd.focus();
	  er=true;
    
  }
  
  if(er == false){
  
  		if(document.formu.email.value!="" && document.formu.BirthYear.value!="" && document.formu.cd.checked==true){

			document.getElementById('pixel_corr').src="http://registro.correodirect.com/jmpx.php?Affiliate=16165&email=" + document.formu.email.value + "&Sex=" + document.formu.Sex.value + "&ZipCode="+ document.formu.ZipCode.value +"&BirthYear=" + document.formu.BirthYear.value;
			 alert("¡Registrado Correctamente!");
			
		}	
  if(er==false){
			document.formu.submit();
		}

  
	
  }
  
  
  }
  function abrir(url) { 
open(url,'','top=100,left=100,width=400,height=300') ; 
} 

  </script>

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2238929-3', 'auto');
  ga('send', 'pageview');

</script>

</head>

	<body class="homepage">

		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
						<h1><a href="index.html" id="logo">Ajedrez de Torneo</a></h1>
						<p>Aprende y Juega al Ajedrez</p>
					</div>
				</div>
			</header>

		<!-- Nav -->
			<nav id="nav" class="skel-layers-fixed">
				<ul>
					<li class="current"><a href="index.html">Inicio</a></li>
					<li>
						<a href="leyes-ajedrez.html">Leyes del Ajedrez</a>
					</li>
					<li><a href="torneos-ajedrez.html">Torneos Ajedrez</a></li>
					<li><a href="contacta.html">Contacta</a></li>
				</ul>
			</nav>
		
		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
						<div class="row 200%">
						<div class="12u">

							<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>¿Quieres aprender a jugar al ajedrez?</span></h2>
									<div>
										
										<div class="row">
											<div class="12u">
												
                                                    <?php
	function comprobar_mail($mail){ 

  //if (!preg_match("([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$mail)){ 
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      return FALSE; 
  } else { 
       return TRUE; 
  } 
} 

	
	$email = $_GET['email'];
	if (!(comprobar_mail($email)))
	{
		die ("por favor comprueba la dirección de correo electrónico que has introducido. <a href='javascript:history.back()'>Volver</a>");	
	}
	
	$subject = "Ajedrez de Torneo: Tus reglas del ajedrez";
	$mensaje = '<head><title>Ajedrez de Torneo: Tus reglas del ajedrez</title></head><body><p>Hola, <br />
	Aquí te envío las Leyes del Ajedrez para que conozcas todo sobre este deporte.<br /> <a href="http://www.ajedrezdetorneo.com/static/Leyes2014.pdf">http://www.ajedrezdetorneo.com/static/Leyes2014.pdf</a><br /><br />
	Un saludo,<br />
	Ajedrez de Torneo<br />
	webmaster@ajedrezdetorneo.com</p>
	
	* Este es un mensaje automatico</body> 
	';
	$headers = 'From: webmaster@ajedrezdetorneo.com' . "\r\n" .'Bcc: webmaster@ajedrezdetorneo.com' . "\r\n" .'Reply-To: webmaster@ajedrezdetorneo.com' . "\r\n" . 'Content-type: text/html'. "\r\n".'Mime-Version: 1.0'. "\r\n" . 'X-Mailer: PHP/' . phpversion();
   
	if (mail($email,$subject,$mensaje,$headers)){
	
	echo '<h2>Completa los siguientes datos. </h2>';}
	else
	{
	}
	
	

?>
<!--Registro en Correo Directo-->
  <form name="formu" action="gracias.php" >
  <img id="pixel_corr" src="http://www.madridmueve.com" width="1" height="1">
  Email:  <input name="email" id="email" maxlength="255" value="<?php echo $email ?>" type="text"><br>
Sexo:
                          <select name="Sex">
                            <option value="M" selected>Hombre</option>
                            <option value="F">Mujer</option>
                          </select><br>
Edad:
                      <select name="BirthYear">
                        <option value="">Selecciona</option>
                        <option value="1997">Posterior a 1997</option>
                        <option value="1996">1996 </option>
                        <option value="1995">1995 </option>
                        <option value="1994">1994 </option>
                        <option value="1993">1993 </option>
                        <option value="1992">1992 </option>
                        <option value="1991">1991 </option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987 </option>
                        <option value="1986">1986 </option>
                        <option value="1985">1985 </option>
                        <option value="1984">1984 </option>
                        <option value="1983">1983 </option>
                        <option value="1982">1982 </option>
                        <option value="1981">1981 </option>
                        <option value="1980">1980 </option>
                        <option value="1979">1979 </option>
                        <option value="1978">1978 </option>
                        <option value="1977">1977 </option>
                        <option value="1976">1976 </option>
                        <option value="1975">1975 </option>
                        <option value="1974">1974 </option>
                        <option value="1973">1973 </option>
                        <option value="1972">1972 </option>
                        <option value="1971">1971 </option>
                        <option value="1970">1970 </option>
                        <option value="1969">1969 </option>
                        <option value="1968">1968 </option>
                        <option value="1967">1967 </option>
                        <option value="1966">1966 </option>
                        <option value="1965">1965 </option>
                        <option value="1964">1964 </option>
                        <option value="1963">1963 </option>
                        <option value="1962">1962 </option>
                        <option value="1961">1961 </option>
                        <option value="1960">1960 </option>
                        <option value="1959">1959 </option>
                        <option value="1958">1958 </option>
                        <option value="1957">1957 </option>
                        <option value="1956">1956 </option>
                        <option value="1955">1955 </option>
                        <option value="1954">1954 </option>
                        <option value="1953">1953 </option>
                        <option value="1952">1952 </option>
                        <option value="1951">1951 </option>
                        <option value="1950">1950 </option>
                        <option value="1949">1949 </option>
                        <option value="1948">1948 </option>
                        <option value="1947">1947 </option>
                        <option value="1946">1946 </option>
                        <option value="1945">1945 </option>
                        <option value="1944">1944 </option>
                        <option value="1943">1943 </option>
                        <option value="1942">1942 </option>
                        <option value="1941">Anterior a 1941 </option>
                      </select><br>
Código Postal:
                  <input

                        name="ZipCode" id="ZipCode" maxlength="5" value="" size="8px" type="text">
<br />
                    <input name="cd" value="si"  type="checkbox">
                    Acepto
                    los <a href="javascript:abrir('http://www.correodirect.com/datos/privacidad.htm')"
                        >Términos y Condiciones de Correodirect</a>
 <br />
                  <input name="envia" value="Enviar"  type="button" onClick="valida();"></form>
    <!--Fin registro correo direct-->


                                                
                                                
											</div>
										</div>
									</div>
								</section>

						</div>
					</div>

		<!-- Footer -->
			<footer id="footer" class="container">
				<div class="row 200%">
					<div class="12u">

						<!-- Contact -->
							<section>
        <h2 class="major"><span>Síguenos en Redes Sociales</span></h2>
        <ul class="contact">
          <li><a rel="nofollow" class="icon fa-facebook" href="http://www.facebook.com/ajedrezdetorneo"><span class="label">Facebook</span></a></li>
          <li><a rel="nofollow" class="icon fa-twitter" href="http://www.twitter.com/ajedrezdetorneo"><span class="label">Twitter</span></a></li>
          <li><a rel="nofollow" class="icon fa-google-plus" href="http://plus.google.com/+Ajedrezdetorneocom"><span class="label">Google+</span></a></li>
        </ul>
						</section>
					
					</div>
				</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; Ajedrez de Torneo. All rights reserved</li>
						</ul>
					</div>

			</footer>

	</body>
</html>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->