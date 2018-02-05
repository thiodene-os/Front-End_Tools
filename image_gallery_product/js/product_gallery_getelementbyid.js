<script type="text/javascript">
  $(function()
  {
    $(document).on("click",".img_gallery",function()
    {
      img_url = $(this).attr("src");
      parent_wrap = $(this).parent().parent() ;
      qty_prod = parent_wrap.find(".qty_prod").val() ;
      img_name = img_url.split("/")[2];

      var edit_save = document.getElementById("cover_image");
      edit_save.src = '/attached_docs/product_docs/' + img_name ;

    })
  }) ; // document.ready
</script>
