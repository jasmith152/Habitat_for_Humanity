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
s.src =  "images/restore-slide1.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/restore-slide2.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/restore-slide3.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/restore-slide4.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

s = new slide();
s.src =  "images/restore-slide5.jpg";
s.text = unescape("");
s.link = "";
s.target = "";
s.attr = "";
s.filter = "";
SLIDES.add_slide(s);

if (false) SLIDES.shuffle();

//-->
</SCRIPT>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="js/loopedcarousel.js"></script>
<script type="text/javascript" src="js/jquery.ImageOverlay.js"></script>
<script type="text/javascript" src="js/jquery.biggerlink.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>

<script type="text/javascript">
//<![CDATA[
$('html').addClass('js');
$(document).ready(function() {

$('#boxholder').hover(
        function() { $('#controls').fadeIn(); },
        function() { $('#controls').fadeOut();
        });

	    $('.pauseplay').toggle(
            function() {
            $('#box_inner').cycle('pause');
            $(this).html('<img src="http://www.morrishabitat.org/images/restore/controls_play.gif" width="26" height="21" alt="play" title="play" />');
            },
            function() {
            $('#box_inner').cycle('resume', true);
            $(this).html('<img src="http://www.morrishabitat.org/images/restore/controls_pause.gif" width="26" height="21" alt="pause" title="pause" />');
    });
$('#box_inner').css('overflow', 'hidden');
    $('#box_inner').cycle({
    fx: 'fade',
	cleartypeNoBg: 1,
	pause: 1,     // true to enable "pause on hover"
	speed: 500,
	timeout: 4000,
	next: '#next',
	prev: '#prev'
    });

// youtube colorbox stuffarooni doing it this way so it works in tandem with biggerlink
$('a.videos').bind('click',function(){
        $.fn.colorbox({
            href:$(this).attr('href'), // grab the url for colorbox
            title:$(this).attr('title'), // grab the title
            innerWidth:"500px",
            innerHeight:"300px",
            iframe:true,
            opacity: 0,
            initialWidth:"100px",
            initialHeight: "100px"
        });
        return false; 
    });

// youtube biggerlink
$('#youtube dl').biggerlink();

// Adding support for :last-child for IE FOR last video in scroller on home page
	$('#youtube dl:last-child').addClass('iesuckszz');

// Adding support for :last-child for IE FOR last news item on home page
	$('#content .home .news dd:last-child').addClass('iesucksz');
//colorbox stuffarooni
$(".constantcontact").colorbox({innerWidth:"400px", innerHeight:"300px", iframe:true, opacity: 0, initialWidth:"100px", initialHeight: "100px"});

// Adding support for :nth-child for IE FOR right column of footer
$('.righty dl:nth-child(4)').addClass('iesucks');

//Adding external link icon
$("a[rel='external']").append("<span class='external'>&nbsp;<\/span>").attr('title','external link');

   $(window).scroll(function() {
	if($(this).scrollTop() != 0) {
        $('#toTop').fadeIn();	
        } else {
        $('#toTop').fadeOut();
        }
   });
   $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
   });



});
//]]>
</script>
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
    <h1>Shop</h1>
						<p>The Habitat ReSTORES</p>
						<p><strong><font size="3">Store Hours: Monday - Saturday 9 A.M. - 5 P.M</font></strong></p>
						<div align="center">
							<table width="180" border="0" cellspacing="4" cellpadding="0">
								<tr>
									<td colspan="3">SHOP! Habitat ReStores have home improvement items, furniture, decor and appliances at prices far below retail costs. Check out our &quot;Photos&quot; section on this website for pictures of new arrivals and plan to visit the Habitat ReStore near you soon. Every purchase helps build homes for needy families.</td>
								</tr>
								<tr>
									<td colspan="3"><img src="images/restore-slide1.jpg" width="605" height="320" border="0" id="SLIDESIMG" name="SLIDESIMG" STYLE="filter:progid:DXImageTransform.Microsoft.Fade()" /></td>
								</tr>
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
								<tr>
									<td>
										<div align="center">
											3685 East Forest Dr. Inverness, FL 34450<br />
											Get Directions &bull; 352-341-1800</div>
									</td>
									<td></td>
									<td>
										<div align="center">
											7800 W. Gulf to Lake Hwy., Crystal River, FL 34429<br />
											Get Directions &bull; 352-564-2300</div>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<hr width="80%" />
									</td>
								</tr>
								<tr>
									<td>
										<div align="center">
											<a href="http://www.facebook.com/InvernessReStore" target="_blank"><img src="images/logo-Facebook-1.png" alt="" width="80" height="80" border="0" /></a> <a href="http://twitter.com/H4hinvrestore" target="_blank"><img src="images/logo-Twitter.png" alt="" width="80" height="80" border="0" /></a></div>
									</td>
									<td></td>
									<td>
										<div align="center">
											<a href="http://www.facebook.com/h4hrestorecr" target="_blank"><img src="images/logo-Facebook-1.png" alt="" width="80" height="80" border="0" /></a> <a href="http://www.twitter.com/h4hRestorecr" target="_blank"><img src="images/logo-Twitter.png" alt="" width="80" height="80" border="0" /></a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div align="center">
											<a name="maps"></a>
      <strong>Inverness Location</strong><br />
      <iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3685+East+Forest+Dr.,+Inverness+34450&amp;sll=28.805436,-82.532022&amp;sspn=0.009664,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=3685+E+Forest+Dr,+Inverness+Highlands+North,+Citrus,+Florida&amp;ll=28.855574,-82.370338&amp;spn=0.026311,0.029182&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3685+East+Forest+Dr.,+Inverness+34450&amp;sll=28.805436,-82.532022&amp;sspn=0.009664,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=3685+E+Forest+Dr,+Inverness+Highlands+North,+Citrus,+Florida&amp;ll=28.855574,-82.370338&amp;spn=0.026311,0.029182&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small></div>
									</td>
									<td></td>
									<td>
										<div align="center">
											<strong>Crystal River Location</strong><br />
      <iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=7800+%22W.+Gulf+to+Lake+Hwy.%22,+Crystal+River,+FL&amp;aq=&amp;sll=28.849184,-82.372913&amp;sspn=0.019321,0.033088&amp;ie=UTF8&amp;hq=&amp;hnear=7800+W+Gulf+to+Lake+Hwy,+Crystal+River,+Florida+34429&amp;ll=28.905027,-82.561483&amp;spn=0.026298,0.029182&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=7800+%22W.+Gulf+to+Lake+Hwy.%22,+Crystal+River,+FL&amp;aq=&amp;sll=28.849184,-82.372913&amp;sspn=0.019321,0.033088&amp;ie=UTF8&amp;hq=&amp;hnear=7800+W+Gulf+to+Lake+Hwy,+Crystal+River,+Florida+34429&amp;ll=28.905027,-82.561483&amp;spn=0.026298,0.029182&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small></div>
									</td>
								</tr>
								<tr>
									<td align="center">Staff
											<table width="180" border="0" cellspacing="4" cellpadding="0">
												<tr>
													<td><img src="images/mug-Carmen-Perez.jpg" alt="" width="84" height="142" border="0" /></td>
													<td><img src="images/mug-Carmen-Perez.jpg" alt="" width="83" height="141" border="0" /></td>
													<td><img src="images/mug-Carmen-Perez.jpg" alt="" width="84" height="142" border="0" /></td>
												</tr>
											</table>
									</td>
									<td></td>
									<td>
<div class="holder">
<h2>Do-It-Yourself Videos <br />
<span style="font-size: 13px;">Helpful advice for home improvement tasks</span></h2>
<div id="youtube">
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/BlMM3rZN0ac&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/BlMM3rZN0ac/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>How To Install A Ceiling Fan</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/CfmYTdwV6is&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/CfmYTdwV6is/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>How to Help Control Mold and Mildew in Your Home</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/kW_SOu-AZyw&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/kW_SOu-AZyw/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>How To Install A Deadbolt Lock</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/ySxbBGWAOz4&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/ySxbBGWAOz4/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>How to Install a Laminate Closet Organizer - Do It Yourself</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/4SIRruC4N74&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/4SIRruC4N74/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>How To Choose Paint</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/oxOJbS-1AiM&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/oxOJbS-1AiM/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>How to Prep Surfaces Before You Paint</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/LRygPoOxRXo&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/LRygPoOxRXo/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>Tips to Organize Your Closet - Do It Yourself</dd>
</dl>
<dl>
<dt><a class="videos" href="http://www.youtube.com/v/Y0kE_zBLMtM&amp;feature=youtube_gdata&amp;hl=en" title="Do-It-Yourself Video"><img src="http://i.ytimg.com/vi/Y0kE_zBLMtM/0.jpg" width="96" height="72" alt="" /></a></dt>
<dd>Inspiring Ideas for Home Renovation and Home Remodeling</dd>
</dl>
</div><!-- close youtube -->
</div><!-- close holder -->
                  </td>
								</tr>
							</table>
						</div>
					</td>
  </tr>
 </table>
<?php
include 'footer.html';
?>
 </div>
</body>
</html>
