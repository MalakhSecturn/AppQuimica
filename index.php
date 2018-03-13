<?php 
	$page_name = "Home";
	require 'Templates/header.php';
?>
	<div class="container">
		<header>
			<h1 class="center-align">Quimica Grado 10° y 11°</h1>
		</header>
	</div>
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
	<script> 
	function  cp1() {

	  document.getElementById("lol").innerHTML = "aqui va un input o dos o tres pero no se como hacerlo pl ayuda plox";
	}

	</script>
</body>
</html>