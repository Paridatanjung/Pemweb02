<?php 
require_once 'db_koneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM vendor WHERE id=?";
$st = $conn->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:list_vendor.php');
?>