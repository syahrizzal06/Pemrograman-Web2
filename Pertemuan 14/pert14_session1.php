<?php 
session_start();
	if (isset($_POST['LOGIN'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
	if ($user === "SYAHRIZAL" && $pass = "26juni2000") {
		$_SESSION['LOGIN'] = $user;
		echo "<h1>ANDA BERHASIL LOGIN</h1>";
		echo "<center><h2>KLIK <a href='pert14_session2.php'>DISINI (session2.php)</h2><center>";
	}else {
	
	}
}
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
       	<style type="text/css">
		body { 
				font-family:times new roman; 
				font-size:12px; 
				background-image: url(franck.jpg);
				background-size: cover;
				background-color: white;
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
        <div class="container">
          <h1>LOGIN</h1>
            <form method="post">
                <label>USERNAME</label><br>
                <input type="text" name="user"><br>
                <label>PASSWORD</label><br>
                <input type="password" name="pass"><br>
                <input class="btn" type="submit" name="LOGIN" value="LOGIN">
            </form>
        </div>     
    </body>
</html>	