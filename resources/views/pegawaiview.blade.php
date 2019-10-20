<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Pegawai</h3>

	@foreach($pegawai as $p)

		Nama : 
		{{ $p->nama }} <br>

		Jabatan : 
		{{ $p->jabatan }} <br>
		
		Umur :
		{{ $p->umur }} <br>
		
		Alamat :
		{{ $p->alamat }} <br>

	@endforeach

</body>
</html>