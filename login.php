<?php
include('templateusuario/header.php'); // Header
?>



<style>
        td{
            padding-right: 15px;
        }

        table{
            border: solid 2px black;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 533px;
        }
    </style>
    
                <table>
                    <center><h1>Reclamações</h1></center>
                    <tr>
                        <td><b>Nome</b></td>
                        <td><b>Email</b></td>
                        <td><b>Assunto</b></td>
                        <td><b>Mensagem</b></td>
                    </tr>
<?php

include('banco/conexao.php');

    try{
        $stmt = $pdo -> prepare("select * from tbcontato");

        $stmt -> execute();

        while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
           /* echo "<b>ID: </b>".$row['idCli']."     ";
            echo "<b>Nome: </b>".$row['nomeCli']."     ";
            echo "<b>Data nascimento: </b>".$row['dtNascCli']."     ";
            echo "<b>Cpf: </b>".$row['cpfCli']."     ";
            echo "<br>";*/

            echo "
                    <tr>
                        <td>".$row['nome']."</td>".
                        "<td>".$row['email']."</td>
                        <td>".$row['assunto']."</td>".
                        "<td>".$row['mensagem']."</td>".
                        
                    "</tr>";
        }

    }catch(PDOException $erroMsg){
        echo "Erro: ". $erroMsg -> getMessage(); // Caso não executar o codigo do try ira dar erro
    };

?>

    </table>








<?php
include("templateusuario/footer.php"); // Footer
?>
