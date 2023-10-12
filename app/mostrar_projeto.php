<?php 
    include_once('sql/conexao.php');

    // $click = $_POST['foto2'];

    $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?foto1'){
        $click = "foto1";
    
    }else if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?foto2'){
        $click = "foto2";

    }else if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?foto3'){

        $click = "foto3";
    }else if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?foto4'){

        $click = "foto4";
    }else if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?foto5'){

        $click = "foto5";
    }else if($URL_ATUAL == 'http://localhost/Meuport/app/mostrar_projeto.php?foto6'){
        
        $click = "foto6";
    }

    $sql = sprintf("SELECT * FROM projeto_free WHERE referencia = '$click'");
    $result = mysqli_query($coat, $sql);
    $obj = mysqli_fetch_assoc($result);

    $nome_projeto = $obj['nome_projeto'];
    $descrição = $obj['descricao'];

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
    <title>Projeto</title>
</head>
<body>
<header>
        <h1>Dev <span>Arthur</span></h1>
        <nav>
            <ul aria-label="Navegação primária" class="navegacao-primaria">
                <li><a href="../index.html">Home</a></li>
                <li><a href="area_cliente.php">Voltar</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <i class="fa-solid fa-bars"></i>
        </nav>
    </header>
    <br><br>
    <section class="services">
        <div class="sobre_titulo">
            <h1>Nome do Projeto: <?php echo $nome_projeto;?></h1>
            <p>Descrição: <?php echo $descrição;?></p>
            <div aria-label="Seção apenas de ilustrações de botões">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="my_services">
            <ul aria-label="Navegação secundaria">
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto1']."'  width='450' height='250' alt=''>");?>
                    <!-- <img  class="tras_banco" src="../imgs/ecommerce.jpeg" width="200" height="200" alt=""> -->

                  
                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto2']."'  width='450' height='250' alt=''>");?>

                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto3']."' width='450' height='250' alt=''>");?>

      
                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto4']."' width='450' height='250' alt=''>");?>

   
                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto5']."' width='450' height='250' alt=''>");?>
              
                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto6']."' width='450' height='250' alt=''>");?>

              
                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto7']."' width='450' height='250' alt=''>");?>

              
                </li>
                <li>
                <?php echo ("<img class='tras_banco' src='sql/imagesDB/" . $obj['foto8']."' width='450' height='250' alt=''>");?>

              
                </li>
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