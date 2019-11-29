    
    <?php $__env->startSection('content'); ?>
        <br>
        <h3>All Maids</h3>
        <a href="/agent/view-maids/add"> + Add Maid</a>
        <br><br>
		
		<p>Search for maids :</p>
		<form action="/agent/view-maids" method="GET">
			<table border="0">
				</tr>
					<th>Name</th>
					<td> : <input type="text" name="name" placeholder="Name .." value="<?php echo e($request['name']); ?>"> </td>
				</tr>
					<th>Experience</th>
					<td> : 
						<input type="number" name="min_exp_years" placeholder="Minimum experience .." value="<?php echo e($request['min_exp_years']); ?>">
						up to <input type="number" name="max_exp_years" placeholder="Maximum experience .." value="<?php echo e($request['max_exp_years']); ?>">
					</td>
				</tr>
					<th>Age</th>
					<td> : 
						<input type="number" name="min_age" placeholder="Minimum age .." value="<?php echo e($request['min_age']); ?>">
						up to <input type="number" name="max_age" placeholder="Maximum age .." value="<?php echo e($request['max_age']); ?>">
					</td>
				</tr>
					<th>Salary</th>
					<td> : 
						<input type="number" name="min_salary" placeholder="Minimum salary .." value="<?php echo e($request['min_salary']); ?>">
						up to <input type="number" name="max_salary" placeholder="Maximum salary .." value="<?php echo e($request['max_salary']); ?>">
					</td>
				</tr>
					<th>Married</th>
						<td>: 
							<input type="radio" name="married" value="1" <?php echo e(($request->married == '0') ? 'checked' : ''); ?>> Yes
							<input type="radio" name="married" value="0" <?php echo e(($request->married == '1') ? 'checked' : ''); ?>> No
							<input type="radio" name="married" value="-1" <?php echo e(($request->married == '-1') ? 'checked' : ''); ?>> Not Important
						</td>
				</tr>
					<th>Settled</th>
						<td>: 
							<input type="radio" name="settled" value="1" <?php echo e(($request->settled == '0') ? 'checked' : ''); ?>> Yes
							<input type="radio" name="settled" value="0" <?php echo e(($request->settled == '1') ? 'checked' : ''); ?>> No
							<input type="radio" name="settled" value="-1" <?php echo e(($request->settled == '-1') ? 'checked' : ''); ?>> Not Important
						</td>
				</tr>
					<th>abilities</th>
					<td>: <input type="text" name="abilities" value="<?php echo e($request['abilities']); ?>"></td>		
				</tr>
					<th> </th>
					<td>*Seperate each ability with coma (,)</td>
				</tr>
					<th>preferences</th>
					<td>: <input type="text" name="preferences" value="<?php echo e($request['preferences']); ?>"></td>		
				</tr>
					<th> </th>
					<td>*Seperate each preference with coma (,)</td>
				
				</table>
			<input type="submit" value="SEARCH">
		</form>
		<br />
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
				<th>abilities</th>
				<th>preferences</th>
				<th>description</th>
				<th>picture</th>
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
				<td><?php echo e($maid->abilities); ?></td>
				<td><?php echo e($maid->preferences); ?></td>
				<td><?php echo e($maid->description); ?></td>
				<td><a href="<?php echo e(url('/pictures/'.$maid->picture)); ?>">
					<?php echo e($maid->picture); ?></a></td>
				<td><a href="/agent/view-maids/edit/<?php echo e($maid->maid_id); ?>">Edit</a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/maids.blade.php ENDPATH**/ ?>