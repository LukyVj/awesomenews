<?php 
$url =   'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$link= preg_replace('~(\?|&)thanks.[^&]*~','$1',$url);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AweCSSome Newsletter</title>
    <meta charset="utf-8">
    
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Special project, special landing page -->

<div id="clouds">
	<div class="cloud x1"></div>
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>
<div id="" class="landscape big"></div>
<div id="" class="landscape small"></div>

<!-- End of special -->
<div id="show">
	<h1 id="thanks">Thanks <span class="entypo-thumbs-up"></span></h1>
	<div class="thanks-block">
			<p>We will notify you as soon as the newsletter will be ready.</p>
			<p>Spread the word</p>
			<p><span class="entypo-down-circled"></span></p>

		<ul>
			<li><a href="http://www.twitter.com/share?url=<?php echo $link ?>&text=I+just+subscribe+to+this+Awesome+CSS/Interweb+newsletter+You+should+take+a+look+at+it+%23awecssome">Tweet it <span class="entypo-twitter-circled"></span></a></li>
			<li><a href="http://www.facebook.com/sharer.php?s=100&p[title]=Subscribe%20to%20an%20AweCSSome%20newsletter&p[url]=<?php echo $link ?>&p[summary]=Do%20you%20think%20you%20are%20Up%20to%20date%20with%20css%20and%20interweb%20stuff%20?">Share on facebook <span class="entypo-facebook-circled"></span></a></li>
			<li><a href="mailto:?&subject=Subscribe%20to%20an%20AweCSSome%20newsletter&body=I%20just%20subscribe%20to%20this%20Awesome%20CSS/Interweb%20newsletter%20You%20should%20take%20a%20look%20at%20it">Mail it <span class="entypo-mail"></span></a></li>
		</ul>
	</div>
</div>

<script charset="utf-8" src="http://lab.web-gate.fr/prefixfree.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>

