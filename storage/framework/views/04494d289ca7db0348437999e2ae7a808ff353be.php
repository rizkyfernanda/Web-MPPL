    
    <?php $__env->startSection('content'); ?>
        <br>
        <h3>All Maids</h3>
        <a href="/agent/view-maids/add"> + Add Maid</a>
        <br><br>
		<table border="1">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>salary</th>
				<th>married</th>				
				<th>settled</th>
				<th>religion</th>
				<th>experienced years</th>
				<th>description</th>
				<th>options</th>		
			</tr>
			<?php $__currentLoopData = $maids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($maid->maid_id); ?></td>
				<td><?php echo e($maid->name); ?></td>
				<td><?php echo e($maid->age); ?></td>
				<td><?php echo e($maid->salary); ?></td>
				<td><?php echo e($maid->married); ?></td>
				<td><?php echo e($maid->settled); ?></td>
				<td><?php echo e($maid->religion); ?></td>
				<td><?php echo e($maid->exp_years); ?></td>
				<td><?php echo e($maid->description); ?></td>
				<td>
				<a href="/agent/view-maids/edit/<?php echo e($maid->maid_id); ?>">Edit</a>
			</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/maids.blade.php ENDPATH**/ ?>