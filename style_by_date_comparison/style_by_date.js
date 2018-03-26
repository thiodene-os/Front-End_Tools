<script type="text/javascript">

  $(function()
  {
    // Loop from every cal_date attribute and if the date is before TODAY
    // change the color of the font to lighter grey because it is a past date
    var today = new Date();
    var dd = today.getDate();
    if (dd < 10)
      dd = '0' + dd ;
    var mm = today.getMonth()+1;
    if (mm < 10)
      mm = '0' + mm ;
    var yyyy = today.getFullYear();
    var today_str = yyyy + '-' + mm + '-' + dd ;

    var today_compare = Date.parse(today_str);

    $("[cal_date]").each(function()
    {
      cal_date = $(this).attr("cal_date") ;
      var cal_compare = Date.parse(cal_date);

      if (cal_compare < today_compare)
        $(this).addClass('date_inactive');

    });

  }) ;

</script>
