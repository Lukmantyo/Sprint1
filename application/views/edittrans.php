<!DOCTYPE html>
<html>
<head>
	<title>Edit Transportasi</title>
</head>
<body>
	<center>
		<h1>Edit Transportasi</h1>
		<h3>Edit Transportasi</h3>
	</center>
	<?php foreach($trans as $t){ ?>
	<form action="<?php echo base_url(). 'crud/updatetrans'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kode</td>
				<td><input type="text" name="kode" value="<?php echo $t->kode ?>"></td>
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
				<td><input type="submit" value="Ubah"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>