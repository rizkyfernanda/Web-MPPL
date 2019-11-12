  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!---------------------------- Menu Toggle Script -------------------------------->
  <script>
    $("#menu-toggle").click(function(e) 
    {

      e.preventDefault();
      $("#wrapper").toggleClass("toggled");

    });
  </script>

  <!-------------------------- Ajax Live Search Script ----------------------------->
  <script type="text/javascript">
    $('#search').on('keyup', function() 
    {

      $value = $(this).val();
      $.ajax(
      {
        type : 'get',
        url : '<?php echo e(URL::to('search')); ?>',
        data:{'search':$value},
        success:function(data){
        $('tbody').html(data);
      }

    });
  </script>

  <script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
  </script><?php /**PATH C:\xampp\htdocs\Web MPPL\resources\views/includes/page-scripts.blade.php ENDPATH**/ ?>