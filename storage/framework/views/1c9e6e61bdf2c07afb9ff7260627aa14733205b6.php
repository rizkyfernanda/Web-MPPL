    
    <?php $__env->startSection('content'); ?>
    <br>
    <h3>Edit Maid</h3>
    <br>

    <?php $__currentLoopData = $maids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/agent/view-maids/edit/<?php echo e($maid->maid_id); ?>/delete">Delete maid</a>
    <br>

	<form action="/agent/view-maids/edit/update" method="post" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<table border="0">
			<tr>
				<th>id</th>
				<td>: <input type="text" name="id" value="<?php echo e($maid->maid_id); ?>"  required></td>
			</tr>
				<th>name</th>
				<td>: <input type="text" name="name" value="<?php echo e($maid->name); ?>"  required></td>
			</tr>
				<th>age</th>
				<td>: <input type="number" name="age" value="<?php echo e($maid->age); ?>"  required></td>
			</tr>
				<th>salary</th>
				<td>: <input type="number" name="salary" value="<?php echo e($maid->salary); ?>"  required></td>
			</tr>
				<th>married</th>
				<td>: <input type="checkbox" name="married" value="<?php echo e($maid->married); ?>"></td>
			</tr>				
				<th>settled</th>
				<td>: <input type="checkbox" name="settled" value="<?php echo e($maid->settled); ?>"></td>
			</tr>
				<th>religion</th>
				<td>: <input type="string" name="religion" value="<?php echo e($maid->religion); ?>"  required></td>
			</tr>
				<th>experienced years</th>
				<td>: <input type="number" name="exp_years" value="<?php echo e($maid->exp_years); ?>" required></td>
			</tr>
				<th>description</th>	
				<td>: <input type="text" name="description" value="<?php echo e($maid->description); ?>" required></td>
			</tr>
				<th>profile picture</th>	
				<td>: <input type="file" name="file" value="<?php echo e($maid->picture); ?>"></td>
			</tr>
				<th>abilities</th>
				<td>: <input type="text" name="abilities" value="<?php echo e($abilities); ?>"></td>		
			</tr>
				<th> </th>
				<td>*Seperate each ability with coma (,)</td>
			</tr>
				<th>preferences</th>
				<td>: <input type="text" name="preferences" value="<?php echo e($preferences); ?>"></td>		
			</tr>
				<th> </th>
				<td>*Seperate each preference with coma (,)</td>
	</table>
		<button type="submit">Update</button>
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/edit-maid.blade.php ENDPATH**/ ?>