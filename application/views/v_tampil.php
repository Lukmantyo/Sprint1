<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center><h1>CRUD</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Fullname</th>
			<th>Level</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $u->id++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('index.php/crud/edit/','Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>