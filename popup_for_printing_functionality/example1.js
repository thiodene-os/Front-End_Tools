<script type="text/javascript">
  $(function()
  {
    // When user clicks on the print schedule, then show the dialog box
    // where he/she can select different options
    $(document).on("click","#btn_print_schedule",function()
    {
      // Get current selected equipment to print current one
      cur_equip_id = getActiveEquipmentId() ;

      // Open the dialog
      prn_dlg = 
        '<div id="dlg_print_sheet">'
          // Link to print current sheet
          + '<br /><h3>Download Equipment Schedule as PDF</h3>'
          + '<p>Please select how you want to pdf to look like.</p>'
          + '<br />'
          + '<div>'
              + '<ul>'
                + '<li action="print_current">Print Current</li>'
                + '<li action="print_all">Print All Equipments</li>'
              + '</ul>'
              + '<p>How many jobs per equipment?</p>'
              + '<p><input type="number" id="print_qty" style="width: 5.2em;"' 
                        + ' value="~def_work_orders_per_equipment_pdf~" step="1" />'      
              + '<span id="print_qty_all">All Jobs</span></p>'
            + '<p><input type="submit" id="btn_download_sch" value="Print" /></p>'
          + '</div>'
        + '</div>' ;



      // Create the dialog
      $(prn_dlg).dialog(
      {
          modal: true
        , title: 'Download Schedule'
        , width: '35em' 
        ,close : function(event , ui)
        {
          // Make sure to remove the div or the calendar may not work
          $("#dlg_print_sheet").dialog("destroy").remove() ;
        }
      }) ;
    }) ; // Print dialog

    // Changes the selection from 'Print Current' to 'Print All' in the Li
    $(document).on("click","#dlg_print_sheet li",function()
    {
      $("#dlg_print_sheet li").removeClass("selected") ;
      $(this).addClass("selected") ;
    }) ;

    // Select All and disable the number of pages OR if Disable All and allow the page number
    $(document).on("click","#dlg_print_sheet span",function()
    {
      if (!$("#dlg_print_sheet span").hasClass("selected"))
      {
        $("#dlg_print_sheet span").removeClass("selected") ;
        $(this).addClass("selected") ;
        $("#print_qty").prop('disabled',true) ;
      }
      else
      {
        $("#dlg_print_sheet span").addClass("selected") ;
        $(this).removeClass("selected") ;
        $("#print_qty").prop('disabled',false) ;
      }

    }) ;

    // Do the actual download of schedule after user clicks on print button
    $(document).on("click","#btn_download_sch",function()
    {
      action = $("#dlg_print_sheet").find("li.selected").attr("action") ;

      // For the printing selection build the first part of the URL
      if (action == "print_current")
      {
        cur_equip_id = getActiveEquipmentId() ;
        href = "%print_page_path%?action=print_equip_sch&equip_id=" + cur_equip_id ;
      }
      else if (action == "print_all")         
        href =  "%print_page_path%?action=print_equip_sch_all" ;
      else
      {
        xmlbWarn("Please select what to print.") ;
        return false ;
      }

      // For the selected Qty build the URL
      if ($("#print_qty_all").hasClass("selected"))
        href += "&qty_print=all" ;
      else
        href += "&qty_print=" + $("#print_qty").val() ;

      // Also pass what operation we are printing
      href += '&opr_type_id=%opr_type_id%' ;

      location.href = href ; // Download the file
    }) ; // Click on print button
  }) ; // document.ready

  // Finds the id of the equipment which is currently active in the tab
  function getActiveEquipmentId()
  {
    var selected_tab = parseInt($("#wo_tabs").tabs("option","active")) + 1 ; // tab starts at 0
    result = $("#ui-id-" + selected_tab).attr("equip_id") ;

    return result ;
  } // getActiveEquipmentId
</script>
