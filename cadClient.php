<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro de Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
      }
      
      label {
        font-weight: bold;
        margin-bottom: 10px;
      }
      
      input {
        padding: 5px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
      }
      
    
    </style>
  </head>
  <body>
    <form method="POST" action="./insert/client.php">
      <h1>CADASTRO USUARIO CLIENTE</h1>
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name">
      <label for="name">e-mail:</label>
      <input type="email" id="email" name="email">
      <label for="name">Empresa:</label>
      <select name="company">
        <?php
            require('conexao.php');

            $query = "SELECT * FROM company";
            $busca = mysqli_query($conn, $query);

            while ($dados = mysqli_fetch_array($busca)) {
                $id = $dados['IdCompany'];
            ?>
        <option value="<?php echo $id;?>"><?php echo $id;?> - <?php echo $dados['company'];?></option>
        <?php } ?>
      </select>
      <label for="name">Senha:</label>
      <input type="password" id="password" name="pass">
      <button type="submit" class="btn btn-success">Cadastrar</button>
      <a href='index.php' class="btn btn-primary">Voltar</a>
    </form>
  </body>
</html>