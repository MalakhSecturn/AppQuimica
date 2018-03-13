<?php 
	$page_name = "Home";
	require 'Templates/header.php';
?>
	<div class="container">
		<header>
			<h1 class="center-align">Quimica Grado 10° y 11°</h1>
		</header>
		<div class="row">
			<div class="col s12">
				<h5 class="center-align">Deseas agregar mas elementos <button class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></button></h5>
				
			</div>
		</div>
	</div>
	<div class="container">
		<form action="verification.php">
			<!-- ELEMENTO DEL COMPUESTO -->
			<div class="row">
				<div class="col s1"></div>
				<div class="col s5 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<div class="col s5 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<div class="col s1"></div>
			</div>
			<!-- FIN DEL ELEMENTO -->
			<!-- ELEMENTO DEL COMPUESTO -->
			<div class="row">
				<div class="col s1"></div>
				<div class="col s5 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<div class="col s5 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<div class="col s1"></div>
			</div>
			<!-- FIN DEL ELEMENTO -->
			<!-- ELEMENTO DEL COMPUESTO -->
			<div class="row">
				<div class="col s1"></div>
				<div class="col s5 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<div class="col s5 input-field">
					<input type="text" class="validate" name="insert_compound" id="insert_compound" placeholder="Insertar compuesto">
				</div>
				<div class="col s1"></div>
			</div>
			<!-- FIN DEL ELEMENTO -->
			<div class="row">
				<div class="col s1"></div>
				<input type="submit" class="waves-effect waves-light col s10 btn" value="MOSTRAR ECUACIONES">
				<div class="col s1"></div>
			</div>
		</form>
	</div>
	<script> 
	function  cp1() {

	  document.getElementById("lol").innerHTML = "aqui va un input o dos o tres pero no se como hacerlo pl ayuda plox";
	}

	</script>
</body>
</html>