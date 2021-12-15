<?php

include('templateusuario/header.php'); // Header

?>


<section>
    <form action="validaCadastro.php" method="post">
    <main class="login">
        <div class="login_container">
            <h1 class="login_title">Login</h1>
            <form class="login_form">
                <input class="login_input" type="email" placeholder="e-mail">
                <span class="login_input-border"></span>
                <input class="login_input" type="password" placeholder="senha">
                <span class="login_input-border"></span>
                <button class="login_submit">Login</button>
               
                <a class="login_reset" href="#">Esqueci a senha</a>
            
            
                <div class="div-input-login">
                <p class="cadastro-page-login">Já possui uma conta? Entre <a href="login.php">aqui</a>!</p>
                </div>
                </div>
            
            </form>
        </div>
    </main>
    

    </form>
</section>





<?php

include("templateusuario/footer.php"); // Footer

?>
