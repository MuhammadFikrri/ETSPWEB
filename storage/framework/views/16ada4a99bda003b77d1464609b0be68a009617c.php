<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>

<body>
 
	<header>
 
		<h2>Blog MalasNgoding</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> <?php echo $__env->yieldContent('judul_halaman'); ?> </h3>
 
 
	<!-- bagian konten blog -->
	<?php echo $__env->yieldContent('konten'); ?>
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>
 
</body>
</html><?php /**PATH E:\XAMPP\htdocs\belajar_laravel\resources\views/master.blade.php ENDPATH**/ ?>