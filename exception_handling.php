<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
<label>Enter numerator</label><input type='number' name='num'><br>
<label>Enter denominator</label><input type='number' name='deno'><br>";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $num = $_POST['num'];
    $deno = $_POST['deno'];
    echo "<input type='number' name='data' value=$num/$deno readonly">;
}
?>