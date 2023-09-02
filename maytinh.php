<?php
error_reporting(0);
if(isset($_POST['submit'])){
$so1 = $_POST['so1'];
$so2 = $_POST['so2'];
echo 'Kết quả là '.($so1+$so2);
}
echo '
<center>
<div style="width: 300px;">
<div id="ketqua"></div>
<div id="pheptinh"></div>
</div>
<h1>Máy Tính</h1>
<form method="post">
<input type="text" name="so1" placeholder="Số thứ 1"><br>
<input type="text" name="so2" placeholder="Số thứ 2"><br>
<input type="submit" name="submit" value="Tính">
</form>
</center>';
?>