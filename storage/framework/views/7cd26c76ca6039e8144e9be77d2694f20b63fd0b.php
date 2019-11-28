    
    <?php $__env->startSection('content'); ?>
        <br><br>
        <h3>All Users</h3>
        <br><br>
		<table border="1">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Type</th>
			</tr>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($user->name); ?></td>
				<td><?php echo e($user->email); ?></td>
				<td><?php echo e($user->type); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/users.blade.php ENDPATH**/ ?>