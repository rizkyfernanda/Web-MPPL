    
    <?php $__env->startSection('content'); ?>
        <br>
        <h3>Register</h3>
        <br>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button>Register</button><br>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/pages/customerRegister.blade.php ENDPATH**/ ?>