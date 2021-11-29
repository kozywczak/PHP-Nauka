<?php 
include('db_connect.php');

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql="DELETE FROM auta WHERE id = $id LIMIT 1";
	mysqli_query($idpol, $sql);
	header("location: ../../index.php");
}
?>