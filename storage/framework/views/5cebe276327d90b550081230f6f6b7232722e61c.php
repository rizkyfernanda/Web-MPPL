    
    <?php $__env->startSection('content'); ?>
        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br><br>

        <form action="/check-identity/search" method="GET">
            <input class="form-control" type="search" name="search" placeholder="Check Identity"><br>
            <button class="btn search-step text-center float-center" type="submit" value="search">search</button>
        </form><br>


        <?php if(count($maids) === 1): ?>
            <h5 class="text-center font-weight-bold link m-0">Found!</div><br>

            <?php $__currentLoopData = $maids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mx-5 text-center float-center rounded">

                    <div class="card-body">
                        <img class="float-center mx-auto w-75" src="<?php echo e(url('/pictures/'.$maid->picture)); ?>">
                        <h5 class="card-title pt-2"> <?php echo e($maid->name); ?></h5>
                        <div class="card-body m-0 p-0">
                            ID: <?php echo e($maid->maid_id); ?><br>
                            <a class="link" href="#"><u>Read Profile</u></a>
                        </div>
                    </div>
                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <br><div class="text-center mx-3">This candidate has <b class="link2"> no harmful background.</b> We recommend you to take a look into her background.</div>

        <?php else: ?>
           <div class="text-center">Not found. Make sure you fill in the correct ID</div><br>
        <?php endif; ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/pages/searchIdentity.blade.php ENDPATH**/ ?>