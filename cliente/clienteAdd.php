<?php
require_once "../conexao/ConexaoPDO.php";

$nome = $_POST['iNome'];
$endereco = $_POST['iEndereco'];
$telefone = $_POST['iTelefone'];
$email = $_POST['iEmail'];

//Realiazar a conexão
$conexao = ConexaoPDO::getInstance();

//PREPARAR UMA INSERT
$query = "INSERT INTO clientes(nome,endereco, telefone, email) VALUES(:x, :y, :z, :w)";

$statement = $conexao->prepare($query);

$statement->bindvalue("x", $nome, PDO::PARAM_STR);
$statement->bindvalue("y", $endereco, PDO::PARAM_STR);
$statement->bindvalue("z", $telefone, PDO::PARAM_STR);
$statement->bindvalue("w", $email, PDO::PARAM_STR);

//EXECUTAR O INSERT
$statement->execute();

echo "<script>location.href='frmClienteAdd.php'</script>";

?>

