<?php
include('templateusuario/header.php'); // Header
include('banco/conexao.php'); // banco de dados
?>

<div class="container">

<h1>Carros Disponiveis</h1>

<section>

    <?php
        $stmt = $pdo -> prepare("select * from tbproduto");

        $stmt -> execute();

        while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
            

    ?>
     <figure>
        <div>

        <center> <img src="imagens/c3.png"  class="imagem"/> </center>

            <figcaption>
                <h1 class = "nomeC"><?php echo $row['produto'] ?></h1>
                <p class="desc"><?php echo $row['descProduto'] ?></p>
                <div class="preco">
                    <span class="valor"><?php echo "R$".$row['valor']?></span>
                    
                </div>
                
                <button class="botao">Comprar</button>
                
        </div>
    </figure>
          
        
    <?php 
        } // Fechamento laço de repetição
    ?>  

</section>



<?php
include("templateusuario/footer.php"); // Footer
?>
