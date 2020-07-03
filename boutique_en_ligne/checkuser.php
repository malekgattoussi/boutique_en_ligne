<?php
$hosname="loclahost";
$username="root";
$password="";
$dbname="boutique_en_ligne";

 $conn = mysqli_connect("localhost", "root", "", "boutique_en_ligne");
if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}
$query =mysqli_query($conn,"select * from items");
?>


<html>
<head>
    <title>liste items</title>
</head>
<body>
    <center>
<form  method="post" >
    <table border="5">
    	<tr>
       
        <th>liste items</th>    
    </tr>
    <?php 
    while ($row = mysqli_fetch_array($query)) {
    echo"<tr>";
    echo"<td>".$row['description']."</td>";
    echo"</tr>";
    }
    echo"</table>";
    ?>
</form>
<?php 
mysqli_close($conn);?>




</center></form>

</body>
</html>