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
          
      </script>
