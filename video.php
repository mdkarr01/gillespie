<?php
$page_specific = 'Videos and Standup';
$page_general  = 'Steve Gillespie';
$page_title    = $page_specific.' - '.$page_general;
include ('includes/header.php');
?>
<?php include ('includes/hero.php');?>
<div class="row">
	<div class="small-12 columns float-left title"><h2 class="title">Video Spots</h2>
</div>
</div>

<div class="row spaced bottom">
	<div class="small-12 large-6 columns">
		<h4>Check This Out!</h4>
		<p>An animation of one of my bits from my new album <a href="https://www.youtube.com/watch?v=q2MEhwdHNhA" target="_blank">&quot;
Alive on State&quot;
</a> that hit #1 on the iTunes charts! Check out the video and pick up the album on iTunes!</p>
		<div class="videowrapper">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/q2MEhwdHNhA" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="small-12 large-6 columns">
		<h4>The Boys From LESTARIL</h4>
		<div><iframe width="560" height="315" src="https://www.youtube.com/embed/QWms-te6kZM" frameborder="0" allowfullscreen></iframe></div>
	</div>
</div>

<div class="row spaced bottom">
	<div class="small-12 large-6 columns">
		<h4>HOT New Stand Up Clip From The Ol&apos;
		Gillesp&apos;</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/vOuPnksunr4" title="HOT New Stand Up Clip From The Ol&apos;
		Gillesp&apos;" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="small-12 large-6 columns">
		<h4>A Brand New Sketch From Lestaril &mdash; Miss-Interrogation</h4>
		<p class="bold">A real silly sketch I wrote with the boys from Lestaril. Check it out.</p>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ZVmJzwDJsBg" title="A real silly sketch I wrote with the boys from Lestaril. Check it out." frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div class="row spaced bottom">
	<div class="small-12 large-6 columns">
		<h4>A Three Part Sketch Series From Your Baby Boys  &mdash; GILESTARIL</h4>
		<p class="bold">PART 1 Lost Rob</p>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/_do55g3jECM" title="A THREE PART SKETCH SERIES FROM YOUR BABY BOYS  &mdash; GILESTARIL PART 1 Lost Rob" frameborder="0" allowfullscreen></iframe>
		</div>
		<br><br>
		<p class="bold">Part 2 The Jackalope</p>

		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/BmQazYXWY7I" title="A THREE PART SKETCH SERIES FROM YOUR BABY BOYS  &mdash; GILESTARIL &mdash; Part 2 The Jackalope" frameborder="0" allowfullscreen></iframe>
		</div>
		<br><br>
		<p class="bold">Part 3 The Homecoming (Finale)</p>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/nOpmFoe2G8c" title="A THREE PART SKETCH SERIES FROM YOUR BABY BOYS  &mdash; GILESTARIL &mdash; Part 3 The Homecoming (Finale)" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="small-12 large-6 columns">
		<h4>Gilestaril Sketch!  Trolling the Trolls</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/XJpU8Dr1e_w" frameborder="0" allowfullscreen></iframe>
		</div>
		<br><br>
		<h4>The Laugh Factory in Hollywood just uploaded this short clip on to youtube. Check it out and give it a "like".</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/Jj22gfTnpAI" frameborder="0" allowfullscreen></iframe>
		</div>
		<br><br>
		<h4>I made my national television debut on 4/25/16 on CONAN</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/rS3iSC7MLTI" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div class="row spaced bottom">
	<div class="small-12 large-6 columns">
		<h4>Here is a sketch that I wrote and directed called "Modern Lassie". Its on FunnyorDie right now. Check it out.</h4>
		<div class="videowrapper">
		<iframe src="//www.funnyordie.com/embed/cc728bc15a" width="640" height="400" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
		</div>
	</div>

	<div class="small-12 large-6 columns">
		<h4>3M COMMERICAL</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/8tyfJASBu80" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>


<div class="row bottom">
	<div class="small-12 large-6 columns">
		<h4>Stand Up</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/l8XwHUQCCKM" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="small-12 large-6 columns">
		<h4>Stand Up</h4>
		<div class="videowrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/4SVgheIz5Wo" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<?php

include ('includes/footer.inc.php');

include ('includes/jscript.inc.php');
?>
<script>

    /* Light YouTube Embeds by @labnol */
    /* Web: http://labnol.org/?p=27941 */

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

</script>
</body>
</html>
