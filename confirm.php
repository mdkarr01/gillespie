<?php
$page_title = 'Contact Page - Steve Gillespie';
include ('includes/header.php');
?>
<!-- Begin hero -->
<div class="promo-hero promo-hero-bg-image">
  <div class="promo-hero-content translucent-form-overlay">
<?php
if (isset($_POST['submitted'])) {

	/* The function takes one argument: a string.
	 * The function returns a clean version of the string.
	 * The clean version may be either an empty string or
	 * just the removal of all newline characters.
	 */
	function spam_scrubber($value) {

		// List of very bad values:
		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');

		// If any of the very bad strings are in
		// the submitted value, return an empty string:
		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== false) {return '';
			}
		}

		// Replace any newline characters with spaces:
		$value = str_replace(array("\r", "\n", "%0a", "%0d"), ' ', $value);

		// Return the value:
		return trim($value);

	}// End of spam_scrubber() function.

	// Clean the form data:
	$scrubbed = array_map('spam_scrubber', $_POST);

	// Minimal form validation:
	if (!empty($scrubbed['name']) && !empty($scrubbed['email']) && !empty($scrubbed['comments'])) {

		// Create the body:
		$body = "Name: {$scrubbed['name']}\n\nComments: {$scrubbed['comments']}";
		$body = wordwrap($body, 70);

		// Send the email:
		mail('sgillespie@gillespiecomedy.com', 'Contact Form Submission', $body, "From: {$scrubbed['email']}");

		// Print a message:
		echo '<h1>Thank you!</h1>
		<p>I will be back in touch with you soon.</p>';

		// Clear $_POST (so that the form's not sticky):
		$_POST = array();

	} else {
		echo '<h1>On No!</h1><p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
	}

}
?>
  <form action="confirm.php" method="post">
    <h3>Contact</h3>
    <div class="row columns">
      <label>Name
        <input type="text" name="name" size="30" maxlength="60" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];
}
?>" />
      </label>
    </div>
    <div class="row columns">
      <label>Email Address
        <input type="text" name="email" size="30" maxlength="80" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];
}
?>" />
      </label>
    </div>
    <div class="row columns">
      <label>Message
        <textarea name="comments" rows="5" cols="30"><?php if (isset($_POST['comments'])) {echo $_POST['comments'];
}
?></textarea>
      </label>
    </div>
    <button type="submit" class="primary button expanded submit-button" name="submit" />
      Submit!
    </button>
    <!-- <input type="submit" name="submit" value="Send!" /> -->
    <input type="hidden" name="submitted" value="TRUE" />
 </form>
  </div>
</div>
<div class="reveal" id="email" data-reveal>';
		<h1>Thank you!</h1>
  		<p>I will be back in touch with you soon.</p>
  		<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
  		</button>
</div>
<?php
include ('includes/album.inc.php');

include ('includes/block.inc.php');

include ('includes/footer.inc.php');

include ('includes/jscript.inc.php');

?>
</body>
</html>
