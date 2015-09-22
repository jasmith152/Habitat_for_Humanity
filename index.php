<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
  <meta name="description" content="" />
  <title>Title</title>
  <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
<SCRIPT TYPE="text/javascript" src="slideshow.js"></SCRIPT>
<SCRIPT TYPE="text/javascript">
<!--

SLIDES = new slideshow("SLIDES");
SLIDES.timeout = 3000;
SLIDES.prefetch = -1;
SLIDES.repeat = true;

s = new slide();
s.src =  "images/slide1.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide2.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide3.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide4.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/slide5.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

if (false) SLIDES.shuffle();

//-->
</SCRIPT>
</head>

<body topmargin="10" marginheight="10">
 <div align="center">
<?php
include 'header.html';
?>
 <table id="content" width="960" cellpadding="0" cellspacing="0" border="0">
  <tr>
<?php
include 'leftcol.html';
?>
   <td id="main-col" valign="top">
    <p align="center"><img src="images/slide1.jpg" width="638" height="304" id="SLIDESIMG" name="SLIDESIMG" STYLE="filter:progid:DXImageTransform.Microsoft.Fade()" /></p>
<SCRIPT type="text/javascript">
<!--
if (document.images) {
  SLIDES.image = document.images.SLIDESIMG;
  SLIDES.textid = "SLIDESTEXT";
  SLIDES.update();
  SLIDES.play();
}
//-->
</SCRIPT>
    <table id="home-content" cellspacing="0" cellpadding="0" border="0"><tr>
     <td><img src="images/content-left-top.jpg" border="0" height="17" width="317" style="margin: 0px; padding: 0px;" /></td>
     <td align="right"><img src="images/content-right-top.jpg" border="0" height="17" width="317" style="margin: 0px; padding: 0px;" /></td>
    </tr>
    <tr>
     <td id="home-content-left" align="left" valign="top">
			<div style="width:310px"><h1>News</h1>
<?php
$file_contents = file_get_contents('content/home-news.html');
echo stripslashes($file_contents);
?></div>
     </td>
     <td id="home-content-right" align="left" valign="top">
      <p align="center"><img src="images/upcoming-events.png" alt="Upcoming Events" title="Upcoming Events" border="0" height="32" width="290" /></p>
<?php
$file_contents = file_get_contents('content/home-upcoming-events.html');
echo stripslashes($file_contents);
?>
		 </td>
    </tr>
    <tr>
     <td><img src="images/content-left-bottom.jpg" border="0" height="20" width="317" style="margin: 0px; padding: 0px;" /></td>
     <td align="right"><img src="images/content-right-bottom.jpg" border="0" height="20" width="317" style="margin: 0px; padding: 0px;" /></td>
    </tr></table>
   </td>
  </tr>
 </table>
<?php
include 'footer.html';
?>
 </div>
</body>
</html>
