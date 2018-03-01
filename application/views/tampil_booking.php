<html>
<head>
	<title>Tiket Pesawat</title>
</head>
<body>
	<center><h1>Daftar Pemesanan</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
			<th>Jumlah</th>
			<th>Rute</th>
			<th>Tanggal</th>
			<th>Action</th>
		</tr>
		<?php 
		$id = 1;
		foreach($customer as $c){ 
			?>
			<tr>
				<td><?php echo $id++ ?></td>
				<td><?php echo $c->name ?></td>
				<td><?php echo $c->address ?></td>
				<td><?php echo $c->phone ?></td>
				<td><?php echo $c->jumlah ?></td>
				<td><?php echo $c->rute ?></td>
				<td><?php echo $c->tanggal ?></td>
				<td>
					<?php echo anchor('index.php/crud/edit/'.$c->id,'Edit'); ?>
					<?php echo anchor('index.php/crud/hapus/'.$c->id,'Hapus'); ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
	</html>