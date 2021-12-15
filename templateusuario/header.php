<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automoveis</title>

    <link rel="stylesheet" href="../templateusuario/css/style.css">
</head>
<body>

    <style>
body{
    background: linear-gradient(120deg, #61ccdf, #96c1e9);
    margin: 0px;
}
        header{
            height: 70vh;
            width: 100vw;
            background-color: ;
            background-image: url('./imagens/capa.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            box-sizing: border-box;
            padding: 0 112px;
            position: relative;
        }
        *{
            margin: 0;
            padding: 0;
        }
        /*
        .container-logo{
            display: flex;
            justify-content: ;
            margin: 0;
        }
        */
        li{
            background-color: transparent;
        }
        li a{
            color: white;
            font-size: 25px;
        }
        li:hover a{
            color: black;
            padding: 5px;
        }
        li:hover{
            background-color: #FFF;
        }
        ul{
            display: flex;
        }
        li{
            margin-left: 25px;
        }
        ul{
            display: flex;
            justify-content: space-between;
        }
        .container-list-header{
            margin-left: 200px;
            margin-right: 300px;
        }



        .checkbox-container {
    display: flex;
    justify-content: center;
    align-items: center;

}

.checkbox-container {
    display: flex;
    justify-content: center;
    align-items: center;

}

.checkbox{
    height: 100px;
    width: 100px;
    position: absolute;
    right: 0;
    top: 0;
    display: flex;
    justify-content: center;
    cursor: pointer;
    z-index: 9999;
    transition: 400ms ease-in-out 0s;

}

.checkbox .trace {
    width: 50px;
    height: 2px;
    background-color: #1e1e2a;
    position: absolute;
    border-radius: 4px;
    transition: 0.5s ease-in-out;
}

.checkbox .trace:nth-child(1) {
    top: 26px;
    transform: rotate(0);
}
.checkbox .trace:nth-child(2){
    top: 46px;
    transform: rotate(0);
}
.checkbox .trace:nth-child(3){
    top: 66px;
    transform: rotate(0);
}

#toogle {
    display: none;

}

/* Menu */
.menu{
    position: absolute;
    top: 28px;
    right: 30px;
    background-color: transparent;
    height: 4px;
    width: 40px;
    border-radius: 50%;
    box-shadow: 0px 0px 0px 0px #ffffff;
    z-index: -1;
    transition: 400ms ease-in-out 0s;

}

.menu-items {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2;
    opacity: 0;
    visibility: hidden;
    transition: 400ms ease-in-out 0s;    
}

.menu-items ul {
    list-style-type: none;

}

.menu-items ul li a {
    margin: 10px 0;
    color: #1e1e2a;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-size: 40px;

}

#toogle:checked + .checkbox .trace:nth-child(1) {
    transform: rotate(45deg);
    top: 47px;

}

#toogle:checked + .checkbox .trace:nth-child(2) {
    transform: translate(-100px);
    width: 30px;
    visibility: hidden;
    opacity: 0;

}

#toogle:checked + .checkbox .trace:nth-child(3) {
    transform: rotate(-45deg);
    top: 48px;

}

#toogle:checked + .checkbox{
    background-color: #ffffff;

}

#toogle:checked ~ .menu{
    box-shadow: 0px 0px 0px 100vmax #ffffff;
    z-index: 1;
}

#toogle:checked ~ .menu-items {
    visibility: visible;
    opacity: 1;
}


/*Cards*/

.container{
    height: auto;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    margin: 3rem 0;

}

.card-container{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    width: 90%;    
}

.card{
    width: 300px;
    height: 300px;
    border-radius: 100%;
    margin: 3rem 0 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:#2CD3DB ;
    background-image: url('./imagens/capa.png');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    filter: grayscale(0.5);
    color: #0f0f0f;
    cursor: pointer;
    transition:0.5s ease-in-out;
}

.card-text{
    width: 40%;
    letter-spacing: 1px;
    color: rgb(109, 109, 109);

}

.card-wrapper{
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
}

.card-wrapper::before{
    content: '';
    position: absolute;
    height: 100px;
    width: 100px;
    border-radius: 50%;
    display: block;
    border: 1px solid #ffffff;
    opacity: 0;
    transition: 0.5s ease-in-out;
}

.card-wrapper h2{
    font-size: 40px;
    text-transform: uppercase;
    letter-spacing: 4px;
    margin: 0;
    transition: 0.5s ease-in-out;

}

.card-wrapper p{
    font-size: 0;
    visibility: visible;
    opacity: 0;
    font-weight: bold;
    text-transform: uppercase;
    transition: 0.5s ease-in-out;
}

.card:hover{
    filter: unset;
}

.card:hover > .card-wrapper::before{
    height: 250px;
    width: 250px;
    opacity: 1;
}

.card:hover > .card-wrapper p {
    opacity: 1;
    visibility: visible;
    font-size: 14px;

}

.footer {
    width: 100%;
    height: 100px;
    background-color: ;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1e1e2a;
}
.nomeC{
    text-align: center;
    color: rgb(7, 7, 7);
}
.desc{
    font-size:20px;
    border: 1px solid rgb(85, 77, 190);
    width: 100%;
    padding-left: 5px;
    height: 50px;
    margin-top: 7px;
    text-align: center;
}
.preco{
    font-size: 50px;
    line-height: 1em; 
    font-weight: bold;
    height: 5px;
    margin-bottom: 5px;
    color: black;
    text-align: center;
    color: rgb(7, 7, 7);

}

.botao{
    height: 38px;
    width: 100%;
    border: none;
    background: rgb(196, 187, 187);
    color: rgb(0, 0, 0);
    text-transform: uppercase;
    
    padding: 8px 15px;
    margin-top: 50px;
    margin-bottom: 50px;
    text-align: center;
}

.imagem{
    border-radius: 100rem;
}

/*Pagina de login*/

.login{
    height: 100vh;
    
    display: flex;
    justify-content: center;
    align-items: center;
}

.login_container{
    min-height: 400px;
    width: 300px;
    
    box-sizing: border-box;
    padding: 32px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.login_title{
    margin-bottom: 32px;
    
}

.login_form{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.login_input{
    height: 48px;
    width: 100%;
    box-sizing: border-box;
    padding-left: 8px;
    border: unset;
    outline: none;
    
}

.login_input-border{
    
    width: 100%;
    margin-bottom: 16px;
    
    transition: .3s ease-in-out;

}

.login_input-border::after{
    content: '';
    display: block;
    height: 1px;
    width: 0;
    margin-bottom: 16px;
    background: linear-gradient(120deg, #A2D4F3, #6F94B7);
    transition: .3s ease-in-out; 
}

.login_input:focus + .login_input-border::after{
    width: 100%;

}


.login_submit{
    height: 48px;
    width: 100%;
    outline: none;
    background: rgb(98, 245, 220);
    background-size: 200%;
    margin-bottom: 32px;
    
    font-size: 16px;
    font-weight: bold;
    border: unset;
    border-radius: 4px;
    cursor: pointer;
    transition: .5s ease-in-out;
}

.login_submitdisabled {
    
    cursor: not-allowed;
}

.login_submit:hover{
    background-position: right;
}




.login_reset{
    font-size: 12px;

    text-decoration: none;
    
}


    </style>

<header>
    <div class="container-logo">
            <a href="../teste/index.php"><!--<img src="./imagens/capa.png" alt="" width="300px">--></a>
            <div class="header">
            <div class="checkbox-container">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="toogle">
                    <label class="checkbox" for="toogle">
                        <div class="trace"></div>
                        <div class="trace"></div>
                        <div class="trace"></div>
                    </label>
                    <div class="menu"></div>
                    <nav class="menu-items">
                    <ul>
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="carros.php">Carros</a>
                        </li>
                        <li>
                            <a href="motos.php">Motos</a>
                        </li>
                    </ul> 
                </nav>
                </div>
            </div>
        </div>
</header>
