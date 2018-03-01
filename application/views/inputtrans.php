<!DOCTYPE html>
<html>
<head>
	<title>Input Transportasi</title>
</head>
<body>
	<center>
		<h1>Input Transportasi</h1>
		<h3>Tambah transportasi baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/inputtrans'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kode</td>
				<td><input type="text" name="code" value="<?php echo $t->code ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="description" value="<?php echo $t->description ?>"></td>
			</tr>
			<tr>
				<td>Kuantitas Krusi</td>
				<td><input type="text" name="seat_qty" value="<?php echo $t->seat_qty ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>