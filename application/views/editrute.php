<!DOCTYPE html>
<html>
<head>
	<title>Edit Rute</title>
</head>
<body>
	<center>
		<h1>Edit Rute</h1>
		<h3>Edit rute baru</h3>
	</center>
	<?php foreach($rute as $r){ ?>
	<form action="<?php echo base_url(). 'crud/updaterute'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Waktu Keberangkatan</td>
				<td><input type="text" name="depart_at" value="<?php echo $r->depart_at ?>"><input type="hidden" value="<?php echo $r->id ?>" name="id"></td>
			</tr>
			<tr>
				<td>Waktu Sampai</td>
				<td><input type="text" name="arrival_at" value="<?php echo $r->arrival_at ?>"></td>
			</tr>
			<tr>
				<td>Rute Dari</td>
				<td><input type="text" name="rute_from" value="<?php echo $r->rute_from ?>"></td>
			</tr>
			<tr>
				<td>Rute Menuju</td>
				<td><input type="text" name="rute_to" value="<?php echo $r->rute_to ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="price" value="<?php echo $r->price ?>"></td>
			</tr>
			<tr>
				<td>Id Transportasi</td>
				<td><input type="text" name="transportation_id" value="<?php echo $r->transportation_id ?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" name="date" value="<?php echo $r->date ?>"></td>
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