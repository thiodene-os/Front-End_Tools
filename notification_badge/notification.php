// Add the notifications to Menu Bar
if($_SESSION['notifications'] != 0)
  $display_notifications = '<span class="button__badge">' . $_SESSION['notifications'] . '</span>' ;
else
  $display_notifications = '' ;
  
  
// Inside the menu bar (Example)
$final_menu = '<nav id="sidebar" role="navigation"> <!-- Sidebar Div -->
<a href="#sidebar" title="Show navigation">Show navigation</a>
<a href="#" title="Hide navigation">Hide navigation</a>
<ul class="clearfix">
<li module_id="home"><a href="http://sims2.scentroid.com/old_index/" aria-haspopup="true"><img src="/images/nav_home_bt.png"" alt="Home" /></a>
<ul>
<h1>HOME</h1>
<li><a href="http://sims2.scentroid.com/overview/"  title="">Overview</a></li>
<li><a href="#">Companies</a>
' . buildCompanyListDropDown()
. '
</li>
</ul>
</li>
<li module_id="analysis"><a href="http://sims2.scentroid.com/analysis" aria-haspopup="true"><img src="/images/nav_analysis_bt.png"" alt="Analysis" /></a>
</li>
<li module_id="notifications"><a href="http://sims2.scentroid.com/notifications" aria-haspopup="true"><img src="/images/nav_notification_bt.png"" alt="Notifications" /></a>
' . $display_notifications . '
</li>
<li module_id="settings"><a href="http://sims2.scentroid.com/settings" aria-haspopup="true"><img src="/images/nav_settings_bt.png"" alt="Settings" /></a>
</li>
<li module_id="tour"><a href="javascript:void(0);" onclick="startIntro();" aria-haspopup="true"><img src="/images/take_a_tour.png"" alt="Website Tour" /></a>
</li>
<li module_id="customers"><a href="http://sims2.scentroid.com/logout" aria-haspopup="true"><img src="/images/nav_signout_bt.png"" alt="Customer Management" /></a>
</li>
</ul>
</nav>' ;
