<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="">
	<fieldset>
		<legend>Ticket Online</legend>
		<?php
			for ($i=0; $i < $_POST['Jumlah'] ; $i++) { 
				echo "Nama Penumpang <input type='text' name='nama[]'><br>";
			}

		?>

	</fieldset>

	<input type="submit" name="submit" value="submit">
	

</form>


</body>
</html>
