<?php
#Package: Kippo-Graph
#Version: 0.9
#Author: ikoniaris
#Website: bruteforce.gr/kippo-graph

require_once('config.php');
include(DIR_ROOT . '/html/header.html');
include(DIR_ROOT . '/html/nav.html');
require_once(DIR_ROOT . '/lib/class/KippoGeo.class.php');

$kippoGeo = new KippoGeo();
?>

    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Selection</li>
              <li class="active"><a href="#top10ips">Top 10 IPs by country (table)</a></li>
              <li><a href="#top10ipsbar">Top 10 IPs by country (bar)</a></li>
              <li><a href="#top10ipspie">Top 10 IPs by country (pie)</a></li>
              <li><a href="#top10ipsmap">Top 10 IPs by country (world map)</a></li>
              <li><a href="#volumeheatmap">Volume of attacks by country (heat map)</a></li>
              <li><a href="#volumepiechart">Volume of attacks by country (pie chart)</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span10">
          <?php $kippoGeo->printKippoGeoData(); ?>
        </div>

<?php include(DIR_ROOT . '/html/footer.html');?>
