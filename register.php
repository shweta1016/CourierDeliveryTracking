<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
<link type="text/css" rel="stylesheet" href="css/style.htm">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style> 

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-weight: bold;
	color: #003399;
}
-->
</style>

</head>

<body>
<?php include("head.php"); ?>

	</td>
  </tr>
  


 <br/>
  <table border="0" align="center" width="100%">
    <tbody>
	<tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><span class="headtext13">Customer Register Page </span></td>
    </tr>
    
  </tbody>
  </table>
<form action="registerprocess.php" method="post" name="frmShipment" >
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="60%">
<tbody><tr>
<td width="60%">&nbsp;</td>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
    <td background="images/boxtopBG.gif" width="734"></td>
    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
  </tr>
  <tr>
    <td background="images/boxleftBG.gif"></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td height="18">&nbsp;</td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="4" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
               <td>&nbsp;</td><td></td> <div class="headtext13" align="left"><strong>Please Register page </strong></div>
            </div></td>
          </tr>
          <tr>
    
            <td class="TrackMediumBlue" align="right" width="200">Customer Name   :</td>
           
            <td>
			<input name="name" id="name" maxlength="100" size="40" type="TEXT" required>
                <span class="REDLink">*</span> </td>
                </td>
          </tr>
          <tr>
  
            <td class="TrackMediumBlue" align="right" width="138">Customer Phone   :</td>
            
            <td>
			<input name="phone" id="phone" maxlength="100" size="40" type="phone" required>
           <span class="REDLink">*</span> </td>
                </td>
          </tr>
          
<tr>
  
            <td class="TrackMediumBlue" align="right" width="138">Enter Email   :</td>
            
            <td>
			<input name="email" id="email" maxlength="100" size="40" type="email" required >
                   <span class="REDLink">*</span> </td>
                </td>
          </tr>
<tr>
          
            <td class="TrackMediumBlue" align="right" width="138">Enter password   :</td>
           
            <td>
			<input name="password" id="password" maxlength="100" size="40" type="password" required>
              <span class="REDLink">*</span> </td>
                </td>
          </tr>

<tr>
<td>&nbsp;</td>

         <td><input name="Submit" class="green-button" value="Register" type="submit" style="padding:5px 5px;font-weight:bold;">
</tr>        
</tbody></table></td>
      </tr>




      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background="images/boxrightBG.gif"></td>
  </tr>
  <tr>
    <td width="20"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
    <td background="images/boxbtmBG.gif" width="734"></td>
    <td width="20"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
  </tr>
</tbody></table>
<br>
</form> 
</td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>