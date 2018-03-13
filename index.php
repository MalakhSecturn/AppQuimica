<?php 
	$page_name = "Home";
	require 'Templates/header.php';
?>
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
</body>
</html>