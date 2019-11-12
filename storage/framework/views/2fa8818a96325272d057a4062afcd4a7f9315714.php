    
    <?php $__env->startSection('content'); ?>
        <br>
        <h3>agent dashboard</h3>
        <br>
        <button onclick="window.location.href = '/agent/view-users';">View Users</button><br><br>
        <button onclick="window.location.href = '/agent/view-maids';">View Maids</button><br><br>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/agent-pages/index.blade.php ENDPATH**/ ?>