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
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->IdPegawai }}"> <br/>

        No KTP Pegawai <input type="number" required="required" name="ktp" value="{{ $p->NoKTPPegawai }}"> <br/>
	    Nama Pegawai <input type="text" required="required" name="nama" value="{{ $p->NamaPegawai }}"> <br/>
	    Jenis Kelamin Pegawai <input type="text" required="required" name="kelamin" value="{{ $p->JenisKelaminPegawai }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>