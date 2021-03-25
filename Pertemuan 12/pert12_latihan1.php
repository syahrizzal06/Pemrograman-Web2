<?php 


$con = mysqli_connect("localhost","root","","lat_database");

if (!$con) {
	die("Tidak dapat terhubung dengan database".mysqli_error());
}

$query =mysqli_query($con, "UPDATE tbl_mhs SET age ='36' WHERE firstName = 'Karina'AND lastName = 'Suwandi' ");
if ($query) {
	echo "<font color='gray' align='center'>
	<h1>DATA SUKSES DIUBAH</h1>
	</font>";
}


mysqli_close($con);


 ?>