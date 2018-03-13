<?php 
	$page_name = "Home";
	require 'Templates/header.php';
?>
	<div class="container">
		<header>
			<h1 class="center-align">Quimica Grado 10° y 11°</h1>
		</header>
		<div class="row">
			<div class="col s6">
				<h5 class="center-align">Deseas agregar mas elementos</h5>
				<button class="btn-floating btn-large waves-effect waves-light red">+</button>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<form action="verification.php">
				<div class="col s12 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<input type="submit" class="waves-effect waves-light col s12 btn" value="MOSTRAR ECUACIONES">
			</form>
		</div>
	</div>
	<script> 
	function  cp1() {

	  document.getElementById("lol").innerHTML = "aqui va un input o dos o tres pero no se como hacerlo pl ayuda plox";
	}

	</script>
</body>
</html>