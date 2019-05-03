<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Página de consulta</title>
    <link rel=stylesheet href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src=https://code.jquery.com/jquery-3.3.1.js></script>
    <script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
    
    <script>
        $(document).ready(function() {
            $('#list').DataTable();
        } );
    </script>

</head>
<body>
    <a href=start.php>Novo Cadastro</a>
    <br>
    <br>
    <table id="list" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Salário</th>
                <th>Data de Nascimento</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $dsn = 'mysql:dbname=crudphp;host=127.0.0.1';
            $user = 'root'; 
            $password = '';
            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
            $sql = 'SELECT * FROM registro ORDER BY id != null, nome';
            foreach ($dbh->query($sql) as $row) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['salario']."</td>";
                echo "<td>".$row['dataNascimento']."</td>";
                echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
                echo "<td><a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Salário</th>
                <th>Data de Nascimento</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>