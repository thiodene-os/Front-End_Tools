# PHP

// Get the JSON array and transform it to javascript
$itin_values_json = lookupColumnById("ITINERARY","UID",$itin_id,"ITIN_VALUES_JSON") ;
$itin_json = '' ;
if (! empty($itin_values_json))
{
  // If JSON values decode to Javascript to populate the input fields
  $itin_json = $itin_values_json ;
  $itin_json = str_replace("\n", "", $itin_json) ;
}
$params['itin_json'] = $itin_json ;

# Javascript / Jquery


<script type="text/javascript">
  var itin_json    = '%itin_json%' ;
  var itin_obj = JSON.parse(itin_json) ;

  console.log(itin_obj) ; // debug alert

  // Parse the JSON and go through all the page options
  $("[azbd_type]").each(function()
  {
    azbd_type = $(this).attr("azbd_type") ;

    // Go Through all the Input and options in the page and populate where applicable
    // With respect to the type of the option

    if (azbd_type == "text" || azbd_type == "number" || azbd_type == "email")
    {
      id = $(this).attr("id") ;
      if(itin_obj.hasOwnProperty(id))
        $(this).val(itin_obj[id]) ;
    }
    if (azbd_type == "date")
    {
      id = $(this).attr("id") ;
      if(itin_obj.hasOwnProperty(id))
        document.getElementById(id).value = itin_obj[id] ;
    }

    if (azbd_type == "time")
    {
      id = $(this).attr("id") ;
      if(itin_obj.hasOwnProperty(id))
        document.getElementById(id).value = itin_obj[id] ;
    }

    if (azbd_type == "phone")
    {
      id = $(this).attr("id") ;
      if(itin_obj.hasOwnProperty(id))
        document.getElementById(id).value = itin_obj[id] ;
    }

    if (azbd_type == "multi_option")
    {
      id = $(this).attr("id") ;
      if(itin_obj.hasOwnProperty(id))
        document.getElementById(id).value = itin_obj[id] ;
    }

  }) ;



</script>
