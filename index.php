
<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="UTF-8">
	<title>App para sacar formulas de quimica</title>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<meta name="description" content="Valancea equaciones quimicas, encuentra masa empirica etc">
			<meta name="keywords" content="quimica, nivelar, equaciones quimicas, masa empirica, formula empirica">
    </head>
<body>
 <h1 align=CENTER >quimica grado 10º y 11º</h1> <br> 
 <hr>
  <i> <strong>ESCRIBE CUANTOS ELEMENTOS TIENE EL COMPUESTO A VALANCEAR</strong> </i> 
  <input type="button" value="1" name="b1" onclick="cp1()"> 
  <input type="button" value="2" name="b2"> 
  <input type="button" value="3" name="b3"> 
  <input type="button" value="4" name="b4"> 
  <input type="button" value="5" name="b5"> <br>
  
  <p id="lol"></p>
  <script> 
    function  cp1() {

      document.getElementById("lol").innerHTML = "aqui va un input o dos o tres pero no se como hacerlo pl ayuda plox" 
    }

   </script>
=======
<?php 
	$page_name = "Home";
	require 'Templates/header.php';
?>
	<div class="container">
		<div class="row">
			<form action="verification.php">
				<div class="col s12 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insert the chemical compound">
				</div>
				<input type="submit" class="waves-effect waves-light col s12 btn" value="FIND COMPOUND AND YOU CHARACTERISTICS">
			</form>
		</div>
	</div>
>>>>>>> 750e333f8912acc5d1952f1ff59a43f9db7f983e
</body>
</html>