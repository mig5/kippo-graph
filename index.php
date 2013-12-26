<?php
#Package: Kippo-Graph
#Version: 0.9
#Author: ikoniaris
#Website: bruteforce.gr/kippo-graph

require('config.php');

include(DIR_ROOT . '/html/header.html');
include(DIR_ROOT . '/html/nav.html');
include_once(DIR_ROOT . '/lib/functions/versionCheck.php');
require_once(DIR_ROOT . '/lib/class/KippoGraph.class.php');


$kippoGraph = new KippoGraph();

//Let's create all the charts! (generated-graphs folder)
$kippoGraph->createTop10Passwords();
$kippoGraph->createTop10Usernames();
$kippoGraph->createTop10Combinations();
$kippoGraph->createSuccessRation();
$kippoGraph->createMostSuccessfulLoginsPerDay();
$kippoGraph->createSuccessesPerDay();
$kippoGraph->createSuccessesPerWeek();
$kippoGraph->createNumberOfConnectionsPerIP();
$kippoGraph->createSuccessfulLoginsFromSameIP();
$kippoGraph->createMostProbesPerDay();
$kippoGraph->createProbesPerDay();
$kippoGraph->createProbesPerWeek();
$kippoGraph->createTop10SSHClients();
?>


    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
            <div class="hero-unit">
              <h1>Welcome to Kippo-Graph!</h1>
              <p>This interface provides a visualization for your Kippo honeypot statistics.</p>
              <p><a href="kippo-graph.php" class="btn btn-primary btn-large">View graphs</a></p>
            </div>
            <div class="row-fluid">
              <div class="span4 offset4">
                <?php $kippoGraph->printOverallHoneypotActivity(); ?>
              </div>
            </div>
        </div><!--/span-->
      </div><!--/row-->
<?php include(DIR_ROOT . '/html/footer.html'); ?>
