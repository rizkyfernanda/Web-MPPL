    <!doctype html>
    <html>

    <head>
       <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>

    <!-- Wrapper -->
    <div class="d-flex" id="wrapper">

      <!-- Page Content Navigation and Sidebar -->
      <?php echo $__env->make('includes.page-content-wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Content -->
      <div class="container-fluid">
        <?php echo $__env->yieldContent('content'); ?>
      </div>

    </div>
    </div>

    <!-- Scripts -->
    <?php echo $__env->make('includes.page-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
    </html><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/layouts/default.blade.php ENDPATH**/ ?>