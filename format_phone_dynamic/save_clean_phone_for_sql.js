// Loop through all inputs where user can enter or select data, create a json string and
// save them
$("[azbd_type]").each(function()
{
  azbd_type = $(this).attr("azbd_type") ;

  if (azbd_type == "phone")
  {
    // For Inputs check if it has a value entered
    // If so, save it with the attached id
    value = $.trim($(this).val()) ;
    // Replace Dynamic Phone Input string non-wanted characters
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
  
  //------------------------------------ Etc....
