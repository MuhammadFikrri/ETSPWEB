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

		@foreach($pegawai as $p)

		<tr>
			<td>{{ $p->NoKTPPegawai }}</td>
			<td>{{ $p->NamaPegawai }}</td>
			<td>{{ $p->JenisKelaminPegawai }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->IdPegawai }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->IdPegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>