<script type="text/javascript">
  $(function()
  {
    // Handle the user infrmation, saves the Itinerary ino a JSON string
    $(".btn_save_itinerary").click(function()
    {
      // Confirm sending this message
      if (! confirm("Do you want to save this Itinerary?"))
        return false ;

      // Stop the Save loop if any error!
      var no_error = true ;

      // JSON empty string
      info = '' ;

      // Loop through all inputs where user can enter or select data, create a json string and
      // save them
      $("[azbd_type]").each(function()
      {
        azbd_type = $(this).attr("azbd_type") ;

        // Put the id of the input as name and value as value. This way when we read it back
        // we can show the value inside of that id

        id = $(this).attr("id") ;
        if (azbd_type == "text" || azbd_type == "number"
              || azbd_type == "date")
        {
          // For Inputs check if it has a value entered
          // If so, save it with the attached id
          value = $.trim($(this).val()) ;
          if (value != "")
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            value = xmlbEncodeForAJAX(value) ;
            info += "\n" + '  "' + id + '": "' + value + '"'  ;
          }
        }
        else if (azbd_type == "email")
        {
          // For Inputs check if it has a value entered
          // If so, save it with the attached id
          value = $.trim($(this).val()) ;
          if (value != "")
          {
            // Validate the Email added by users from input
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            if(!value.match(mailformat))
            {
              alert("You have entered an invalid email address!") ;
              no_error = false ;
              return false ;
            }
            else
            {
              info = addCommaToEndOfNonEmptyString(info) ;
              value = xmlbEncodeForAJAX(value) ;
              info += "\n" + '  "' + id + '": "' + value + '"'  ;
            }
          }
        }
        else if (azbd_type == "time")
        {
          // For Hour and Minute input get the values
          // and group them together for one single value of time
          time_hour = $(this).find('.time_hour').val();
          time_minute = $(this).find('.time_minute').val();

          if (time_hour != "~def_show_on_no_value~" && time_minute != "~def_show_on_no_value~")
          {
            value = time_hour + ':' + time_minute + ':00' ;
            info = addCommaToEndOfNonEmptyString(info) ;
            value = xmlbEncodeForAJAX(value) ;
            info += "\n" + '  "' + id + '": "' + value + '"'  ;
          }

        }
        else if (azbd_type == "phone")
        {
          // For Inputs check if it has a value entered
          // If so, save it with the attached id
          value = $.trim($(this).val()) ;
          // Remove non-numeric Characters from Dynamic Phone Input
          value = value.replace("(", "");
          value = value.replace(")", "");
          value = value.replace(" ", "");
          value = value.replace("-", "");
          if (value != "")
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            value = xmlbEncodeForAJAX(value) ;
            info += "\n" + '  "' + id + '": "' + value + '"'  ;
          }
        }
        else if (azbd_type == "multi_option" || azbd_type == "yes_no")
        {
          // For multi_option we look for spans that have the selected class
          // then save the id of that selected span
          if ($("#" + id + " span").hasClass("selected"))
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "' + id + '": "' + $("#" + id).find("span.selected").attr("value") + '"'  ;
          }
        }
        else if (azbd_type == "drop_down")
        {
          // For Hour and Minute input get the values
          // and group them together for one single value of time
          value = $.trim($(this).val()) ;

          if (value != "~def_show_on_no_value~")
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            value = xmlbEncodeForAJAX(value) ;
            info += "\n" + '  "' + id + '": "' + value + '"'  ;
          }

        }
        else if (azbd_type == "multi_line")
        {
          // For multiline we have a p that has class hidden_line. This line is used
          // to copy and add new empty lines, so we need to ignore it here
          // Loop through all the other p tags and add them to the result
          multi_line_val = '' ;
          $(this).find("p").each(function()
          {
            if ($(this).hasClass("hidden_line")) // Ignore this one
              return ; // like continue

            // Find the entered value and add to result if not empty
            val = $.trim($(this).find("input").val()) ;
            if (val.length > 0)
            {
              multi_line_val = addCommaToEndOfNonEmptyString(multi_line_val) ;
              multi_line_val += '"' + xmlbEncodeForAJAX(val) + '"' ;
            }
          }) ;

          // If user has entered anything, then add to final result as a json array
          if (multi_line_val != '')
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "' + id + '": [' + multi_line_val + ']' ;
          }
        }
      }) ;

      // Finish the JSON String and run the SQL Update
      if (info.length > 0 && no_error)
      {
        info = '{' + info + "\n" + '}' ;

        prog =  '$do_record = new doRecord("ITINERARY") ;'
        + "\n" + '$new_rec = array() ;'
        + "\n" + '$new_rec[\'LNK_EVENT\'] = ' + %event_id% + ' ;'
        + "\n" + '$new_rec[\'ITIN_VALUES_JSON\'] = xmlbDecodeFromAJAX(\'' + info + '\') ;'
        + "\n" + '$do_record -> new_record = $new_rec ;'
        + "\n" + '$do_record -> id_column_val = ' + %itin_id% + ' ;'
        + "\n" + 'if (! $do_record -> update()) '
        + "\n" + '{ '
        + "\n" + '  debug(getGlobalMsg(),"getGlobalMsg","File: " . __FILE__ . " Line: " . __LINE__) ;'
        + "\n" + '  return Null ; '
        + "\n" + '} '
        + "\n" + 'unset($new_rec) ;'
        + "\n" + 'unset($do_record) ;'
        + "\n" + '$prog_result = "doAfterItineraryOptionsSaved(\" . %event_id% . \")" ; ' ;

        console.log("prog: " + prog) ; // debug alert

        runBackEndProg(prog) ; 

      }
      else
        return false ;

    });

  }) ;

  // Adds comma to non-empty string
  function addCommaToEndOfNonEmptyString(info)
  {
    // For a string to pass to JSON add the comma before adding any new parameter
    if (info.length > 0)
      info = info + ',' ;
    return info ;
  } // addCommaToEndOfNonEmptyString

  function doAfterItineraryOptionsSaved()
  {
    //window.location.assign( '%redirect_after_saving%');
    // After saving the Itinerary just reload the page for now
    location.reload() ;

  } // doAfterItineraryOptionsSaved  

</script>
