<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	@foreach($pegawai as $p)

	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
		<input type="submit" value="Update Data">
	</form>

	@endforeach

</body>
</html>