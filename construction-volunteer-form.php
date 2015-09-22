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
 <table id="content" width="827" cellpadding="0" cellspacing="0" border="0">
  <tr>
<?php
include 'leftcol.html';
?>
   <td id="main-col" valign="top">
						<h1>Construction Volunteer Form</h1>
						<div align="center">
							<table border="0" cellspacing="2" cellpadding="0">
								<tr>
									<td colspan="3">
										<form action="/cgi-bin/FormMail.pl" method="post" name="construction-volunteer">
											<div align="left">
												<p><strong><font size="3">Volunteer Interest Sign-Up Form<br />
																(please check all that apply)</font></strong></p>
												<p><font size="3"><b><i>Do you want to...</i></b> </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
												<p><i>&nbsp;</i><strong>CONSTRUCTION</strong></p>
												<p><b><i>#1. Build homes with Habitat's regular volunteers, 8 a.m. &#150; noon?</i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> Tuesday or Thursday construction crew</p>
												<p><b><i>#2. Build homes with Habitat's regular volunteers, 8 a.m. to 3 p.m.?</i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> Saturday construction crew</p>
												<p><b><i>#3. Organize the annual Women Build Day project, and/or do construction Saturday, May 5, 2012?</i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> Women Build Day</p>
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><b><i>#4. Assist frail homeowners with exterior maintenance such as painting, minor repairs, landscaping, weatherization, and yard clean up?</i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> A Brush With Kindness</p>
												<hr width="70%" />
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><strong>HABITAT ReSTORE</strong></p>
												<p><b><i>#1. Travel with ReStore drivers to pick up and move large donations?</i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" />Truck</p>
												<p><b><i>#2. Clean and sort donations, stock store shelves, or work register?</i></b></p>
												<p>&nbsp;<input type="checkbox" name="checkboxName" value="checkboxValue" />Retail</p>
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><b><i>#3. Salvage reclaimed materials with a work crew led by the ReStore?</i></b></p>
												<p>&nbsp;<input type="checkbox" name="checkboxName" value="checkboxValue" />Deconstruction&nbsp;</p>
												<hr width="70%" />
												<p><strong>COMMITTEES/OFFICE</strong></p>
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><b><i>#1. Help four or more hours a week in Crystal River with phone, mailings, and data entry? Computer skills helpful!</i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> Office</p>
												<p><b><i>#2. Identify and mentor new Habitat partner families as they enter and complete the Habitat program?&nbsp; </i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" />Board Committee: Family Services</p>
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><b><i>#3. Help organize and work at special events to build financial support?&nbsp; </i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> Board Committee: Development</p>
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><b><i>#4 Write articles or take pictures for Habitat newsletter and website?&nbsp; </i></b></p>
												<p><input type="checkbox" name="checkboxName" value="checkboxValue" /> Board Committee: Public Relations</p>
											</div>
											<p><u></u></p>
											<div align="left">
												<hr width="70%" />
												<p><strong>YOUTH VOLUNTEERS</strong></p>
											</div>
											<p><b><i></i></b></p>
											<div align="left">
												<p><b><i>#1. Recruit and organize or participate in service opportunities for youth under 18 years old?</i></b></p>
												<p>&nbsp;<input type="checkbox" name="checkboxName" value="checkboxValue" /> Youth Volunteers &nbsp;</p>
												<hr width="70%" />
												<p><strong>OTHER - </strong>What do you want to do?</p>
											</div>
											<p><b><i></i></b></p>
											<p><u></u></p>
											<div align="left">
												<p><textarea name="textareaName" rows="13" cols="82"></textarea></p>
												<hr width="70%" />
												<p><strong><font size="3">Tell us about you...</font></strong></p>
												<p>* Required fields</p>
												<ul type="disc">
													<li>First Name *<input type="text" name="First Name" size="24" /></li>
													<li>Last Name *<input type="text" name="Last Name" size="24" /></li>
													<li>Email Address *<input type="text" name="email" size="24" /></li>
													<li>Confirm Email Address *<input type="text" name="confirm email" size="24" /></li>
													<li>Phone Number *<input type="text" name="Phone" size="24" /></li>
													<li>I prefer to be contacted by: <input type="radio" name="contact by" value="Email" />Email <input type="radio" name="contact by" value="Phone" />Phone</li>
													<li>Street Address *<input type="text" name="Address" size="24" /></li>
													<li>City, State, Zip *<input type="text" name="City State Zip" size="24" /></li>
													<li>Date of Birth *<input type="text" name="DOB" size="24" /></li>
													<li>Employer, Group, or Church Name (if you represent a group that is interested in volunteering)<input type="text" name="Organization" size="88" /></li>
													<li>Previous experience with Habitat for Humanity? Explain.<textarea name="Previous Exp with Habitat" rows="13" cols="82"></textarea></li>
												</ul>
												<p></p>
											</div>
											<p align="center"><input type="submit" name="submit" value="Send" /> &nbsp; <input type="reset" name="reset" value="Reset" /></p>
										</form>
									</td>
								</tr>
							</table>
						</div>
						<p></p>
						<p></p>
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
