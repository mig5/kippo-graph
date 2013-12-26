<?php 
#Package: Kippo-Graph
#Version: 0.9
#Author: ikoniaris
#Website: bruteforce.gr/kippo-graph

require_once('config.php');
include(DIR_ROOT . '/html/header.html');
include(DIR_ROOT . '/html/nav.html');
require_once(DIR_ROOT . '/lib/class/KippoInput.class.php');

$kippoInput = new KippoInput();
?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Graph selection</li>
              <li class="active"><a href="#top20active">Overall Honeypot Activity</a></li>
              <li><a href="#humanactivity">Human activity</a></li>
              <li><a href="#top10input">Top 10 overall input</a>
              <li><a href="#top10successinput">Top 10 successful input</a>
              <li><a href="#top10failedinput">Top 10 failed input</a>
              <li><a href="#passwdcommands">passwd commands</a>
              <li><a href="#wgetcommands">wget commands</a>
              <li><a href="#executedscripts">Executed scripts</a>
              <li><a href="#interestingcommands">Interesting commands</a>
              <li><a href="#aptgetcommands">apt-get commands</a>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span10">
           <?php
            $kippoInput->printOverallHoneypotActivity();
            $kippoInput->printHumanActivityBusiestDays();
            $kippoInput->printHumanActivityPerDay();
            $kippoInput->printHumanActivityPerWeek();
            $kippoInput->printTop10OverallInput();
            $kippoInput->printTop10SuccessfulInput();
            $kippoInput->printTop10FailedInput();
            $kippoInput->printPasswdCommands();
            $kippoInput->printWgetCommands();
            $kippoInput->printExecutedScripts();
            $kippoInput->printInterestingCommands();
            $kippoInput->printAptGetCommands();
           ?>
        </div>

<?php include(DIR_ROOT . '/html/footer.html');?>
