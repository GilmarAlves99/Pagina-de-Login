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