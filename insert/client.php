<?php
    //Incluindo Conexao
    include("../conexao.php");

    //Declarando as Variveis com os valores do Front
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass = $_POST['pass'];

    //Inserindo dados no banco via query
    $query = "INSERT INTO client(nameClient, emailClient, passClient, ) VALUE  ('$name', '$email', '$pass')";
    $busca = mysqli_query($conn, $query);
    header("Location: ../index.php");
?>