<!DOCTYPE html>
<html>
<head>
<title>ODC - Feedback Confirmation</title>

<link rel="stylesheet" href="CSS/oddduckcomm.css" type="text/css">
	
<?php
    $msg = "Name: ".$_POST['user']."\n";
    $msg .= "Email: ".$_POST['email']."\n";
    $msg .= "Message: ".$_POST['message']."\n";
    
    $recipient = "epas001@hotmail.com";
    $subject = "Eric has Email Skills";
    $mailheaders = "From: My Future Web Site <ericmpas@ericmpastore.com> \n";
    $mailheaders .= "Reply-To: ".$_POST['email'];
    
    mail($recipient, $subject, $msg, $mailheaders);
?>

<!--
This page serves as a feedback form for oddduckcomm.com. Later, it may also incorporate a Q & A section and/or release notes.
-->
</head><!--end of head-->
<body>
<div id="body">
    <header>
    
	<h1 id="sitename">Odd Duck Communication - Feedback</h1>

    </header><!--end of header-->
<div id="nav">

</div><!--end of nav div-->
<div id="content">
<div id="content1">


</div><!--end of content1-->
</div><!--end of content div-->
<footer>
<a class="feedback" href="feedback.html">Provide Feedback</a>
<a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
</a><!--end of HTML5 logo-->
</footer><!--end of footer-->
</div><!--end of body div-->
<div id="masternav">
<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="bio.html">Bio</a></li>
	<li><a href="projects.html">Projects</a></li>
	<li><a href="media.html">Media</a></li>
	<li><a href="getinspired.html">Get Inspired</a></li>
	<li><a class="current" href="feedback.html">Contact</a></li>
</ul>
</div><!--end of masternav div-->
</body>
</html>