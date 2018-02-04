<script type="text/javascript">
$(function()
{
  // When user clicks on the suggestions it shows a list with respect to chosen warehouse
  $(".latest_header").click(function()
  {
	// First close all
	$(".latest_wrap").slideUp(300) ;
	
	// If already closed, open it, otherwise close it
	latest_wrap = $(this).next(".latest_wrap") ;
	if (latest_wrap.css("display") == "none") 
	{
	  latest_wrap.slideDown(300) ;
	  $(".show_latest").attr("src","../images/arrow_up.png") ;
	}
	else
	{            
	  latest_wrap.slideUp(300) ;
	  $(".show_latest").attr("src","../images/arrow_down.png") ;
	}
  }) ;
}) ; // document.ready
</script>
