<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Pegawai</h3>

	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		Nama : 
		<?php echo e($p->nama); ?> <br>

		Jabatan : 
		<?php echo e($p->jabatan); ?> <br>
		
		Umur :
		<?php echo e($p->umur); ?> <br>
		
		Alamat :
		<?php echo e($p->alamat); ?> <br>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/pegawaiview.blade.php ENDPATH**/ ?>