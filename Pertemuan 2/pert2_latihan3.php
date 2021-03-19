<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<form action="" method="POST">
 Nilai 1 : <input type="text" name="bilangan1">
 <select name="pilih">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
                <option value="/">/</option>
 </select>
 Nilai 2 : <input type="text" name="bilangan2">
 <input type="submit" name="hitung" value="submit">
 </form>
</body>
</html>

<?php  
 if(isset($_POST['hitung'])){
  $bil1 = $_POST['bilangan1'];
  $bil2 = $_POST['bilangan2'];
  $pilih = $_POST['pilih'];

  if($pilih){
   if($bil1 == "" || $bil2 == ""){
    ?> <script>alert("Nilai nya belum diisi!"); </script> <?php
   }elseif($pilih == '+'){
    $hasil = $bil1 + $bil2;
    echo " $bil1 + $bil2 = ".$hasil;
   }elseif($pilih == '-'){
    $hasil = $bil1 - $bil2;
    echo " $bil1 - $bil2 = ".$hasil;
   }elseif($pilih == '*'){
    $hasil = $bil1 * $bil2;
    echo " $bil1 * $bil2 = ".$hasil;
   }elseif($pilih == '/'){
    $hasil = $bil1 / $bil2;
    echo "$bil1 / $bil2 = ".$hasil;
   }
  }
 }
?>
