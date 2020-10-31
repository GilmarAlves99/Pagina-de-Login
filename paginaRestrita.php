<?php
session_start();
if (isset($_SESSION['email'])) {
?>
    <!DOCTYPE html>
    <html lang="pt-Br">

    <head>
        <link rel="stylesheet" type="text/css" href="css/meuEstilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Restrita</title>
    </head>

    <body>
        <div class="container">
            <!-- Criando nossa NavBar [Barra de menu] -->
            <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"> SoftLogin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="nav-item nav-link active" href="index.php">Pagina Inicial <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="pageAdm.php">Menu Administração</a>
                    <a class="nav-item nav-link" href="cliente/frmClienteAdd.php">Cadastro de Cliente</a>
                    <a class="nav-item nav-link" href="login.php">Logout</a>
                </div>
            </nav>

            <div class="row align-items-center vTotal">
                <div class="col-12">
                    <img src="img/okEmoji.png" class="sImage">
                    <h1 class="text-center"> Pagina Restrita</h1>
                    <p class="lead text-center ">
                        Está página está simulando uma página restrita que deverá passar primeiro pela autenticação.<br>
                        Se você estiver vendo esta página sem fazer login, algo ainda precisa ser melhorado.
                    </p>

                    <hr>
                    <h2 class="text-center">Sabe o que está faltando?</h2>
                    <p class="text-center">Sessões!</p>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  </body>

    </html>
<?php
} else {
    //Direciona para o Login
    echo "<script>location.href='login.php'</script>";
}
?>