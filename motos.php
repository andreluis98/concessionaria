<?php
include('templateusuario/header.php'); // Header
include('banco/conexao.php'); // banco de dados
?>

<div class="container">

<h1>Motos Disponiveis</h1>



<?php
    $stmt = $pdo -> prepare("select * from tbmotos");

    $stmt -> execute();

    while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
        

?>

<figure>
    <div>

        <center><img class="imagem" src="imagens/bmw-6001.jpg" /></center>

        <figcaption>
            
            <h1 class="nomeC"><?php echo $row['produto'] ?></h1>
            <p class="desc"><?php echo $row['descProduto'] ?></p>
            <div class="preco">
                <span class="valor"><?php echo "R$".$row['valor']?></span>
                
            </div>
            <button class="botao">Comprar</button>
        </figcaption>
    </div>
</figure>
      
    
<?php 
    }  // Fechamento laço de repetição
?>  



</section>
</div>

<?php
include("templateusuario/footer.php"); // Footer
?>