<script type="text/javascript">
  $(function()
  {
    $(document).on("click",".img_gallery",function()
    {
      img_url = $(this).attr("src");
      parent_wrap = $(this).parent().parent() ;
      qty_prod = parent_wrap.find(".qty_prod").val() ;
      //alert(img_url);
      img_name = img_url.split("/")[2];

      new_cover = '<div class="product_cover">'
      + '<img src="/attached_docs/product_docs/' + img_name + '"/></div>' ;
      parent_wrap.find(".product_cover").replaceWith(new_cover) ;

    })
  }) ; // document.ready
</script>
