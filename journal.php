<?php
$page_specific = 'Travel Journal';
$page_general  = 'Steve Gillespie';
$page_title    = $page_specific.' - '.$page_general;
require_once ('includes/config2.inc.php');
include ('includes/header.php');
?>
<?php include ('includes/hero.php');?>
<div class="row spaced">
  <div class="small-10 large-centered columns">
	<div class="responsive-blog-post">
	  <div class="individual-post">
<?php
require_once (MYSQL);
$posted = 'p.posted_on';

$q = "SELECT p.message, subject, DATE_FORMAT($posted, '%e-%b-%y %l:%i %p') AS posted FROM posts AS p INNER JOIN users AS u ON p.user_id = u.user_id  ORDER BY p.posted_on DESC";
$r = mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " .mysqli_error($dbc));

if (mysqli_num_rows($r) > 0) {

	while ($messages = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		//print_r($messages);

		echo "<br><br><h3>{$messages['subject']}</h3>\n";
		echo "<p>({$messages['posted']})</p>";
		//echo "<p>{$messages['image']}</p>";
		echo "<p>{$messages['message']}</p>";

	}
}
?>
</div>
	</div>
  </div>
</div>

<?php

include ('includes/footer.inc.php');

include ('includes/jscript.inc.php');

?>
</body>
</html>
