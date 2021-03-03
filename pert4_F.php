<?php
echo '<table border = 1 cellpadding = 6 cellspacing = 0 align=center>';
echo '<tr bgcolor="yellow" style="color: black;">';
echo '<th style="background:white;"> </th>';
for($i = 1; $i <= 12; $i++)
{
echo '<th>'.$i.'</th>';
}
echo '</tr>';
for($i = 1; $i <= 12; $i++)
{
echo '<tr>';
echo '<th bgcolor=yellow style="color: black;">'.$i.'</th>';
for($t = 1; $t <= 12; $t++)
{
  if($i==$t){
    $hasil = $i * $t;
    echo '<td align = center style="background:yellow;">'.$hasil.'</td>';
  }else{
$hasil = $i * $t;
echo '<td align = center>'.$hasil.'</td>';
}
}
echo '<tr>';
}
echo '</table>';
?>
