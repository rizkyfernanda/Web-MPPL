    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush">

      <div class="row my-3 mx-1">

          <div class="col-5 my-auto">
            <img class="user-pic w-100" style="border-radius: 12px;" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="">
          </div>

          <div class="col-7 pl-0 my-auto">
          <?php if(auth()->guard()->guest()): ?>
              You're here as guest<br>
              <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a><br>

          <?php else: ?>
              Welcome<span>
              <b><?php echo e(Auth::user()->name); ?></span></b>
          <?php endif; ?>
          </div>
      </div>
      
      </div>

        <a href="#" class="list-group-item list-group-item-action bg-light">Favorites</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Saved</a>
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
        <a class="list-group-item list-group-item-action bg-light" href="<?php echo e(route('logout')); ?>"
                    onclick="
                    event.preventDefault();
                             document.getElementById('logout-form').submit();
                    ">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                    </form>
        <?php endif; ?>

      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="navbar-toggler" id="menu-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      
        <a href="/"><img id="logo" src="image/logo.jpeg"/></a>

        <!-- <button class="navbar-toggler" type="button"> 
          <span class="bell-icon"></span>
        </button>   -->
        <button class="navbar-toggler" type="button"  >
          <span class="navbar-toggler-icon" id="bell"></span>
         </button> 

      </nav><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/includes/page-content-wrapper.blade.php ENDPATH**/ ?>