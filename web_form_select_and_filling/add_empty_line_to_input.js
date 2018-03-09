<script type="text/javascript">
  $(function()
  {
    // ****************** Add Line for Multi Line Input ****************
    $(".itin_mline_wrap .add_line").click(function()
    {
      addEmptyLineToMultiLine($(this)) ;
    }) ;

    // Add initial empty lines to each multi-line input
    $(".itin_mline_wrap").each(function()
    {
      empty_lines = $(this).attr("empty_lines") ; 
      add_button = $(this).find(".add_line") ;
      for (i = 0 ; i < empty_lines ; i++)
        addEmptyLineToMultiLine(add_button) ;            
    }) ;
  }) ; // document.ready

  // Adds a new empty line to a multi-line input
  function addEmptyLineToMultiLine(add_button)
  {
    // Copy the hidden one and append it to the parent div
    parent_wrap = add_button.closest(".itin_mline_wrap") ;
    new_line = '<p>' + parent_wrap.find(".hidden_line").html() + '</p>' ;
    add_button.before(new_line) ;
  } // addEmptyLineToMultiLine 
</script> 
