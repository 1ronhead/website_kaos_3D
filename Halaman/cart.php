<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
<div id="header">
	<div id="container">
    
    	<img id="logo" src="../images/logo_300.png" alt="Mighty Shirt" />
        
        
        <ul id="nav">
        	<li><a href="../index.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="manshirt.php">Male<br />T-Shirt</a></li>
            <li><a href="womenshirt.php">Female T-Shirt</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        </div>
        </div>
    
    
    <div id="contain1">
    	<h2 align="center">Your Cart</h2>
    	<table id="table" align="center">
        <tr>
        	<td>No.</td>
            <td>Qty</td>
            <td>Product</td>
            <td>Price</td>
            <td>Total</td>
        </tr>
        <tr>
        	<td style="border-bottom: 1px dotted #09F;" colspan="5"></td>
        </tr>
        <tr>
        	<td>1</td>
            <td>
            <select id="qty" name="qty">
						<option value="1">1</option>
						<script type="text/javascript">
							for(i=1; i<=999; i++){
           	       				document.write("<option value='"+i+"'>"+i+"</option>");
							}
						</script>		
					</select>
            </td>
            <td>Rainbom T-shirt</td>
            <td>Rp.1.000.000,-</td>
            <td>Rp.1.000.000,-</td>
        </tr>
        </table>
        
    </div>
    
    
    <div id="footer">
		<center>
		<p>&copy; Copyright 2013 All Rights Reserved. </p>
		</center>
    </div> <!-- end of footer -->


</body>
</html>
