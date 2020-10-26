<?php
require_once 'conexao/ConexaoPDO.php';
// Verificar se as variáveis existem
if (isset($_POST['email'], $_POST['senha'])) {
    //Verifica se estão com valores
    if ($_POST['email'] != "" and $_POST['senha'] != "") {
        //recebendo os dados
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // REALIZANDO A CONEXÃO COM O BANCO DE DADOS
        $conexao = ConexaoPDO::getInstance();

        //PREPARANDO A CONSULTA
        $query = "SELECT * FROM usuarios where email=:email";
        $statement = $conexao->prepare($query);
        $statement->bindValue("email", $email, PDO::PARAM_STR);

        //EXECUTANDO A CONSULTA E RETORNANDO O OBEJETO
        $statement->execute();
        $usuario = $statement->fetchObject();



        //verifica se os dados digitados conferem
        if ($email == $usuario->email and $senha = $usuario->senha) {

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
