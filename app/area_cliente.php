<?php 

$URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?sair'){
    session_unset();

    // Destroi a sessão
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Área do Cliente</title>
</head>
<body>
<header>
        <h1>Dev <span>Arthur</span></h1>
        <nav>
            <ul aria-label="Navegação primária" class="navegacao-primaria">
                <li><a href="../index.html">Home</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <i class="fa-solid fa-bars"></i>
        </nav>
    </header>
    <br><br>
    <section class="services">
        <div class="sobre_titulo">
            <h1>Projects</h1>
            <p>Professional Experiences</p>
            <div aria-label="Seção apenas de ilustrações de botões">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="my_services">
            <ul aria-label="Navegação secundaria">
                <a href="mostrar_projeto.php?foto1"><li>                    

                    <i class="fa-sharp fa-solid fa-globe"></i>

                    <img  class="img_centro" src="../imgs/pdi.png" width="80" height="80" alt="">

                    <h3>PDI - Eniac</h3>
                    
                    <p>Website profile that can be shown</p>

                    <!-- <a href=editar_dados.php?foto1> -->


                    
                </li></a>

                 <a href="mostrar_projeto.php?foto2"><li>  
                    <i class="fa-solid fa-globe"></i>

                    <img  class="img_centro" src="../imgs/Academy.png" width="80" height="80" alt="">

                    <h3>Academy One - Eniac</h3>
                    <p>Website profile that can be shown </p>
                </li></a>

                <a href="mostrar_projeto.php?foto3"><li>
                    <i class="fa-solid fa-globe"></i>
                    <img  class="img_centro" src="../imgs/Academy.png" width="80" height="80" alt="">

                    <h3>Factory One </h3>
                    <p>Website profile that can be shown</p>
                </li></a>

                <a href="mostrar_projeto.php?foto4"><li>
                    <i class="fa-solid fa-globe"></i>
                    <img  class="img_centro" src="../imgs/drt.png" width="80" height="80" alt="">

                    <h3>CEO Darkrosck Tech</h3>
                    <p>Website profile that can be shown</p>
                </li></a>

                <a href="mostrar_projeto.php?foto5"><li>
                    <i class="fa-solid fa-globe"></i>
                    <img  class="img_centro" src="../imgs/ecommerce.jpeg" width="80" height="80" alt="">

                    <h3>Restaurante</h3>
                    <p>Website profile that can be shown</p>
                </li></a>

                <a href="mostrar_projeto.php?foto6"><li>
                    <i class="fa-sharp fa-solid fa-globe"></i>
                    <img  class="img_centro2" src="../imgs/ecommerce.jpeg" width="80" height="80" alt="">

                    <h3>Plataforma de Academia</h3>
                    <p>Improving Knowledge in Apis Restful</p>
                </li></a>
            </ul>
        </div>
    </section>

    <footer>
        <div class="sobre_titulo">
            <h1 id="contact">Arthur </h1>
            <p>Follow my social networks</p>
        </div>
        <nav aria-label="navegação de links sociais">
            <ul class="footer_sociais">
                <li><i class="fa-brands fa-facebook-f"><a href="#"></a></i></li>
                <li><i class="fa-brands fa-twitter"><a href="#"></a></i></li>
                <a href="https://www.linkedin.com/in/arthur-dem%C3%A9trio-527050205/"><li><i class="fa-brands fa-linkedin-in"></i></li></a>
                <a href="https://www.instagram.com/arthurstarkrosck/"><li><i class="fa-brands fa-instagram"></a></i></li></a>
                <a href="https://github.com/StarkRosck/"><li><i class="fa-brands fa-github-alt"></a></i></li></a>
            </ul>
        </nav>
        <p class="footer_comercial">Todos os direitos reservados Arthur Stark Rosck &copy; - 2023</p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>