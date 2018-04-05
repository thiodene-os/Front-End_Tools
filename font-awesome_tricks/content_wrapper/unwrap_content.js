<script type="text/javascript">
  $(function()
  {
    // When user clicks on an option header (H1) it shows the wrapped content
    $(".itin_option_header").click(function()
    {
      // First close all wrapped contents
      $(".itin_option_wrap").slideUp(300) ;
      // If already closed, open it, otherwise close it
      itin_option_wrap = $(this).next(".itin_option_wrap") ;
      if (itin_option_wrap.css("display") == "none") 
      {
        itin_option_wrap.slideDown(300) ;
        $(this).find(".arrow_up").show() ;
        $(this).find(".arrow_down").hide() ;
      }
      else
      {            
        itin_option_wrap.slideUp(300) ;
        $(this).find(".arrow_down").show() ;
        $(this).find(".arrow_up").hide() ;
      }
    }) ;
  }) ; // document.ready
</script>
