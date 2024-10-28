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

    .logo-container {
        display: flex;
        align-items: center; 
        gap: 10px; 
    }

    .ecotech{
        font-size: 24px;
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
        position: relative;
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

    .entrar{
        background-color: #28a745;    
        font-weight: bold;
    }

    .entrar:hover{
        background-color: #1e6b30;
    }

    .mobile-menu{
        display: none;
        cursor: pointer;
    }

    .mobile-menu div{
        width: 32px;
        height: 2px;
        background: black;
        margin: 8px;
    }

    /*
    @media (max-width: 999px){
        .nav-list{
            position: absolute;
            top:8vh;
            right: 0;
            width: 50vw;
            height: 92vh;
            background: black;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            transform: translateX(100%);
            transition: transform 0.3s ease-in;
        }
        .nav-list li{
            margin-left: 0;
            opacity: 0;;
        }
        .mobile-menu{
            display: block;
        }
    }

    .nav-list.active{
        transform: translateX(0);
    }

    @keyframes navLinkFade {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    */
</style>
        
<header>
    <nav>
        <div class="logo-container">
        <img id="logo" src="../Imagens/logo.svg" alt="logo" width=80 height=80>
        <a class="ecotech" href="index.php">Ecotech</a>
        </div>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#">Missão</a></li>
            <li><a href="#">Sobre</a></li>                
            <li class="entrar"><a href="Login.php">ENTRAR</a></li> 
        </ul>
    </nav>    
</header>
<main></main>