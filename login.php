<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <link rel="stylesheet" href="css/meuEstilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center vTotal">
            <div class="col-6 align-self-center">
                <img src="img/user.png" class="sImage">

                <h1 class="text-center">Conecte-se <span class="lead">Faça o Login</span></h1>
                <form action="validarLogin.php" method="POST">
                    <!-- Labem do email-->
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>

                    <!-- Labem da Senha-->
                    <div class="form-group row">
                        <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="senha" placeholder="Senha">
                        </div>
                    </div>

                    <!-- botao para enviar-->
                    <div class="form-group row">

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>