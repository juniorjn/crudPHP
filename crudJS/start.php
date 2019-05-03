<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>
        Empresa - Estanislau
    </title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <script type="text/javascript">
        
        function delete(){
            alert("Alerta !");
        }


    </script>

    <style>

        .letra{
            color:black;
        }

    </style>
</head>

<body>

    

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="
            background-color:white; border: 2px solid white; ">

            <center><img src="https://www.contasonline.com.br/img/IluCadastro.jpg" width="100px" height="100px"></center>
            <center><h1 class="letra">Cadastrar Funcionário</h1></center>
            <hr> 
            <center>
                <table>
                    <tr>
                       <td>
                        <form method="POST" autocomplete="off" name="form" action="salvar.php">
                            <div>
                                <label>ID</label>
                                <input type="text" name="id" id="id">
                            </div>
                            <div>  
                                <label>Nome*</label><label class="validation-error hide" id="nomeValidationError">Este campo é obrigatório.</label>
                                <input type="text" name="nome" id="nome">
                            </div>
                            <div>
                                <label>Salário</label>
                                <input type="text" name="salario" id="salario" onkeypress="return sonumero(event);">
                            </div>
                            <div>
                                <label>Data de Nascimento</label>
                                <input type="text" name="dataNascimento" id="dataNascimento">
                            </div>
                            <div  class="form-action-buttons">
                                <input type="submit" name="enviar3" value="Cadastrar">
                            </div>
                        </form>
                    </td>                 
                </tr>
            </table>
        </div>
    </center>
    
    


</body>
</html>

