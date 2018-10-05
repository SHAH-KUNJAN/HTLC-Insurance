<?php session_start();?>
<html>
<head>
<title>MY FRIEND GURU</title>
<link rel="stylesheet" type="text/css" href="INCLUDE/CSS/style.css"/>
<script type="text/javascript" language="javascript" src="INCLUDE/JS/VALIDATION.js"></script>
</head>
<body bgcolor="#CC0000">
    	<table height="100%" width="100%" cellspacing="0">
        	<tr height="20%" id="setheadimg">
            	<td colspan="3" align="center" valign="middle">
                <p style="height:110px"></p>
                </td>
            </tr>
            <tr height="70%" id="setbodyimg">
            	<td valign="top" width="15%">
               	  <table cellspacing="0">
                    	<tr>
                        	<td id="cellimg"><a href="">Company</a></td>
                        </tr>
                       	<tr>
                        	<td id="cellimg"><a href="product.php">Product</a></td>
                        </tr>
                  </table>
                </td>
                <td valign="top">
                	<table height="100%" width="100%"><tr valign="top"><td>
                	<table width="100%">
                    	<tr>
                       	  <td><a href="">Company</a></td>
                            <td><a href="product.php">Product</a></td>
                            <td><p style="width:50px;"></p></td>
                            <td><font color="#FFFFFF" face="Courier New, Courier, monospace"><b><?php if(isset($_SESSION['unm']))
							{echo "WelCome ".$_SESSION['unm'];}?></b></font></td>
                            <?php if(isset($_SESSION['unm']))
							{echo "<td><a href='logout.php'>Log Out</a></td>";}?>
                        </tr>
                    </table>
                    </td></tr>
                  <tr align="center" valign="middle">
              	       	<td>