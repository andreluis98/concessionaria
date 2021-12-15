<?php
include('templateusuario/header.php'); // Header
include('banco/conexao.php'); // banco de dados
?>

<div class="container">

<main class="container">
        <div class="card-container">
            <div class="card">
                <div class="card-wrapper">
                    <h2>Carros</h2>
                    <p>Confira!</p>
                </div>
            </div>
            <div class="card-text">
                Confira os melhores carros da região com preços jamais vistos!
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="card-wrapper">
                    <h2>Motos</h2>
                    <p><a href="motos.php">Confira!</a></p>
                </div>
            </div>
            <div class="card-text">
            Confira as melhores motos da região com preços jamais vistos!
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="card-wrapper">
                    <h2>Fale conosco</h2>
                    <p>Contato</p>
                </div>
            </div>
            <div class="card-text">
                Está com duvidas?, gostaria de dar alguma sugestão?, Não encontrou o carro que deseja?, Fale Conosoco!
            </div>
        </div>
    </main>



<?php
include("templateusuario/footer.php"); // Footer
?>
