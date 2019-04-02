function buildTimezoneSelectInput($timezone=false, $timezone_id=false)
{
  $final_timezone_select = '' ;
  
  // Escape zero Timezone value
  if ($timezone == 0)
    $timezone = 100 ; // Give it a 100 instead
  
  // Build the Select inut based on given info
  if ($timezone && !$timezone_id) // If if Timezone value only build based on it
  {
    $final_timezone_select = '<select id="timezone">' ;
    // -12
    if ($timezone == -12)
      $final_timezone_select .= '<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12" selected>(GMT-12:00) International Date Line West</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>' ;
    // -11
    if ($timezone == -11)
      $final_timezone_select .= '<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11" selected>(GMT-11:00) Midway Island, Samoa</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>' ;
    // -10
    if ($timezone == -10)
      $final_timezone_select .= '<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10" selected>(GMT-10:00) Hawaii</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>' ;
    // -9
    if ($timezone == -9)
      $final_timezone_select .= '<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9" selected>(GMT-09:00) Alaska</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>' ;
    // -8
    if ($timezone == -8)
      $final_timezone_select .= '<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8" selected>(GMT-08:00) Pacific Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>' ;
    $final_timezone_select .= '<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>' ;
    // -7
    $final_timezone_select .= '<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>' ;
    $final_timezone_select .= '<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>' ;
    if ($timezone == -7)
      $final_timezone_select .= '<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7" selected>(GMT-07:00) Mountain Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>' ;
    // -6
    $final_timezone_select .= '<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>' ;
    if ($timezone == -6)
      $final_timezone_select .= '<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6" selected>(GMT-06:00) Central Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>' ;
    $final_timezone_select .= '<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>' ;
    $final_timezone_select .= '<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>' ;
    // -5
    $final_timezone_select .= '<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>' ;
    if ($timezone == -5)
      $final_timezone_select .= '<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5" selected>(GMT-05:00) Eastern Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>' ;
    $final_timezone_select .= '<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>' ;
    // -4
    if ($timezone == -4)
      $final_timezone_select .= '<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4" selected>(GMT-04:00) Atlantic Time (Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>' ;
    $final_timezone_select .= '<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>' ;
    $final_timezone_select .= '<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>' ;
    $final_timezone_select .= '<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>' ;
    // -3.5
    if ($timezone == -3.5)
      $final_timezone_select .= '<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5" selected>(GMT-03:30) Newfoundland</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>' ;
    // -3
    $final_timezone_select .= '<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>' ;
    if ($timezone == -3)
      $final_timezone_select .= '<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3" selected>(GMT-03:00) Buenos Aires, Georgetown</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>' ;
    $final_timezone_select .= '<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>' ;
    $final_timezone_select .= '<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>' ;
    // -2
    if ($timezone == -2)
      $final_timezone_select .= '<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2" selected>(GMT-02:00) Mid-Atlantic</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>' ;
    // -1
    if ($timezone == -1)
      $final_timezone_select .= '<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1" selected>(GMT-01:00) Cape Verde Is.</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>' ;
    $final_timezone_select .= '<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>' ;
    // 0 -> 100
    $final_timezone_select .= '<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>' ;
    if ($timezone == 100)
      $final_timezone_select .= '<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0" selected>(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>' ;
    // +1
    if ($timezone == 1)
      $final_timezone_select .= '<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1" selected>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>' ;
    $final_timezone_select .= '<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>' ;
    $final_timezone_select .= '<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>' ;
    $final_timezone_select .= '<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>' ;
    $final_timezone_select .= '<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>' ;
    // +2
    $final_timezone_select .= '<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>' ;
    if ($timezone == 2)
      $final_timezone_select .= '<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Athens, Bucharest, Istanbul</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>' ;
    $final_timezone_select .= '<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>' ;
    $final_timezone_select .= '<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>' ;
    $final_timezone_select .= '<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>' ;
    $final_timezone_select .= '<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>' ;
    $final_timezone_select .= '<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>' ;
    $final_timezone_select .= '<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>' ;
    $final_timezone_select .= '<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>' ;
    // +3
    $final_timezone_select .= '<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>' ;
    if ($timezone == 3)
      $final_timezone_select .= '<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3" selected>(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>' ;
    $final_timezone_select .= '<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>' ;
    $final_timezone_select .= '<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>' ;
    // +3.5
    if ($timezone == 3.5)
      $final_timezone_select .= '<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5" selected>(GMT+03:30) Tehran</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>' ;
    // +4
    if ($timezone == 4)
      $final_timezone_select .= '<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4" selected>(GMT+04:00) Abu Dhabi, Muscat</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>' ;
    $final_timezone_select .= '<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>' ;
    $final_timezone_select .= '<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>' ;
    // +4.5
    if ($timezone == 4.5)
      $final_timezone_select .= '<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5" selected>(GMT+04:30) Kabul</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>' ;
    // +5
    $final_timezone_select .= '<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>' ;
    if ($timezone == 5)
      $final_timezone_select .= '<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5" selected>(GMT+05:00) Islamabad, Karachi, Tashkent</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>' ;
    // +5.5
    $final_timezone_select .= '<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>' ;
    if ($timezone == 5.5)
      $final_timezone_select .= '<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5" selected>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>' ;
    // +5.75
    if ($timezone == 5.75)
      $final_timezone_select .= '<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75" selected>(GMT+05:45) Kathmandu</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>' ;
    // +6
    if ($timezone == 6)
      $final_timezone_select .= '<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6" selected>(GMT+06:00) Almaty, Novosibirsk</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>' ;
    $final_timezone_select .= '<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>' ;
    // +6.5
    if ($timezone == 6.5)
      $final_timezone_select .= '<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5" selected>(GMT+06:30) Yangon (Rangoon)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>' ;
    // + 7
    if ($timezone == 7)
      $final_timezone_select .= '<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7" selected>(GMT+07:00) Bangkok, Hanoi, Jakarta</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>' ;
    $final_timezone_select .= '<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>' ;
    // +8
    if ($timezone == 8)
      $final_timezone_select .= '<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8" selected>(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>' ;
    $final_timezone_select .= '<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>' ;
    $final_timezone_select .= '<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>' ;
    $final_timezone_select .= '<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>' ;
    $final_timezone_select .= '<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>' ;
    // +9
    if ($timezone == 9)
      $final_timezone_select .= '<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9" selected>(GMT+09:00) Osaka, Sapporo, Tokyo</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>' ;
    $final_timezone_select .= '<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>' ;
    $final_timezone_select .= '<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>' ;
    // +9.5
    if ($timezone == 9.5)
      $final_timezone_select .= '<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5" selected>(GMT+09:30) Adelaide</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>' ;
    $final_timezone_select .= '<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>' ;
    // +10
    if ($timezone == 10)
      $final_timezone_select .= '<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10" selected>(GMT+10:00) Brisbane</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>' ;
    $final_timezone_select .= '<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>' ;
    $final_timezone_select .= '<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>' ;
    $final_timezone_select .= '<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>' ;
    $final_timezone_select .= '<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>' ;
    // +11
    if ($timezone == 11)
      $final_timezone_select .= '<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11" selected>(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>' ;
    // +12
    if ($timezone == 12)
      $final_timezone_select .= '<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12" selected>(GMT+12:00) Auckland, Wellington</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>' ;
    $final_timezone_select .= '<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>' ;
    // +13
    if ($timezone == 13)
      $final_timezone_select .= '<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13" selected>(GMT+13:00) Nuku\'alofa</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku\'alofa</option>' ;
    
    $final_timezone_select .= '</select>	' ;
  }
  elseif ($timezone && $timezone_id) // If timezone ID is provided build based on it
  {
    $final_timezone_select = '<select id="timezone">' ;
    
    if ($timezone_id == 1)
      $final_timezone_select .= '<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12" selected>(GMT-12:00) International Date Line West</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>' ;
    
    if ($timezone_id == 2)
      $final_timezone_select .= '<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11" selected>(GMT-11:00) Midway Island, Samoa</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>' ;
    
    if ($timezone_id == 3)
      $final_timezone_select .= '<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10" selected>(GMT-10:00) Hawaii</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>' ;
    
    if ($timezone_id == 4)
      $final_timezone_select .= '<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9" selected>(GMT-09:00) Alaska</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>' ;
    
    if ($timezone_id == 5)
      $final_timezone_select .= '<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8" selected>(GMT-08:00) Pacific Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>' ;
    
    if ($timezone_id == 6)
      $final_timezone_select .= '<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8" selected>(GMT-08:00) Tijuana, Baja California</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>' ;
    
    if ($timezone_id == 7)
      $final_timezone_select .= '<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7" selected>(GMT-07:00) Arizona</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>' ;
    
    if ($timezone_id == 8)
      $final_timezone_select .= '<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7" selected>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>' ;
    
    if ($timezone_id == 9)
      $final_timezone_select .= '<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7" selected>(GMT-07:00) Mountain Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>' ;
    
    if ($timezone_id == 10)
      $final_timezone_select .= '<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6" selected>(GMT-06:00) Central America</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>' ;
    
    if ($timezone_id == 11)
      $final_timezone_select .= '<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6" selected>(GMT-06:00) Central Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>' ;
    
    if ($timezone_id == 12)
      $final_timezone_select .= '<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6" selected>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>' ;
    
    if ($timezone_id == 13)
      $final_timezone_select .= '<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6" selected>(GMT-06:00) Saskatchewan</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>' ;
    
    if ($timezone_id == 14)
      $final_timezone_select .= '<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5" selected>(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>' ;
    
    if ($timezone_id == 15)
      $final_timezone_select .= '<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5" selected>(GMT-05:00) Eastern Time (US & Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>' ;
    
    if ($timezone_id == 16)
      $final_timezone_select .= '<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5" selected>(GMT-05:00) Indiana (East)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>' ;
    
    if ($timezone_id == 17)
      $final_timezone_select .= '<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4" selected>(GMT-04:00) Atlantic Time (Canada)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>' ;
     
    if ($timezone_id == 18)
      $final_timezone_select .= '<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4" selected>(GMT-04:00) Caracas, La Paz</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>' ;
    
    if ($timezone_id == 19)
      $final_timezone_select .= '<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4" selected>(GMT-04:00) Manaus</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>' ;
    
    if ($timezone_id == 20)
      $final_timezone_select .= '<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4" selected>(GMT-04:00) Santiago</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>' ;
    
    if ($timezone_id == 21)
      $final_timezone_select .= '<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5" selected>(GMT-03:30) Newfoundland</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>' ;
    
    if ($timezone_id == 22)
      $final_timezone_select .= '<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3" selected>(GMT-03:00) Brasilia</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>' ;
    
    if ($timezone_id == 23)
      $final_timezone_select .= '<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3" selected>(GMT-03:00) Buenos Aires, Georgetown</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>' ;
    
    if ($timezone_id == 24)
      $final_timezone_select .= '<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3" selected>(GMT-03:00) Greenland</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>' ;
    
    if ($timezone_id == 25)
      $final_timezone_select .= '<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3" selected>(GMT-03:00) Montevideo</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>' ;
    
    if ($timezone_id == 26)
      $final_timezone_select .= '<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2" selected>(GMT-02:00) Mid-Atlantic</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>' ;
    
    if ($timezone_id == 27)
      $final_timezone_select .= '<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1" selected>(GMT-01:00) Cape Verde Is.</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>' ;
    
    if ($timezone_id == 28)
      $final_timezone_select .= '<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1" selected>(GMT-01:00) Azores</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>' ;
    
    if ($timezone_id == 29)
      $final_timezone_select .= '<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0" selected>(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>' ;
    
    if ($timezone_id == 30)
      $final_timezone_select .= '<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0" selected>(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>' ;
    
    if ($timezone_id == 31)
      $final_timezone_select .= '<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1" selected>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>' ;
    
    if ($timezone_id == 32)
      $final_timezone_select .= '<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1" selected>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>' ;
    
    if ($timezone_id == 33)
      $final_timezone_select .= '<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1" selected>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>' ;
    
    if ($timezone_id == 34)
      $final_timezone_select .= '<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1" selected>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>' ;
    
    if ($timezone_id == 35)
      $final_timezone_select .= '<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1" selected>(GMT+01:00) West Central Africa</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>' ;
    
    if ($timezone_id == 36)
      $final_timezone_select .= '<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Amman</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>' ;
    
    if ($timezone_id == 37)
      $final_timezone_select .= '<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Athens, Bucharest, Istanbul</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>' ;
    
    if ($timezone_id == 38)
      $final_timezone_select .= '<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Beirut</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>' ;
    
    if ($timezone_id == 39)
      $final_timezone_select .= '<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Cairo</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>' ;
    
    if ($timezone_id == 40)
      $final_timezone_select .= '<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2" selected>(GMT+02:00) Harare, Pretoria</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>' ;
    
    if ($timezone_id == 41)
      $final_timezone_select .= '<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>' ;
    
    if ($timezone_id == 42)
      $final_timezone_select .= '<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Jerusalem</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>' ;
    
    if ($timezone_id == 43)
      $final_timezone_select .= '<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Minsk</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>' ;
    
    if ($timezone_id == 44)
      $final_timezone_select .= '<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2" selected>(GMT+02:00) Windhoek</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>' ;
    
    if ($timezone_id == 45)
      $final_timezone_select .= '<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3" selected>(GMT+03:00) Kuwait, Riyadh, Baghdad</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>' ;
    
    if ($timezone_id == 46)
      $final_timezone_select .= '<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3" selected>(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>' ;
    
    if ($timezone_id == 47)
      $final_timezone_select .= '<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3" selected>(GMT+03:00) Nairobi</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>' ;
    
    if ($timezone_id == 48)
      $final_timezone_select .= '<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3" selected>(GMT+03:00) Tbilisi</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>' ;
    
    if ($timezone_id == 49)
      $final_timezone_select .= '<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5" selected>(GMT+03:30) Tehran</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>' ;
    
    if ($timezone_id == 50)
      $final_timezone_select .= '<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4" selected>(GMT+04:00) Abu Dhabi, Muscat</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>' ;
    
    if ($timezone_id == 51)
      $final_timezone_select .= '<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4" selected>(GMT+04:00) Baku</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>' ;
    
    if ($timezone_id == 52)
      $final_timezone_select .= '<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4" selected>(GMT+04:00) Yerevan</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>' ;
    
    if ($timezone_id == 53)
      $final_timezone_select .= '<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5" selected>(GMT+04:30) Kabul</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>' ;
    
    if ($timezone_id == 54)
      $final_timezone_select .= '<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5" selected>(GMT+05:00) Yekaterinburg</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>' ;
    
    if ($timezone_id == 55)
      $final_timezone_select .= '<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5" selected>(GMT+05:00) Islamabad, Karachi, Tashkent</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>' ;
    
    if ($timezone_id == 56)
      $final_timezone_select .= '<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5" selected>(GMT+05:30) Sri Jayawardenapura</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>' ;
    
    if ($timezone_id == 57)
      $final_timezone_select .= '<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5" selected>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>' ;
    
    if ($timezone_id == 58)
      $final_timezone_select .= '<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75" selected>(GMT+05:45) Kathmandu</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>' ;
    
    if ($timezone_id == 59)
      $final_timezone_select .= '<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6" selected>(GMT+06:00) Almaty, Novosibirsk</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>' ;
    
    if ($timezone_id == 60)
      $final_timezone_select .= '<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6" selected>(GMT+06:00) Astana, Dhaka</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>' ;
    
    if ($timezone_id == 61)
      $final_timezone_select .= '<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5" selected>(GMT+06:30) Yangon (Rangoon)</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>' ;
    
    if ($timezone_id == 62)
      $final_timezone_select .= '<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7" selected>(GMT+07:00) Bangkok, Hanoi, Jakarta</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>' ;
    
    if ($timezone_id == 63)
      $final_timezone_select .= '<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7" selected>(GMT+07:00) Krasnoyarsk</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>' ;
    
    if ($timezone_id == 64)
      $final_timezone_select .= '<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8" selected>(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>' ;
    
    if ($timezone_id == 65)
      $final_timezone_select .= '<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8" selected>(GMT+08:00) Kuala Lumpur, Singapore</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>' ;
    
    if ($timezone_id == 66)
      $final_timezone_select .= '<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8" selected>(GMT+08:00) Irkutsk, Ulaan Bataar</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>' ;
    
    if ($timezone_id == 67)
      $final_timezone_select .= '<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8" selected>(GMT+08:00) Perth</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>' ;
    
    if ($timezone_id == 68)
      $final_timezone_select .= '<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8" selected>(GMT+08:00) Taipei</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>' ;
    
    if ($timezone_id == 69)
      $final_timezone_select .= '<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9" selected>(GMT+09:00) Osaka, Sapporo, Tokyo</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>' ;
    
    if ($timezone_id == 70)
      $final_timezone_select .= '<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9" selected>(GMT+09:00) Seoul</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>' ;
    
    if ($timezone_id == 71)
      $final_timezone_select .= '<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9" selected>(GMT+09:00) Yakutsk</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>' ;
    
    if ($timezone_id == 72)
      $final_timezone_select .= '<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5" selected>(GMT+09:30) Adelaide</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>' ;
    
    if ($timezone_id == 73)
      $final_timezone_select .= '<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5" selected>(GMT+09:30) Darwin</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>' ;
    
    if ($timezone_id == 74)
      $final_timezone_select .= '<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10" selected>(GMT+10:00) Brisbane</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>' ;
    
    if ($timezone_id == 75)
      $final_timezone_select .= '<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10" selected>(GMT+10:00) Canberra, Melbourne, Sydney</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>' ;
    
    if ($timezone_id == 76)
      $final_timezone_select .= '<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10" selected>(GMT+10:00) Hobart</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>' ;
    
    if ($timezone_id == 77)
      $final_timezone_select .= '<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10" selected>(GMT+10:00) Guam, Port Moresby</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>' ;
    
    if ($timezone_id == 78)
      $final_timezone_select .= '<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10" selected>(GMT+10:00) Vladivostok</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>' ;
    
    if ($timezone_id == 79)
      $final_timezone_select .= '<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11" selected>(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>' ;
    
    if ($timezone_id == 80)
      $final_timezone_select .= '<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12" selected>(GMT+12:00) Auckland, Wellington</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>' ;
    
    if ($timezone_id == 81)
      $final_timezone_select .= '<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12" selected>(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>' ;
    
    if ($timezone_id == 82)
      $final_timezone_select .= '<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13" selected>(GMT+13:00) Nuku\'alofa</option>' ;
    else
      $final_timezone_select .= '<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku\'alofa</option>' ;
    
    
    $final_timezone_select .= '</select>	' ;
  }
  else // If no timezone at all build default select input
  {
    $final_timezone_select = '<select id="timezone">
    <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
    <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
    <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
    <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
    <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
    <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
    <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
    <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
    <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
    <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
    <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
    <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
    <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
    <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
    <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
    <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
    <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
    <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
    <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
    <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
    <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
    <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
    <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
    <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
    <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
    <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
    <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
    <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
    <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
    <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
    <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
    <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
    <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
    <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
    <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
    <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
    <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
    <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
    <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
    <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
    <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
    <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
    <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
    <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
    <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
    <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
    <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
    <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
    <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
    <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
    <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
    <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
    <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
    <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
    <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
    <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
    <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
    <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
    <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
    <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
    <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
    <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
    <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
    <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
    <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
    <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
    <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
    <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
    <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
    <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
    <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
    <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
    <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
    <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
    <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
    <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
    <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
    <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
    <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
    <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
    <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
    <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku\'alofa</option>
    </select>	' ;
  }
  
  return $final_timezone_select ;
  
} // buildTimezoneSelectInput
