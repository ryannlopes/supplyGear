<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>
    <!-- Usuário Administradores -->
    <table class="table" border="1px" style="text-align: center;">
        <h1>Usuário Administradores</h1>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"><a type="button" class="btn btn-success" href="cadAdmin.php">CADASTRAR</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            require('conexao.php');

            $query = "SELECT * FROM admin";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['IdAdmin'];
            ?>
            <td><?php echo $dados['IdAdmin'] ?> </td>
            <td><?php echo $dados['nameAdmin'] ?></td>
            <td><?php echo $dados['email'] ?></td>
            <td><a class="btn btn-warning" href="editPessoa.php?IdAdmin=<?php echo $dados['IdAdmin']; ?>">EDITAR</a></td>
            <td><a class='btn btn-danger btn-sn' href="./acoes/pessoas/delete.php?IdAdmin=<?php echo $dados['IdAdmin']; ?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>DELETAR</td>
          </tr>

          <?php } ?>
        </tbody>
      </table>
    <!-- Usuário Cliente -->
    <table class="table" border="1px" style="text-align: center;">
        <h1>Usuário Cliente</h1>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Empresa</th>
            <th scope="col"><a type="button" class="btn btn-success" href="cadClient.php">CADASTRAR</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            require('conexao.php');

            $query = "SELECT c.IdClient, c.nameClient, c.emailClient, c.passClient, co.company
            FROM client c
            INNER JOIN company co ON c.fkIdCompany = co.idCompany;
            ";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['IdClient'];
            ?>
            <td><?php echo $dados['IdClient'] ?> </td>
            <td><?php echo $dados['nameClient'] ?></td>
            <td><?php echo $dados['emailClient'] ?></td>
            <td><?php echo $dados['company'] ?></td>
            <td><a class="btn btn-warning" href="editPessoa.php?IdClient=<?php echo $dados['IdClient']; ?>">EDITAR</a></td>
            <td><a class='btn btn-danger btn-sn' href="./acoes/pessoas/delete.php?IdClient=<?php echo $dados['IdClient']; ?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>DELETAR</td>
          </tr>

          <?php } ?>
        </tbody>
      </table>
      <!-- Produtos -->
    <table class="table" border="1px" style="text-align: center;">
        <h1>Produtos</h1>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Estoque</th>
            <th scope="col"></th>
            <th scope="col"><a type="button" class="btn btn-success" href="cadProduct.php">CADASTRAR</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            require('conexao.php');

            $query = "SELECT * FROM product";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['idProduct'];
            ?>
            <td><?php echo $dados['idProduct'] ?> </td>
            <td><?php echo $dados['descript'] ?></td>
            <td>R$ <?php echo number_format((float)$dados['price'], 2, ',', '.'); ?></td>
            <td><?php echo $dados['quantity'] ?></td>
            <td><a class="btn btn-warning" href="editPessoa.php?idProduct=<?php echo $dados['idProduct']; ?>">EDITAR</a></td>
            <td><a class='btn btn-danger btn-sn' href="./acoes/pessoas/delete.php?idProduct=<?php echo $dados['idProduct']; ?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>DELETAR</td>
          </tr>

          <?php } ?>
        </tbody>
      </table>    
</body>
</html>