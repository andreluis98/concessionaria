<?php

include('banco/conexao.php'); // banco de dados

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$msg_contato = "INSERT INTO tbcontato(nome,email,assunto,mensagem) VALUES ('$nome','$email','$assunto','$mensagem')";

$msg_result = mysqli_query($conn, $msg_contato);


?>
