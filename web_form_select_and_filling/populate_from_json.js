      <script type="text/javascript">
        var itin_arr    = '%itin_arr%' ;
        var itin_obj = JSON.parse(itin_arr) ;
        
        // ----------------------------- INPUT NUMBER/TEXT -------------------------------
        if(itin_obj.hasOwnProperty('bride_name'))
          document.getElementById("bride_name").value = itin_obj.bride_name ;
          
        // ----------------------------- DIV ------------------------------------
        if(itin_obj.hasOwnProperty('name_cards'))
        {
          
          $("#name_cards span").each(function()
          {
            if ($(this).attr('value') == itin_obj.name_cards)
            {
              $(this).addClass("selected");
              $('<i class="fas fa-check"><i>').prependTo($(this)) ;
            }
          }) ;
        }
      
      
      </script>
