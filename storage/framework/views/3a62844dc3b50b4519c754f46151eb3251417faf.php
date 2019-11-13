    
    <?php $__env->startSection('content'); ?>
    <h3>Add Maid</h3>
    <br>
	<form action="/agent/view-maids/add/store" method="post" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<table border="0">
			<tr>
				<th>id</th>
				<td>: <input type="text" name="id"></td>
			</tr>
				<th>name</th>
				<td>: <input type="text" name="name"></td>
			</tr>
				<th>age</th>
				<td>: <input type="number" name="age"></td>
			</tr>
				<th>salary</th>
				<td>: <input type="number" name="salary"></td>
			</tr>
				<th>married</th>
				<td>: <input type="checkbox" name="married" value="1"></td>
			</tr>				
				<th>settled</th>
				<td>: <input type="checkbox" name="settled" value="1"></td>
			</tr>
				<th>religion</th>
				<td>: <input type="string" name="religion"></td>
			</tr>
				<th>experienced years</th>
				<td>: <input type="number" name="exp_years"></td>
			</tr>
				<th>description</th>	
				<td>: <input type="text" name="description"></td>
			</tr>
			</tr>
				<th>profile picture</th>	
				<td>: <input type="file" name="picture"></td>
			</tr>
		</table>
		<button type="submit">Submit</button>
	</form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/add-maid.blade.php ENDPATH**/ ?>