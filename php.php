<?php
//show===================================================================>>>>
$con = mysqli_connect('localhost','root','','tab');

if(isset($_GET['update'])){
	$up_id = $_GET['update'];
	
$sel = "SELECT * FROM lis WHERE id= '$up_id'";
$res = mysqli_query($con,$sel);

$row = mysqli_fetch_assoc($res);
$id = $row['id'];
$pro = $row['pro'];
$cas = $row['cas'];
$cou = $row['cou'];
$bra = $row['bra'];
$qua = $row['qua'];
$pri = $row['pri'];
}
?>



<?php
// Delete ==========================================================================>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$con = mysqli_connect('localhost','root','','tab');
if(isset($_GET['delete'])){
$del_id = $_GET['delete'];
$del = "DELETE FROM lis WHERE id = '$del_id'";
mysqli_query($con,$del);
header("location: index.php");
}
?>




<?php
if(isset($_POST['sub'])){
	$pro = $_POST['pro'];
	$cas = $_POST['cas'];
	$cou = $_POST['cou'];
	$bra = $_POST['bra'];
	$qua = $_POST['qua'];
	$pri = $_POST['pri'];
	
$con = mysqli_connect('localhost','root','','tab');
$sql = "INSERT INTO lis(pro,cas,cou,bra,qua,pri) VALUES('$pro','$cas','$cou','$bra','$qua','$pri')";
$que = mysqli_query($con,$sql);
include_once("save.php");
}
?>