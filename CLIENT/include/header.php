<?
	session_start();
	/*if(!isset($_SESSION['user']))
	{
		header('Location:login.php');
	}*/
?>
<html>
<head>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#EEEEEE">
<table border=2 width=100% height=100%>

<tr>
<th colspan=2 height=30%>
<img src="title.ico" width=100% height=200>
</th>
</tr>

<tr>
<td colspan=2 bgcolor="#66CCFF">

 <ul id="MenuBar1" class="MenuBarHorizontal">
       <li style="background-color:#66CCFF;"><a href="home.php" style="background-color:#66CCFF;">HOME</a></li>
   <li style="background-color:#66CCFF;"><a class="MenuBarItemSubmenu" href="life.php" style="background-color:#66CCFF;" >LIFE</a>
       <ul>
         <li><a href="hdfclife.php">Life  Sanchay</a></li>
         <li><a href="liclifejee.php">LIC NEW JEEVAN ANAND</a></li>
         <li><a href="liclifejeevan.php">LIC AMILYA JEEVAN</a></li>
       </ul>
   </li>
 

   <li style="background-color:#66CCFF;"><a class="MenuBarItemSubmenu" href="health.php"  style="background-color:#66CCFF;">HEALTH</a>
   		<ul>
         <li><a href="bhartiaxahealth.php">BHARTI AXA</a></li>
         <li><a href="relincehealth.php">HEALTH INSURANCE</a></li>
        
       </ul>
   </li>
 
 
   <li style="background-color:#66CCFF;"><a class="MenuBarItemSubmenu" href="car.php"  style="background-color:#66CCFF;">CAR</a>
       <ul>
         <li><a class="MenuBarItemSubmenu" href="policar.php">BAJAJ ALIANS CAR INSURANCE</a>
          <li><a class="MenuBarItemSubmenu" href="policar1.php">ICICI CAR INSURANCE</a>
           
         </li>
       
       </ul>
   </li>
  

   <li style="background-color:#66CCFF;"><a class="MenuBarItemSubmenu" href="two.php"  style="background-color:#66CCFF;">TWO</a>
   			<ul>
               <li><a href="iffcotwo.php">TWO WHEELER</a></li>
               <li><a href="lttwo.php">L&T TWO WHEELER</a></li>
            </ul>
    </li>    
     <li style="background-color:#66CCFF;"><a class="MenuBarItemSubmenu" href="adcontect.php"  style="background-color:#66CCFF;">SUPORT</a>
   			<ul>
               <li><a href="adcontect.php">1800180018<br>[TOLLFREE_NO]</a></li>
               <li><a href="adcontect.php">WHATSAPP_NO<br>9898989898</a></li>
            </ul>
    </li>
     <li style="background-color:#66CCFF;"><a href="emplogin.php"style="background-color:#66CCFF;">
     <? if(isset($_SESSION['emp']))
			{
				echo $_SESSION['emp'] ;
				?>
                </a>
                <ul>
               <li><a href="emplogout.php">LOGOUT</a></li>
               </ul>
	<?     }
		else
		{
			echo "AGENT<br>LOGIN";
		}
	?>
        </a></li>
		
       <li style="background-color:#66CCFF;"><a href="login.php"style="background-color:#66CCFF;">
	  <? if(isset($_SESSION['user']))
			{
				echo $_SESSION['user'] ;
				?>
                </a>
                <ul>
               <li><a href="logout.php">LOGOUT</a></li>
               </ul>
			
			<? }
			else
			{
				echo "LOGIN";
			}
		?>
        </a></li>
      
 </ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>


 </td>
</tr>

<tr>
<td width=90% height=50%  valign="top">
