<?php
#Package: Kippo-Graph
#Version: 0.9
#Author: ikoniaris
#Website: bruteforce.gr/kippo-graph

require_once('config.php');
include(DIR_ROOT . '/html/header.html');
include(DIR_ROOT . '/html/nav.html');

?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Graph selection</li>
              <li class="active"><a href="#top10pass">Top 10 passwords</a></li>
              <li><a href="#top10user">Top 10 usernames</a></li>
              <li><a href="#top10userpasscombo">Top 10 user-pass combos</a></li>
              <li><a href="#successratio">Success ratio</a>
              <li><a href="#successdayweek">Successes per day/week</a>
              <li><a href="#connsperip">Connections per IP</a>
              <li><a href="#successloginssameip">Successful logins from the same IP</a>
              <li><a href="#probesperdayweek">Probes per day/week</a>
              <li><a href="#top10ssh">Top 10 SSH clients</a>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span10">
          <div class="row-fluid">
            <div class="span3">
              <a name="top10pass"><h3>Top 10 passwords</h3></a>
              <p>This vertical bar chart displays the top 10 passwords that attackers try when attacking the system.</p>
              <p><a href="utils/export.php?type=Pass">CSV of all distinct passwords</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/top10_passwords.png" alt="" />
            </div>

          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <a name="top10user"><h3>Top 10 usernames</h3></a>
              <p>This vertical bar chart displays the top 10 usernames that attackers try when attacking the system.</p>
              <p><a href="utils/export.php?type=User">CSV of all distinct Usernames</a></p>
           </div>

            <div class="span7">
              <img src="generated-graphs/top10_usernames.png" alt="" />
           </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <a name="top10userpasscombo"><h3>Top 10 user-pass combos</h3></a>
              <p>This vertical bar chart displays the top 10 username and password combinations that attackers try when attacking the system.</p>
              <p><a href="utils/export.php?type=Combo">CSV of all distinct combinations</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/top10_combinations.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <p>This pie chart displays the top 10 username and password combinations that attackers try when attacking the system</p>
            </div>

            <div class="span7">
              <img src="generated-graphs/top10_combinations_pie.png" alt="" />
            </div>
          </div><!--/row-->


          <div class="row-fluid">
            <div class="span3">
              <a name="successratio"><h3>Success ratio</h3></a>
              <p>This vertical bar chart displays the overall attack success ratio for the particular honeypot system.</p>
              <p><a href="utils/export.php?type=Success">CSV of all successfull attacks</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/success_ratio.png" alt="" />
            </div>
          </div><!--/row-->


          <div class="row-fluid">
            <div class="span3">
              <a name="successdayweek"><h3>Successes per day/week</h3></a>
              <p>This vertical bar chart displays the most successful break-ins per day (Top 20) for the particular honeypot system. The numbers indicate how many times correct credentials were given by attackers</p>
              <p><a href="utils/export.php?type=SuccessLogon">CSV of all successful logons</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/most_successful_logins_per_day.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <p>This line chart displays the daily successes on the honeypot system. Spikes indicate successful entries over a weekly period.<br/><br/><strong>Warning:</strong> Dates with zero successes are not displayed.</p>
              <p><a href="utils/export.php?type=SuccessDay">CSV of daily successes</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/successes_per_day.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <p>This line chart displays the weekly successes on the honeypot system. Curves indicate successful entries over a weekly period.</p>
              <p><a href="utils/export.php?type=SuccessWeek">CSV of weekly successes</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/successes_per_week.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <a name="connsperip"><h3>Connections per IP</h3></a>
              <p>This vertical bar chart displays the top 10 unique IPs ordered by the number of overall connections to the system.</p>
              <p><a href="utils/export.php?type=IP">CSV of all connections per IP</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/connections_per_ip.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <p>This pie chart displays the top 10 unique IPs ordered by the number of overall connections to the system.</p>
            </div>

            <div class="span7">
              <img src="generated-graphs/connections_per_ip_pie.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <a name="successloginssameip"><h3>Successful logins from the same IP</h3></a>
              <p>This vertical bar chart displays the number of successful logins from the same IP address (Top 20). The numbers indicate how many times the particular source opened a successful session.</p>
              <p><a href="utils/export.php?type=SuccessIP">CSV of all successful IPs</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/logins_from_same_ip.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <a name="probesperdayweek"><h3>Probes per day/week</h3></a>
              <p>This horizontal bar chart displays the most probes per day (Top 20) against the honeypot system.</p>
            </div>

            <div class="span7">
              <img src="generated-graphs/most_probes_per_day.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <p>This line chart displays the daily activity on the honeypot system. Spikes indicate hacking attempts.<br/><br/><strong>Warning:</strong> Dates with zero probes are not displayed.</p>
              <p><a href="utils/export.php?type=ProbesDay">CSV of all probes per day</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/probes_per_day.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <p>This line chart displays the weekly activity on the honeypot system. Curves indicate hacking attempts over a weekly period.</p>
              <p><a href="utils/export.php?type=ProbesWeek">CSV of all probes per week</a></p>
            </div>

            <div class="span7">
              <img src="generated-graphs/probes_per_week.png" alt="" />
            </div>
          </div><!--/row-->

          <div class="row-fluid">
            <div class="span3">
              <a name="top10ssh"><h3>Top 10 SSH clients</h3></a>
              <p>This vertical bar chart displays the top 10 SSH clients used by attackers during their hacking attempts.</p>
              <p><a href="utils/export.php?type=SSH">CSV of all SSH clients</a></p> 
            </div>

            <div class="span7">
              <img src="generated-graphs/top10_ssh_clients.png" alt="" />
            </div>
          </div><!--/row-->

        </div><!--/span-->
      </div><!--/row-->

<?php include(DIR_ROOT . '/html/footer.html'); ?>
