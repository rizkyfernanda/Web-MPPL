    
    <?php $__env->startSection('content'); ?>
    <?php $__env->startPush('styles'); ?>
        <link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet">
    <?php $__env->stopPush(); ?>
 		<br><br>
    	<h3 class="text-center">Dashboard</h3>
    	<br><br>

        <div class="row">
                <div class="col-12 first-row" onclick="window.location.href = '/agent/view-users';">
                    <img  src="image/ktp.jpeg"/>
                    <div class="content">
                        <strong>View Users</strong>
                    </div>
                </div>
                <div class="col-12 first-row" onclick="window.location.href = '/agent/view-maids';">
                    <img  src="image/housekeepr.jpeg"/>
                    <div class="content">
                        <strong>View Maids</strong>
                    </div>
                </div>
            </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/index.blade.php ENDPATH**/ ?>