<?php
$dsn = 'mysql:dbname=crudphp;host=127.0.0.1';
$user = 'root'; 
$password = '';
try {
	$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}
$id=$_GET['id'];
$count = $dbh->exec("DELETE FROM registro WHERE id = '$id'");

echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/crudJS/index.php'>
<script type=\"text/javascript\">
alert(\"Registro Excluido !\");
</script>";

?>



