// Parse the JSON and go through all the page options
$("[azbd_type]").each(function()
{
  azbd_type = $(this).attr("azbd_type") ;

  // Go Through all the Input and options in the page and populate where applicable
  // With respect to the type of the option

  id = $(this).attr("id") ;
  if (azbd_type == "phone")
  {
    // For input types add the saved value to each input
    if(itin_obj.hasOwnProperty(id))
    {
      // Format the phone number for display
      phone_number = itin_obj[id] ;
      phone_number = '(' + phone_number.substr(0, 3) + ') ' + phone_number.substr(3, 3)
                     + '-' + phone_number.substr(6, 4) ;
      $(this).val(phone_number) ;
    }
  }
