<?php

// Verificar se as variáveis existem
if (isset($_POST['email'], $_POST['senha'])) {
    //Verifica se estão com valores
    if ($_POST['email'] != "" and $_POST['senha'] != "") {
        //recebendo os dados
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //verifica se os dados digitados conferem
        if ($email == 'email@email.com' and $senha = "1234") {

            session_start();
            $_SESSION['email'] = $email;

            //Direciona para a página Restrita.php
            echo "<script>location.href='paginaRestrita.php'</script>";
        } else {
            //Direciona para o Login
            echo "<script>location.href='login.php'</script>";
        }
    } else {
        //Direciona para o Login
        echo "<script>location.href='login.php'</script>";
    }
} else {
    //Direciona para pagina inicial
    echo "<script>location.href='index.php'</script>";
}
?>