<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Editar cadastro </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="
            background-color:white; border: 2px solid white; ">

            <center><img src="https://www.contasonline.com.br/img/IluCadastro.jpg" width="100px" height="100px"></center>
            <center> 
                <?php
                $dsn = 'mysql:dbname=crudphp;host=127.0.0.1';
                $user = 'root'; 
                $password = '';
                try {
                    $dbh = new PDO($dsn, $user, $password);
                } catch (PDOException $e) {
                    echo 'Connection failed: ' . $e->getMessage();
                }
                $id = $_GET['id'];
                $sql = "SELECT * FROM registro where id='$id' ";
                foreach ($dbh->query($sql) as $row) {
                    echo "<h1> Editar Cadastro</h1>
                    <hr>
                    <table>
                    <tr>
                    <td>
                    <form action=atualizar.php >
                    <div>
                    <input type=hidden name=id value=$id>
                    <label>Nome</label>
                    </div>
                    <div>
                    <input type=text name=nome value=".$row['nome'].">
                    <label>Salario</label>
                    </div>
                    <div>
                    <input type=text name=salario value=".$row['salario'].">
                    <label>Data de Nascimento</label>
                    </div>
                    <div>
                    <input type=text name=dataNascimento value=".$row['dataNascimento'].">
                    </div>
                    <br><br>
                    <center><input type=submit value=Salvar></center>
                    </form>";
                    
                }
                ?>
            </td>                 
        </tr>
    </table>
</div>
</center>
</div>
</div>
</div>
</body>
</html>

