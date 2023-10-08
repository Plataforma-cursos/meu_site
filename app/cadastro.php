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
    <style>

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #222;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 60px;
        }

        h2 {
            text-align: center;
            color: #dc3545;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    <title>Cadastro</title>
</head>
<body>
<header>
        <h1>Dev <span>Arthur</span></h1>
        <nav>
            <ul aria-label="Navegação primária" class="navegacao-primaria">
                <li><a href="../index.html">Home</a></li>
                <li><a href="area_cliente.php">Projetos</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <i class="fa-solid fa-bars"></i>
        </nav>
    </header>
<div class="container">
        <h2>Cadastro</h2>
        <form action="sql/cadastro.php" method="POST">
            <label for="nomeEmpresa">Gmail da Empresa:</label>
            <input type="text" id="nomeEmpresa" name="nomeEmpresa" required>

            <label for="nomeRecrutador">Nome do Recrutador:</label>
            <input type="text" id="nomeRecrutador" name="nomeRecrutador" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="confirmarSenha">Confirmar Senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" required>

            <input type="submit" onclick="validar();False" value="Cadastrar">
        </form>
    </div>
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

    <script src="../script.js"></script>
    <script>
        function validar(){
            var senha = document.getElementById('senha').value;
            var conf_senha = document.getElementById('confirmarSenha').value;

            if(senha == conf_senha){
            }else{
                alert('Senhas incorretas');
            }
        }
        
    </script>
</body>
</html>