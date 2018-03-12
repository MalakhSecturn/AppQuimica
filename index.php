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
</body>
</html>