<?php  
include 'koneksi.php';

	$id_artikel= $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id='$id_artikel' ");
	$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Artikel</title>
	<style type="text/css">
		body { 
				font-family:tahoma; 
				font-size:12px; 
				background-image: url(juliana.jpg);
				background-size: cover;
				background-color: black;
			}
		#container { 
			width:450px; 
			padding:20px 40px; 
			margin:50px auto; 
			border:0px solid #555; 
			box-shadow:0px 0px 2px #555; 
			background:transparent;
			color: white;
		}

	input[type="text"] { width:200px; }
	input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
	#error { 
		border:1px solid red; 
		background:#ffc0c0; 
		padding:5px; }	
</style>
</head>
<body>
	<div id="container">
	<h1>Form Edit Data</h1>
		
		<form action="prosesedit.php" method="POST">
			<p>
				<input type="hidden" name="idartikel" value="<?= $row['id'];?>"/>
			</p>
			<p>
				<b>Judul :</b><br>
				<input type="text" name="title" value="<?= $row['judul_artikel'];?>" />
			</p>
			<p>
				<b>Penulis :</b><br>
				<input type="text" name="author" value="<?= $row['penulis_artikel'];?>" />
			</p>
			<p>
				<b>Lead :</b><br>
				<textarea name="abstraksi" rows="4" cols="30"> <?= $row['lead_artikel'];?></textarea>
			</p>
			<p>
				<b>Content :</b><br>
				<textarea name="konten" rows="8" cols="45"><?= $row['content_artikel'];?></textarea>
			</p>
			
			<p>
				<input type="submit" name="edit" value="Update" class="tombol"/> 
			</p>
		</form>
	</div>
</body>
</html>