<?php
session_start();
if (isset($_SESSION['email'])) {
?>
    <!DOCTYPE html>
    <html lang="pt-Br">

    <head>
        <link rel="stylesheet" href="css/meuEstilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Administrativa</title>
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
            <!-- Parte do cadeado -->
            <div class="row align-items-center">
                <div class="col-12">
                    <img src="img/cadeado.png" class="sImage">
                    <h1 class="text-center"> Pagina Restrita</h1>
                    <p class="lead text-center">
                        Está página está simulando uma página de Menu Administrativo que deverá passar primeiro pela autenticação.<br>
                        Se você estiver vendo esta página sem fazer login, algo ainda precisa ser melhorado.
                    </p>
                </div>
            </div>
            <!-- Card com conteudo -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card                                                                                              ">
                        <div class="card-body">
                            <h5 class="card-title">Exemplo de Layout</h5>
                            <p class="card-text">Praticando Bootstrap com o Professor Tone</p>
                            <a href="index.php" class="btn btn-primary">Deseja voltar a página Inicial?</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Que tal ver meus Projetos ;)</h5>
                            <p class="card-text">Tenho alguns Projetos feitos por mim no meu GitHub</p>
                            <a href="https://github.com/GilmarAlves99" target="_blank" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Mostrando os dados-->
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Seus Dados
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo "Seu Email é: " . $_SESSION['email'];
                    } else {
                        echo "<script>location.href='login.php'</script>";
                    }
                    ?>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    Data e hora :
                    <?php
                    $agora = date('d/m/Y H:i');
                    echo $agora;

                    ?>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    Senha: **** (Por Segurança não mostraremos sua senha!)
                </button>

            </div>


        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>


    </html>
<?php
} else {
    //Direciona para o Login
    echo "<script>location.href='login.php'</script>";
}
?>

