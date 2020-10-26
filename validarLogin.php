<?php
require_once 'conexao/ConexaoPDO.php';
//Verifica se as variáveis existem
if (isset($_POST['email'], $_POST['senha'])) {
    //verifica se estão com valores
    if ($_POST['email'] != "" and $_POST['senha'] != "") {
        //recebe os dados
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Realizando a Conexao com o banco de dados
        $conexao = ConexaoPDO::getInstance();

        //Preparando a Consulta
        $query = "SELECT * FROM usuarios where email=:email";
        $statement = $conexao->prepare($query);
        $statement->bindValue("email", $email, PDO::PARAM_STR);

        //EXECUTANDO A CONSULTA E RETORNADO O OBJETO
        $statement->execute();
        $statement=$statement->fetchObject();

        //verifica se os dados digitados conferem
        //   if ($email == $usuario->$email and $senha == $usuario->$senha) {
        if ($email == "email@email.com" and $senha == "1234") {
            //recebe os dados
            session_start();
            $_SESSION['email'] = $email;
            //Direciona para páginaRestrita.php
            echo "<script>location.href='paginaRestrita.php'</script>";
        } else {
            //Direciona para Logina.php
            echo "<script>location.href='login.php'</script>";
        }
    } else {
        //Direciona para Logina.php
        echo "<script>location.href='login.php'</script>";
    }
} else {
    //Direciona para Index.php
    echo "<script>location.href='index.php'</script>";
}
?>