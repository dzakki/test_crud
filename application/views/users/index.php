<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table table-bordered table-sm"  cellspacing="0">
		<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Username</th>
				<th>Nama</th>
				<th>Kelamin</th>
				<th>Kantor</th>
				<th>Group</th>
				<th>Email</th>
				<th>Nama Atasan</th>
				<th>Email Atasan</th>
				<th>opsi</th>
			</tr>
		</thead>
		<?php $no = 1; ?>
		<?php foreach ($users as $user_item): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $user_item['nik'] ?></td>
				<td><?= $user_item['username'] ?></td>
				<td><?= $user_item['nama_lengkap'] ?></td>
				<td><?= $user_item['jenis_kelamin'] ?></td>
				<td><?= $user_item['kantor'] ?></td>
				<td><?= $user_item['group_user'] ?></td>
				<td><?= $user_item['email'] ?></td>
				<td><?= $user_item['nama_atasan'] ?></td>
				<td><?= $user_item['email_atasan'] ?></td>
				<td> <a href='user/<?=  $user_item['id'] ?>' class="btn btn-primary btn-sm">  update</a> <a href='delete/<?=  $user_item['id'] ?>' class="btn btn-danger btn-sm">  delete</a> </td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>