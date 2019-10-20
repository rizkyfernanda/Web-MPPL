<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.mlasngoding.com</title>
</head>
<body>

	<form action="/pegawai/formulir/proses" method="post">

		{{ csrf_field() }}

		<input type="hidden" name="id""> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required" > <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
 
 	</form>

</body>
</html>