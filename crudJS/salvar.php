<?php
$dsn = 'mysql:dbname=crudphp;host=127.0.0.1';
$user = 'root'; 
$password = '';
try {
	$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}


if (empty($_POST['id']) or empty($_POST['nome']) or empty($_POST['salario']) or empty($_POST['dataNascimento'])) {
	echo " 
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/crudJS/start.php'>
	<script type=\"text/javascript\">
	alert(\"Preencha todos os campos !\");
	</script>";
} else {
	
	
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$salario=$_POST['salario'];
	$dataNascimento=$_POST['dataNascimento'];
	$count = $dbh->exec("insert into registro(id, nome, salario, dataNascimento) 
		values('$id', '$nome', '$salario', '$dataNascimento') ");

	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/crudJS/index.php'>
	<script type=\"text/javascript\">
	alert(\"Cadastro Realizado !\");
	</script>";
	
}

