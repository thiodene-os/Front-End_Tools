<script type="text/javascript">
  $(function()
  {
    // Automatically add a number to each h1 to separate the sections
    section_num = 1 ;
    $("#itin_wrap h1").each(function()
    {
      new_title = '<span class="section_num">' + section_num + '</span> ' + $(this).html() 
      + '<span class="arrow_down"><i class="fa fa-angle-double-down fa-2x"></i></span>'
      + '<span class="arrow_up"><i class="fa fa-angle-double-up fa-2x"></i></span>';
      $(this).html(new_title) ;
      section_num++ ;

      // Also add a hr after it
      $(this).after("<hr />") ;
    }) ;

  }) ; // document.ready
</script>
