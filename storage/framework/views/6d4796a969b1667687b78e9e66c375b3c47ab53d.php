    
    <?php $__env->startSection('content'); ?>

        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br><br>

        <form action="/check-identity/search" method="GET">
            <input class="form-control" type="search" name="search" placeholder="Check Identity"><br>
            <button class="btn search-step text-center float-center" type="submit" value="search">search</button>
        </form><br>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/pages/checkIdentity.blade.php ENDPATH**/ ?>