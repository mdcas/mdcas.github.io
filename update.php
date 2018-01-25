<?php
include('php.php');
include('java.js');
?>
<link rel="stylesheet" href="style.css">
<div class="dv"></div>
<img src="image/logo.gif">


<div class="b">
<form method="post" name="form" onSubmit="return abc()" class="box">
Product <br><input type="text" class="a" name="pro" value="<?php echo $pro;?>" required><br>
Cas No <br><input type="text" class="a" name="cas" value="<?php echo $cas;?>" required><br>
Brand <br><input type="text" class="a" name="bra" value="<?php echo $bra;?>" required><br>
Country <br><input type="text" class="a" name="cou" value="<?php echo $cou;?>" required><br>
Quantitiy <br><input type="text" class="a" name="qua" value="<?php echo $qua;?>" required><br>
Price <br><input type="text" class="a" name="pri" value="<?php echo $pri;?>" required><br><br>
<input type="submit" value="Update Data" class="a" name="update">
<div id="message"></div>
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



<table id="tbl">
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



<?php
if(isset($_POST['update'])){
	$up_pro = $_POST['pro'];
	$up_cas = $_POST['cas'];
	$up_cou = $_POST['cou'];
	$up_bra = $_POST['bra'];
	$up_qua = $_POST['qua'];
	$up_pri = $_POST['pri'];
	
$set = "UPDATE lis SET pro='$up_pro',cas='$up_cas',cou='$up_cou',bra='$up_bra',qua='$up_qua',pri='$up_pri' WHERE id= '$up_id'";
$que = mysqli_query($con,$set);
header("location:index.php");
include_once("up.php");

}
?>
