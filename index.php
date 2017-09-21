<?php header("strict-transport-security: max-age=31536000"); ?>
<?php $page_title="Steve Gillespie - Actor and Comedian"  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="google" content="notranslate"><link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="minneapolis comedy, wisconsin comedy, steve gillespie, ripon comedian, midwest comedy, comedian, stand up comedian. stand up comedy, stand up minneapolis, st paul comedy, st paul comedian" name="keywords" />
  <meta content="Steve Gillepsie is a stand-up comeidan from Wisconsin, currently hailing form the greater Minneapolis/St Paul area." name="description" />
  <meta content="Steve Gillespie - Actor and Comedian" name="title" />
  <meta content="public_figure" property="og:type" />
  <meta content="Steve Gillespie Comedy" property="og:site_name" />
  <meta content="http://gillespiecomedy.com/" property="og:url" />
  <meta content="http://gillespiecomedy.com/images/alive-on-state.jpg" property="og:image" />
  <meta content="Steve Gillespie - Actor and Comedian" property="og:title" />
  <title><?php echo $page_title;?></title>
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower|Metamorphous|Sedgwick+Ave" rel="stylesheet">
  <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet">
</head>
  </head>
  <body>

<!-- Top Bar -->
<div data-sticky-container>
  <div class="top-bar" data-sticky data-options="marginTop:0;" style="width:100%">
    <div class="top-bar-title">
      <span data-responsive-toggle="responsive-menu" data-hide-for="large">
        <button class="menu-icon dark" type="button" data-toggle></button>
      </span>
        <strong><a class="index_linkback menu-text hand" href="./index.php">Gillespiecomedy.com</a></strong>
    </div>
    <div id="responsive-menu">
      <div class="top-bar-left">
        <ul class="vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
          <li><a href="./contact.php">Contact &amp; Booking</a></li>
          <li><a href="./bio.php">Bio</a></li>
          <li><a href="./video.php">Videos</a></li>
          <li><a href="./comedy-albums.php">Comedy Albums</a></li>
          <li><a href="./podcast.php">Podcasts</a></li>
          <li><a href="./image-gallery.php">Promo Pics</a></li>
          <!-- <li><a href="./college-bookings.php">College Bookings</a></li> -->
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <!-- <li><input type="search" placeholder="Search"></li> -->
          <!-- <li><button type="button" class="button">Search</button></li> -->
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
<div class="promo-hero promo-hero-bg-image">
  <div class="promo-hero-content">
    <h1 class="promo-hero-title">Steve Gillespie</h1>
    <h4 class="promo-hero-description hide-for-small-only">Comedian and Actor</h4>
    <div class="promo-hero-ctas">
      <a href="./tour.php" class="promo-section-cta button white-hollow">Tour Dates</a>
      <a href="https://itunes.apple.com/us/album/alive-on-state/id1226724404?app=itunes&ign-mpt=uo%3D4" class="promo-section-cta button white-hollow" target="_blank">Latest Album</a>
      <a href="./journal.php" class="promo-section-cta button white-hollow">Travel Journal</a>
    <div class="rounded-social-buttons">
      <a class="social-button facebook" href="https://www.facebook.com/gillespiecomedy" target="_blank"></a>
      <a class="social-button twitter" href="https://twitter.com/epigillespie" target="_blank"></a>
      <a class="social-button youtube" href="https://www.youtube.com/user/sgillespiecomedy" target="_blank"></a>
      <a class="social-button instagram" href="https://www.instagram.com/epigillespie/" target="_blank"></a>
    </div>
      <div><br><br><br></div>
      <!-- <div class="arrow bounce"></div> -->
    </div>
    </div>
  </div>
</div>

<?php
include ('includes/album.inc.php');

include ('includes/block.inc.php');

include ('includes/footer.inc.php');
?>
<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://use.fontawesome.com/c44ea4e9df.js"></script>
    <script src="js/lazyload.js"></script>
    <script>
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 2000);
            return false;
          }
        }
      });
    });
    </script>

  <script>
    new LazyLoad();
  </script>

  </body>
</html>
