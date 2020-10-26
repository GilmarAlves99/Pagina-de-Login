<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <link rel="stylesheet" type="text/css" href="css/meuEstilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Cliente</title>
</head>

<body>
    <div class="container">
        <!-- Criando nossa NavBar [Barra de menu] -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"> SoftLogin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="nav-item nav-link active" href="#">Pagina Inicial <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="pageAdm.php">Menu Administração</a>
                <a class="nav-item nav-link" href="login.php">Logout</a>
            </div>
        </nav>

        <div class="row">
            <div class="col-12">
                <form action="clienteAdd.php">
                    <label for="iName">Nome do Cliente:</label>
                    <input type="text" id="iNome" name="iNome" />
                    <br>

                    <label for="iEndereco">Endereço:</label>
                    <input type="text" id="iEndereco" name="iEndereco" />
                    <br>

                    <label for="iTelefone">Telefone:</label>
                    <input type="text" id="iTelefone" name="iTelefone" />
                    <br>

                    <label for="iName">Email:</label>
                    <input type="text" id="iEmail" name="iEmail" />
                    <br>
                    <input type="submit" value="Cadastrar" />

                </form>
            </div>
        </div>

        <?php include_once "tblListaCliente.php"; ?>
        <?php
        require_once "../conexao/ConexaoPDO.php";
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * from clientes";
        $statement = $conexao->prepare($query);
        $statement->execute();
        $resultado = $statement->fetchAll();
        ?>
        <div class="row">
            <div class="col-12">
                <table class="table table-stip table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($resultado as $clientes => $clientes) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $cliente["id"]; ?></th>
                                <td><?php echo $cliente["nome"]; ?></td>
                                <td><?php echo $cliente["endereco"]; ?></td>
                                <td><?php echo $cliente["telefone"]; ?></td>
                                <td><?php echo $cliente["email"]; ?></td>
                            </tr>
                    </tbody>
                <?php
                        }
                ?>


                </table>
            </div>
        </div>





    </div>


















    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>