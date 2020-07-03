<?php
$hosname="loclahost";
$username="root";
$password="";
$dbname="boutique_en_ligne";

 $conn = mysqli_connect("localhost", "root", "", "boutique_en_ligne");
if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}
if(isset($_POST['delete'])){
	$tes = $_POST['checkbox'];
	foreach($tes as $id){
		mysqli_query($conn,"delete from items where id=".$id);
	}
	header("location:delete_records.php");
}

mysqli_close($conn);
?>