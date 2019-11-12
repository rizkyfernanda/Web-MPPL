  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

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
        url : '{{URL::to('search')}}',
        data:{'search':$value},
        success:function(data){
        $('tbody').html(data);
      }

    });
  </script>

  <script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script>