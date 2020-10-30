<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/pegawai/update" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($p->IdPegawai); ?>"> <br/>

        No KTP Pegawai <input type="number" required="required" name="ktp" value="<?php echo e($p->NoKTPPegawai); ?>"> <br/>
	    Nama Pegawai <input type="text" required="required" name="nama" value="<?php echo e($p->NamaPegawai); ?>"> <br/>
	    Jenis Kelamin Pegawai <input type="text" required="required" name="kelamin" value="<?php echo e($p->JenisKelaminPegawai); ?>"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
 
</body>
</html><?php /**PATH E:\XAMPP\htdocs\belajar_laravel\resources\views/edit.blade.php ENDPATH**/ ?>