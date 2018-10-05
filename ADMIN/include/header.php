<?
	session_start();
	if(!isset($_SESSION['aduser']))
	{
		header('Location:adlogin.php');
	}
?>
<html>
<head>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FFFFFF">
<table border=2 width=100% height=100%  bordercolordark="#000000" bordercolorlight="#000000" >

<tr>
<th colspan=2 height=30%>
<img src="title.ico" width=100% height=200>
</th>
</tr>

<tr>
<td colspan=2 bgcolor="#66CCFF">

 <ul id="MenuBar1" class="MenuBarHorizontal">
   <li style="background-color:#66CCFF;"><a  href="adlife.php" style="background-color:#66CCFF;" >LIFE</a>
      <!-- <ul>
         <li><a href="#">Item 1.1</a></li>
         <li><a href="#">Item 1.2</a></li>
         <li><a href="#">Item 1.3</a></li>
       </ul>-->
   </li>
 

   <li style="background-color:#66CCFF;"><a  href="adhealth.php"  style="background-color:#66CCFF;">HEALTH</a>
   		<!--<ul>
         <li><a href="#">kunjan</a></li>
         <li><a href="#">Item 1.2</a></li>
         <li><a href="#">Item 1.3</a></li>
       </ul>-->
   </li>
 
 
   <li style="background-color:#66CCFF;"><a href="adcar.php"  style="background-color:#66CCFF;">CAR</a>
       <!--<ul>
         <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>
             <ul>
               <li><a href="#">Item 3.1.1</a></li>
               <li><a href="#">Item 3.1.2</a></li>
             </ul>
         </li>
         <li><a href="#">Item 3.2</a></li>
         <li><a href="#">Item 3.3</a></li>
       </ul>-->
   </li>
  

   <li style="background-color:#66CCFF;"><a  href="adtwo.php"  style="background-color:#66CCFF;">TWO</a>
   			<!--<ul>
               <li><a href="#">Item 3.1.1</a></li>
               <li><a href="#">Item 3.1.2</a></li>
            </ul>-->
    </li>
   
  
  
     <li style="background-color:#66CCFF;"><a  href="ademp.php"  style="background-color:#66CCFF;">EMPLOY</a>
   			<!--<ul>
               <li><a href="ademp.php">emp</a></li>
               <li><a href="adcust.php">cust</a></li>
            </ul>-->
    </li>
     <li style="background-color:#66CCFF;"><a  href="adcust.php"  style="background-color:#66CCFF;">CUSTOMER</a></li>
    
     <li style="background-color:#66CCFF;"><a href="adcontect.php"  style="background-color:#66CCFF;">TOLLFREE_NO - 1800180018</a></li>
     <li style="background-color:#66CCFF;"><a  href="adcontect.php"  style="background-color:#66CCFF;"> WHATSAPP_NO - 9898989898 </a></li>
      <li style="background-color:#66CCFF;"><a class="MenuBarItemSubmenu" href="#"  style="background-color:#66CCFF;"> ADMIN</a>
	  
   			<ul>
                <li><a href="#"><? echo $_SESSION['aduser'] ?></a></li>
               <li><a href="adlogout.php">LOG OUT</a></li>
              
            </ul>
    </li>

   
   
 </ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>


 </td>
</tr>

<tr>
<td valign="top">
	<table  width="100%" cellpadding="10">
	<tr>
	<td><a href="adhome.php">HOME</a></td>
	</tr>
   <!--<tr>
	<td><a href="adpayment.php">PAYMENT</a></td>
	</tr>-->
	<!--<tr>
	<td><a href="adpolicy.php">POLICY</a></td>
	</tr>-->
	<tr>
	<td><a href="form.php">FORM</a></td>
	</tr>
    <tr>
	<td><a href="upload.php">UPLOAD</a></td>
	</tr>
    <tr>
	<td><a href="replyad.php">QUERY</a></td>
	</tr>
    <tr>
	<td><a href="adreply.php">REPLY</a></td>
	</tr>
 
    <tr>
	<td><a href="adabout.php">ABOUT US</a></td>
	</tr>
  
	<tr>
	<td><a href="adcontect.php">CONTACT US</a></td>
	</tr>
	</table>
</td>
<td width=90% height=50%  valign="top">
