<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		No KTP Pegawai <input type="number" name="ktp" required="required"> <br/>
		Nama Pegawai <input type="text" name="nama" required="required"> <br/>
		Jenis Kelamin Pegawai <input type="text" name="kelamin" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>