<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="tiket1.php">
<fieldset>
	<legend>Ticket Online</legend>
	<table>
	<tr>
		<td>Tujuan</td>
		<td><input list="tujuan" name="Tujuan" value="">
		<datalist id="tujuan">
			<option value="Jakarta - Bandung">
			<option value="Jakarta - Surabaya">
			<option value="Jakarta - Yogyakarta">
			<option value="Bandung - Surabaya">
			<option value="Yogyakarta - Bandung">		
		</datalist>
		</td>

	</tr>
	<tr>
		<td>Jam Keberangkatan</td>
		<td><input type="radio" name="Jam" value="08.00">08:00
			<input type="radio" name="Jam" value="09.00">09:00
			<input type="radio" name="Jam" value="10.00">10:00
			</td>
	</tr>
	<tr>
		<td>Jumlah Penumpang</td>
		<td><input type="number" name="Jumlah" value=""></td>
	</tr>
	</table>
	<input type="submit" value="Submit" name="Next">
	<input type="reset" value="Reset" name="Reset">

	
</fieldset>
	
</form>



</body>
</html>