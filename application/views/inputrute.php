<!DOCTYPE html>
<html>
<head>
	<title>Input Rute</title>
</head>
<body>
	<center>
		<h1>Input Rute</h1>
		<h3>Tambah rute baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_rute'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Waktu Keberangkatan</td>
				<td><input type="time" name="depart_at"></td>
			</tr>
			<tr>
				<td>Waktu Sampai</td>
				<td><input type="time" name="arrival_at"></td>
			</tr>
			<tr>
				<td>Rute Dari</td>
				<td><input type="text" name="rute_from"></td>
			</tr>
			<tr>
				<td>Rute Menuju</td>
				<td><input type="text" name="rute_to"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Id Transportasi</td>
				<td><input type="text" name="transportation_id"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>