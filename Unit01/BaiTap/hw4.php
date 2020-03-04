<h3 align="center">Bảng cửu chương</h3>
<table align="center" border="1px" cellpadding="1px" cellspacing="0">
<tr>
<?php
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>