    
    <?php $__env->startSection('content'); ?>
        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br>

        <form action="/check-identity/search/" method="GET">
            <input type="search" name="search" placeholder="Check Identity"><br>
            <button type="submit" value="search">search</button>
        </form><br>

        <?php if(count($maids) === 1): ?>

            <?php $__currentLoopData = $maids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                Found!<br>
                ID: <?php echo e($maid->maid_id); ?><br>
                Name: <?php echo e($maid->name); ?><br>
                Picture: <img width="150px" src="<?php echo e(url('/pictures/'.$maid->picture)); ?>"><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>
           Not found. Make sure you fill in the correct ID
        <?php endif; ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/pages/searchIdentity.blade.php ENDPATH**/ ?>