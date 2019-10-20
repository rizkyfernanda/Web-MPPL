<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<form action="/pegawai/update" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($p->id); ?>"> <br/>
		Nama <input type="text" required="required" name="nama" value="<?php echo e($p->nama); ?>"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="<?php echo e($p->jabatan); ?>"> <br/>
		Umur <input type="number" required="required" name="umur" value="<?php echo e($p->umur); ?>"> <br/>
		Alamat <textarea required="required" name="alamat"><?php echo e($p->alamat); ?></textarea> <br/>
		<input type="submit" value="Update Data">
	</form>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/editPegawai.blade.php ENDPATH**/ ?>