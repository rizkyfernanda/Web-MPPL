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

		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->nama); ?></td>
			<td><?php echo e($p->jabatan); ?></td>
			<td><?php echo e($p->umur); ?></td>
			<td><?php echo e($p->alamat); ?></td>
			<td>
				<a href="/pegawai/view/id=<?php echo e($p->id); ?>">View</a>
				|
				<a href="/pegawai/edit/id=<?php echo e($p->id); ?>">Edit</a>
				|
				<a href="/pegawai/hapus/id=<?php echo e($p->id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</table>
 
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/pegawai.blade.php ENDPATH**/ ?>