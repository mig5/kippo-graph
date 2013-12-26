<?php
#Package: Kippo-Graph
#Version: 0.9
#Author: ikoniaris
#Website: bruteforce.gr/kippo-graph

require('config.php');
include(DIR_ROOT . '/html/header.html');
include(DIR_ROOT . '/html/nav.html');
include_once(DIR_ROOT . '/lib/functions/versionCheck.php');
?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span6 offset3">
            <div class="hero-unit">
              <h1>About Kippo-Graph</h1>
              <?php report_version(); ?>
            </div>
            <div class="row-fluid">
              <div class="span6 offset3">
      <p><strong>CHANGES:</strong></p>
      <p>Version 0.9:<br/>+ Added CSV export capabilities.<br/>+ Added Spanish language support.</p>
      <p>Version 0.8:<br/>+ Changed code to OOP style.<br/>+ Added FortiGuard, AlientVault, WatchGuard and McAfee IP scanning services (Kippo-Geo).<br/>+ Various CSS-related fixes for tables and cross-browser compatibility.</p>
      <p>Version 0.7.7:<br/>+ Added German language support.</p>
          <p>Version 0.7.6:<br/>+ Added Polish & Swedish language support.</p>
          <p>Version 0.7.5:<br/>+ Added French language support.</p>
          <p>Version 0.7.4:<br/>+ Added config option for non-standard MySQL port.</p>
          <p>Version 0.7.3:<br/>+ Fixed XSS issues in Kippo-Input.<br/>+ Added tables with overall/basic stats in Kippo-Graph and Kippo-Input.</p>
          <p>Version 0.7.2:<br/>+ Minor fixes and various changes.</p>
          <p>Version 0.7.1:<br/>+ Added chart localization - need volunteers.<br/>+ Languages: Greek, Italian, Dutch, Estonian.<br/>+ New chart fonts added - default: OpenSans.<br/>+ Added API key to QGoogleVisualizationAPI.</p>
          <p>Version 0.7:<br/>+ Fixed human activity charts: Top 20 and mod limit.<br/>+ Fixed probes per week and successes per week charts.<br/>+ Added human activity per week graph - updated grallery
                <br/>+ Added most successful logins per day graph - updated gallery.<br/>+ Added most probes per day graph - updated gallery<br/>+ Other small fixes.</p>
          <p>Version 0.6.5:<br/>+ Fixed "http://" in file links (Kippo-Input).<br/>+ Added installation instructions and Google Map note in README.txt<br/>+ Fixed successful logins from same IP chart: Top 20.
                <br/>+ Fixed successes per day chart: Top 20.<br/>+ Fixed probes per day chart: display only 25 distinct date values.</p>
          <p>Version 0.6.4:<br/>- Removed dayofyear2date(), has a bug that adds +1 day in all 2012 dates (leap year?).
                <br/>+ Changed SQL queries to timestamp values and date() parses the results - fixed graphs.<br/>+ Added successes per week graph - updated gallery.<br/>+ Small fixes.</p>
          <p>Version 0.6.3:<br/>+ Added passwd, executed scripts and interesting commands tables.<br/>+ Added successes per day graph - updated gallery.<br/>+ Added human activity per day vertical bar chart - updated gallery.
            <br/>+ Fixed successful logins from same IP graph.<br/>+ Changed top 10 SSH clients graph to horizontal.<br/>+ Small UI fixes, etc.</p>
          <p>Version 0.6.2:<br/>+ Added hostname resolution for IPs (include/misc/ip2host.php).<br/>+ Added robtex IP lookup feature.</p>
          <p>Version 0.6.1:<br/>+ Changed all links and information about the project.</p>
          <p>Version 0.6:<br/>+ Added human activity per day graph (Kippo-Input) - updated gallery.<br/>+ Added probes per week graph - updated gallery.<br/>+ Added break-ins from same IP graph - updated gallery.
                <br/>+ Added IP Void lookup feature (Kippo-Geo).<br/>+ Added NoVirusThanks scan feature (Kippo-Input).<br/>+ Fixed SSH clients graph: shows top 10, ordered by volume.<br/>- Removed favicon.</p>
          <p>Version 0.5.1:<br/>+ Made version checking more secure with a directive in config.php (UPDATE CHECK YES/NO).<br/>+ Posted CHECKSUMS for the .tar archive online (and noted for future releases).<br/>+ Added LICENSE.txt</p>
          <p>Version 0.5:<br/>+ Added Kippo-Input: display and visualization of input data, wget (with file links) and apt-get commands.<br/>+ Added online version checking function (include/misc/versionCheck.php).
                <br/>+ Added new pie charts, Kippo-Graph now shows 15 - updated gallery.<br/>+ Added IP table on Kippo-Geo with whois/lookup feature.<br/>+ Changed all files to .php.<br/></p>
          <p>Version 0.4:<br/>+ Added geolocation features at beta stage, using geoplugin and google maps/charts.<br/>+ Fixed file/folder structure and updated config.php.<br/>+ Added new logo.</p>
          <p>Version 0.3:<br/>+ Added 3 new input-related graphs.<br/>+ Updated graph gallery.<br/>+ Fixed minor web UI and graph details.<br/>+ Added TODO.txt.<br/>+ Updated README.txt</p>
          <p>Version 0.2:<br/>+ Added web template to Kippo-Graph.<br/>+ Changed functionality of kippo-graph.php turning into a generator for the graphs.<br/>- index.php removed.</p>
          <p>Version 0.1:<br/>+ Initial version.</p>
              </div>
            </div>
        </div><!--/span-->
      </div><!--/row-->



<?php include(DIR_ROOT . '/html/footer.html'); ?>
