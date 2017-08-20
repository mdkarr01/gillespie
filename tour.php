<?php
$page_specific = 'Tour Schedule';
$page_general  = 'Steve Gillespie';
$page_title    = $page_specific.' - '.$page_general;
include ('includes/header.php');
?>
<?php include ('includes/hero.php');?>
<div class="row spaced">
  <div class="small-8 small-centered columns">
  	<h2 class=title">Tour Schedule</h2>
	<h1 style="text-align: center;"><iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ui475sibul7p00uck1aqkjusts%40group.calendar.google.com&amp;color=%23333333&amp;ctz=America%2FLos_Angeles" width="800" height="600" frameborder="0" scrolling="no"></iframe></h1>
  </div>
</div>

<?php

include ('includes/footer.inc.php');

include ('includes/jscript.inc.php');

?>
</body>
</html>
