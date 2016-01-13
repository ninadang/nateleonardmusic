<!--
Responsive 
*Navigation links - animation
- Podcast 
- Social Media 
*YouTube Size
-Required form fields
*Lettering
-->

<?php

if($_POST["submit"]) {
    $recipient="ninadangt@gmail.com";
    $subject="Message from website";
    $senderFname=$_POST["senderFname"];
    $senderLname=$_POST["senderLname"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $senderFname $senderLname\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Nate Leonard</title>
<link rel="stylesheet" type="text/css" href="foundation-6/css/foundation.css">
<!--<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css"/>-->
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


	<!--<div class="title-bar" data-responsive-toggle="navmenu" data-hide-for="medium">
	  <button class="menu-icon" type="button" data-toggle></button>
	</div>
 -->

	<nav class="top-bar fixed-nav-bar" id="navmenu">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a class="name" href="http://ninadang.com/nateleonardmusic/index.php">NATE LEONARD</a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu">
				<li><a href="#music">MUSIC</a></li>
				<li><a href="#videos">VIDEOS</a></li>
				<li><a href="#podcast">PODCAST</a></li>
				<li><a href="#bio">BIO</a></li>
				<li><a href="#contact">CONTACT</a></li>
			</ul>
		</div>
	</nav>
 

	<div class="hero">
		<div class="text-center">
			<div><img alt="Nate Leonard" src="img/bio.jpg">
		</div>
	</div>


<div class="webcontent">
	<a name="music"></a>
	<div class="row bandcamp">
		<div class="sectionhead text-center">
			<h2>MUSIC</h2>
			<p class="medialink"><a href="http://nateleonard.bandcamp.com/" target="_blank">Bandcamp</a> | <a href="https://soundcloud.com/nate-leonard-918986557" target="_blank">SoundCloud</a></p>
		</div> 
		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=3925410816/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://nateleonard.bandcamp.com/track/a-brand-new-life-demo">A Brand New Life (Demo) by Nate Leonard</a></iframe>
		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=832257787/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://nateleonard.bandcamp.com/track/baby-its-cold-outside">Baby, It&#39;s Cold Outside by Nate Leonard</a></iframe>
		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=2243451340/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://nateleonard.bandcamp.com/track/silent-night">Silent Night by Nate Leonard</a></iframe>
	</div>
	<hr>

	<a name="videos"></a>
	<div class="row videos column">
		<div class="sectionhead text-center">
			<h2>VIDEOS</h2>
				<p class="medialink"><a href="https://www.youtube.com/channel/UCGrI9qoFSCKcyMGw0ZyIwMw" target="_blank">YouTube</a>
				</p>
		</div>
		<div class="row medium-up-2 large-up-2">
		<div class="column">
			<div class="flex-video">
	        	<iframe src="https://www.youtube.com/embed/wu7yt_Zt0Zw?showinfo=0" width="300" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="videocap">Holy Shit - Father John Misty Cover</p>
		</div>
		<div class="column">
			<div class="flex-video">
	        	<iframe src="https://www.youtube.com/embed/0mAJBGONCYI?showinfo=0" width="300" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="videocap">Baby It's Cold Outside - Nate &amp; Kate</p>
		</div>

	</div>

	<hr>

	<a name="podcast"></a>
	<div class="row podcast column">
		<div class="sectionhead text-center">
			<h2>PODCAST</h2>
				<p class="medialink"><a href="https://itunes.apple.com/us/podcast/nate-leonard-podcast/id1067894321?mt=2">iTunes</a> | <a href="http://www.stitcher.com/podcast/nate-leonard-podcast" target="_blank">Stitcher</a> 
				</p>
		</div>
		<div class="podcastvid">
			<div class="flex-video">
	        	<iframe src="https://www.youtube.com/embed/D_tQ1SRRzjk?showinfo=0" width="300" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="videocap">NLP #3 Health, Fitness, and Exercise w/ Sarah Jimenez</p>
		</div>


	</div>

	<hr>

	<a name="bio"></a>
	<div class="row bio">
		<div class="sectionhead text-center">
			<h2>BIO</h2>
		</div> 
		
		<div class="biocolumn">
			<p class="biop">Nate Leonard is a singer-songwriter, guitarist, podcaster, and writer, based out of Austin, TX.</p>
			<p class="biop">After picking up the guitar at age 11, Nate quickly realized he had found his life's calling. As a teenager, he honed his craft as a guitarist and singer-songwriter and later went on to attend the prestigious Berklee College of Music in Boston, MA. After leaving Berklee, Nate moved to Austin, TX to pursue his career in music. Citing a wide array of influences, Nate writes his music to connect with people, and share his story with his audience.</p>
			<p class="biop">In addition to being a singer-songwriter, Nate is the host of the 'Nate Leonard Podcast', where each week he discusses everything from creativity, to productivity, to the meaning of life, with incredible thinkers, artists, and creators. The 'Nate Leonard Podcast' is available on iTunes, Stitcher, SoundCloud, And Youtube. </p>
			<!--<div>
			<img class="thumbnail" width="220" src="img/bio3.jpg">
			<img class="thumbnail" width="495" src="img/bio.jpg">
			</div>-->
		</div>

	</div>

	<hr>

	<a name="contact"></a>
	<div class="row contact">
		<div class="sectionhead text-center">
			<h2>CONTACT</h2>
			<p class="medialink">
				<a href="https://twitter.com/mrnateleonard" target="_blank">
					<img class="socialicon" src="img/twitter.svg">
				</a>
				<a href="https://www.instagram.com/nateleonardmusic/" target="_blank">
					<img class="socialicon" src="img/instagram.svg">
				</a>
				<a href="https://www.facebook.com/NateLeonardMusic/?fref=ts" target="_blank"><img class="socialicon" src="img/facebook.svg"></a>
				<a href="https://www.youtube.com/channel/UCGrI9qoFSCKcyMGw0ZyIwMw" target="_blank"><img class="socialicon" src="img/youtube.svg"></a>
			</p>
		</div> 
		
		<div class="contactcol">
			<form method="post" action="index.php">
			<div class="row formfield">
			<div class="large-6 columns">
			  <label>
			    <input type="text" name="senderFname" maxlength="50" size="30" placeholder="First Name*" required/>
			  </label>
			</div>
			<div class="large-6 columns">
			  <label>
			    <input type="text" name="senderLname" maxlength="50" size="30" placeholder="Last Name*" required/>
			  </label>
			</div>
			</div>
			<div class="row formfield">
			<div class="large-12 columns">
			    <input type="text" name="senderEmail" maxlength="80" size="30" placeholder="Email*" required/>
			  </label>
			</div>
			</div>
			<div class="row formfield">
			<div class="large-12 columns">
			    <textarea class="message" type="text" name="message" maxlength="1000"></textarea>
			  </label>
			</div>
			</div>

			<input class="sendbutton" type="submit" name="submit" value="Send message">
			</form>

		<?=$thankYou ?>

		</div>
	</div>

</div> <!--end web content-->

<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script type="text/javascript" src="foundation-6/js/foundation.js"></script>
<!--<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script> -->
<script type="text/javascript" src="main.js"></script>
<script>
      $(document).foundation();
</script>
</body>
</html>
