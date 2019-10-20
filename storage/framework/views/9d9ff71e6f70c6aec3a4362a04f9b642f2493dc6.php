<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

	<p>Nama : <?php echo e($nama); ?> </p>

	<ul>
		<?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<li><?php echo e($m); ?></li>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</ul>
 
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/passingdata.blade.php ENDPATH**/ ?>