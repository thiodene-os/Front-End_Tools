# At the bottom of your HTML page put this for the plugin to take effect:

<script type="text/javascript" src="/plugin/product_zoom/smoothproducts.min.js"></script>
<script type="text/javascript">
  /* wait for images to load */
  $(window).load( function() 
  {
    $('.sp_wrap').smoothproducts();
  });
</script>
