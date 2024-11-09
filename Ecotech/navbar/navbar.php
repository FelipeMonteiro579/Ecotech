<style>

    *{
        margin: 0;
        padding: 0;
        font-family: 'Saira Condensed', sans-serif;
    }

    body{
        height: 100vh;
        width: 100vw;
    }

    a{
        color: black;
        text-decoration: none;
        transition: 0.3s;
    }

    .logo-container {
        display: flex;
        align-items: center;
        height: 10vh;
    }

    #logo
    {
        height: 100%;
        width: auto;
        margin-right: 1.5vw;
        margin-left: 0.5vw;
    }

    .ecotech{
        font-size: 1.5vw;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-weight: bold;
    }

    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(217, 217, 217, 1);
        height: 12vh;
        padding: 0 50px;
    }


    .nav-list{
        list-style: none;
        display: flex;
        gap: 10px
    }

    
    .nav-list li{
        letter-spacing: 3px;
        font-size: 1vw;
        margin-left: 0;
        padding: 10px 20px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .nav-list li:hover{
        background-color: #c0c1bf;
        transform: scale(1.05); 
    }

    .sair{
        background-color: #28a745;    
        font-weight: bold;
    }

    .sair:hover{
        background-color: #1e6b30;
    }
    </style>
        
<header>
    <nav>
        <div class="logo-container">
        <img id="logo" src="../Imagens/logo.svg" alt="logo" >
        <a class="ecotech" href="">Ecotech</a>
        </div>
        <ul class="nav-list">
            <li><a href="telaInicial.php">Início</a></li>
            <li><a href="Dispositivos.php">Dispositivos</a></li>
            <li><a href="#">Configurações</a></li>
            <li class="sair"><a href="../Controller/logoutController.php">SAIR</a></li>
        </ul>
    </nav>
</header>