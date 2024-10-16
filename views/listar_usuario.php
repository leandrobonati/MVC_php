<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Listar Usuários</title>
</head>
<body>
    <h1>Usuários</h1>
    <a href="index.php?controle=usuariocontroller&metodo=inserir">Novo usuario</a>
    <table >
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php 
        foreach ($retorno as $dado) 
        {
            echo"<tr>
                 <td>$dado</td>
                 <td>
                 <a href='index.php?controle=usuariocontroller&metodo=alterar'> alterar</a>
                 <a href='index.php?controle=usuariocontroller&metodo=excluir'> excluir</a>
                 </td>
                 </tr>";
                 
        }
        ?>

    </table>
</body>
</html>