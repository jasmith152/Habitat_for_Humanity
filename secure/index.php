<?php
$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");
?>

<HTML>
<HEAD>
  <META NAME="GENERATOR" CONTENT="Microsoft FrontPage 5.0">
  <TITLE>HFHCC - April 2010 Board Package</TITLE>

</HEAD>
<BODY>
<font face="Verdana">

<table border="2" bordercolor="#0B5288" width="999" id="table1">
  <tr>
    <td width="520"><div align="center"><img src="http://www.habitatcc.org/images/logo.jpg" alt="HFHCC" width="360" height="94" border="0"></div></td>
    <td width="461"><H3 align="center">&nbsp;</H3>
      <H3 align="center">BOARD MEMBERS INSIDE INFORMATION</H3>
      <P align="center">         <a href="http://www.habitatcc.org/index.html">HFHCC HOME</a>
    <p>&nbsp;</td>
  </tr>
</table>

<?php
$file_contents = file_get_contents('../content/board-members-home.txt');
echo stripslashes($file_contents);
?>

</BODY>
</HTML>