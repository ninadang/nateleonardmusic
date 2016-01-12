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
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="title-bar" data-responsive-toggle="navmenu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
</div>

<div class="top-bar" id="navmenu">
	<div class="top-bar-left">
		<ul class="menu">
			<li><a class="name" href="#">NATE LEONARD</a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<ul class="menu">
			<li><a href="#">MUSIC</a></li>
			<li><a href="#">VIDEOS</a></li>
			<li><a href="#">PODCAST</a></li>
			<li><a href="#">BIO</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>
	</div>
</div>
 
<div class="hero">
	<div class="text-center">
		<img alt="Nate Leonard" src="img/hero2.jpg">
	</div>
</div>

<div class="webcontent">
	<div class="row bandcamp">
		<div class="sectionhead text-center">
			<h2>MUSIC</h2>
		</div> 
		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=3925410816/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://nateleonard.bandcamp.com/track/a-brand-new-life-demo">A Brand New Life (Demo) by Nate Leonard</a></iframe>
		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=832257787/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://nateleonard.bandcamp.com/track/baby-its-cold-outside">Baby, It&#39;s Cold Outside by Nate Leonard</a></iframe>
		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/track=2243451340/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://nateleonard.bandcamp.com/track/silent-night">Silent Night by Nate Leonard</a></iframe>
	</div>
	<hr>
	<!--
	<div class="row">
		<div class="medium-4 columns">
		<h3>Photoshop</h3>
		<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
		</div>
		<div class="medium-4 columns">
		<h3>Javascript</h3>
		<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
		</div>
		<div class="medium-4 columns">
		<h3>Marketing</h3>
		<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
		</div>
	</div>
	-->
	<div class="row videos column">
		<div class="sectionhead text-center">
			<h2>VIDEOS</h2>
		</div>
		<div class="row medium-up-2 large-up-2">
		<div class="column">
			<div class="flex-video">
				<p>Holy Shit - Father John Misty</p>
	        	<iframe src="https://www.youtube.com/embed/wu7yt_Zt0Zw?showinfo=0" width="300" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="column">
			<div class="flex-video">
	        	<iframe src="https://www.youtube.com/embed/0mAJBGONCYI?showinfo=0" width="300" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	<!--
	<div class="column">
	<img class="thumbnail" src="http://placehold.it/550x550">
	</div>
	<div class="column">
	<img class="thumbnail" src="http://placehold.it/550x550">
	</div>
	<div class="column">
	<img class="thumbnail" src="http://placehold.it/550x550">
	</div>-->

	</div>

	<hr>

	<div class="row bio">
		<div class="sectionhead text-center">
			<h2>BIO</h2>
		</div> 
		
		<div class="bio column">
			<p>Nate Leonard is a singer-songwriter, guitarist, podcaster, and writer, based out of Austin, TX.</p>
			<p>After picking up the guitar at age 11, Nate quickly realized he had found his life's calling. As a teenager, he honed his craft as a guitarist and singer-songwriter and later went on to attend the prestigious Berklee College of Music in Boston, MA. After leaving Berklee, Nate moved to Austin, TX to pursue his career in music. Citing a wide array of influences, Nate writes his music to connect with people, and share his story with his audience.</p>
			<p>In addition to being a singer-songwriter, Nate is the host of the 'Nate Leonard Podcast', where each week he discusses everything from creativity, to productivity, to the meaning of life, with incredible thinkers, artists, and creators. The 'Nate Leonard Podcast' is available on iTunes, Stitcher, SoundCloud, And Youtube. </p>
		</div>
	</div>

	<hr>

		<div class="row contact">
			<div class="sectionhead text-center">
				<h2>CONTACT</h2>
			</div> 
			
			<div class="contactcol">
				<form method="post" action="index.php">
				<div class="row formfield">
				<div class="large-6 columns">
				  <label>
				    <input type="text" name="senderFname" maxlength="50" size="30" placeholder="First Name" />
				  </label>
				</div>
				<div class="large-6 columns">
				  <label>
				    <input type="text" name="senderLname" maxlength="50" size="30" placeholder="Last Name" />
				  </label>
				</div>
				</div>
				<div class="row formfield">
				<div class="large-12 columns">
				    <input type="text" name="senderEmail" maxlength="80" size="30" placeholder="Email" />
				  </label>
				</div>
				</div>
				<div class="row formfield">
				<div class="large-12 columns">
				    <textarea class="message" type="text" name="message" maxlength="1000"></textarea>
				  </label>
				</div>
				</div>

				<input type="submit" name="submit">
				</form>

			 <?=$thankYou ?> 

			</div>
		</div>


	<!--
	<div class="row column">
		<ul class="menu">
		<li><a href="#">One</a></li>
		<li><a href="#">Two</a></li>
		<li><a href="#">Three</a></li>
		<li><a href="#">Four</a></li>
		</ul>
	</div>
-->
</div> <!--end web content-->

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>