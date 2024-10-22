<style>

    *{
        margin: 0;
        padding: 0;
        font-family: 'Saira Condensed', sans-serif;
    }

    a{
        color: black;
        text-decoration: none;
        transition: 0.3s;
    }

    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(217, 217, 217, 1);
        height: 12vh;
        padding: 0 50px; /* Adds space to the left and right */
    }


    .nav-list{
        list-style: none;
        display: flex;
        gap: 10px
    }

    
    .nav-list li{
        letter-spacing: 3px;
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
        <img id="logo" src="../Imagens/logo.svg" alt="logo" width=80 height=80>
            <ul class="nav-list">
                <li><a href="telaInicial.php">Início</a></li>
                <li><a href="Dispositivos.php">Dispositivos</a></li>
                <li><a href="#">Configurações</a></li>
                <li class="sair"><a href="Login.php">SAIR</a></li>
            </ul>
    </nav>
</header>