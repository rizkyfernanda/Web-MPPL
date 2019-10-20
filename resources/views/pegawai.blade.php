<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>


	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/formulir"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>

		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/pegawai/view/id={{ $p->id }}">View</a>
				|
				<a href="/pegawai/edit/id={{ $p->id }}">Edit</a>
				|
				<a href="/pegawai/hapus/id={{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
		
	</table>
 
</body>
</html>
