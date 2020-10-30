<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>No KTP Pegawai</th>
			<th>Nama Pegawai</th>
			<th>Jenis Kelamin Pegawai</th>
			<th>Opsi</th>
		</tr>

		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<tr>
			<td><?php echo e($p->NoKTPPegawai); ?></td>
			<td><?php echo e($p->NamaPegawai); ?></td>
			<td><?php echo e($p->JenisKelaminPegawai); ?></td>
			<td>
				<a href="/pegawai/edit/<?php echo e($p->IdPegawai); ?>">Edit</a>
				|
				<a href="/pegawai/hapus/<?php echo e($p->IdPegawai); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 
</body>
</html><?php /**PATH E:\XAMPP\htdocs\belajar_laravel\resources\views/index.blade.php ENDPATH**/ ?>