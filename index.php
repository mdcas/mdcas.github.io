<link rel="stylesheet" href="style.css">
<div class="dv"></div>
<img src="image/logo.gif">

<div>
<form method="post" name="form" onSubmit="return abc()" class="box">
Product <br><input type="text" class="a" name="pro" required><br>
Cas No <br><input type="text" class="a" name="cas" required><br>
Brand <br><input type="text" class="a" name="bra" required><br>
Country <br><input type="text" class="a" name="cou" required><br>
Quantitiy <br><input type="text" class="a" name="qua" required><br>
Place <br><input type="text" class="a" name="pri" required><br><br>
<input type="submit" value="Save Data" class="a" name="sub">
<div id="message"></div>
<?php
include('php.php');
include('java.js');
?>
</form>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Product Name..." title="Type in a name">


<table id="tbl2">
<tr>
<th id="haf2">ID</th>
<th id="three2">Product</th>
<th id="one2">Cas No</th>
<th id="one2">Brand</th>
<th id="one2">Country</th>
<th id="one2">Quantitiy</th>
<th id="one2">Rack</th>
<th id="haf2">Update</th>
<th id="haf2">Delete</th>
</tr>
</table>
<br>
<br>



<table id="myTable">
<?php
// show db ==========================================================================>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$i = 1;
$con = mysqli_connect('localhost','root','','tab');
$sel = "SELECT*FROM lis ORDER BY pro";
$res = mysqli_query($con,$sel);

while($row = mysqli_fetch_assoc($res)){
$id = $row['id'];
$pro = $row['pro'];
$cas = $row['cas'];
$cou = $row['cou'];
$bra = $row['bra'];
$qua = $row['qua'];
$pri = $row['pri'];
?>


<tr>
<td id="haf"><?php echo $i; ?></td>
<td id="three"><?php echo $pro; ?></td>
<td id="one"><?php echo $cas; ?></td>
<td id="one"><?php echo $bra; ?></td>
<td id="one"><?php echo $cou; ?></td>
<td id="one"><?php echo $qua; ?></td>
<td id="one"><?php echo $pri; ?></td>
<td id="haf"><a href= "update.php?update= <?php echo $id;?>" class="up" ><button class="update">Update</button></a></td>
<td id="haf"><a href= "index.php?delete= <?php echo $id;?>" class="dl" onClick="return confirm('Do You Want Delete !')"><button class="delete">Delete</button></a></td>
</tr>
<?php
$i++; } ?>
</table>

