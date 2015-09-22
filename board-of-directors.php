<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
  <meta name="description" content="" />
  <title>Title</title>
  <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
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
    <h1>Board of Directors</h1>
						<p align="right"><a href="/secure/">Board of Directors Login</a></p>
						<div align="center">
<?php
$file_contents = file_get_contents('content/board-of-directors.html');
echo stripslashes($file_contents);
?>
						</div>
						<p></p>
						<p></p>
					</td>
  </tr>
 </table>
<?php
include 'footer.html';
?>
 </div>
</body>
</html>
