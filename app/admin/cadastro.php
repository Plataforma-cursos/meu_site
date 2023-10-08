<?php 
include_once("../sql/conexao.php");

// session_start();


// if(!empty($_SESSION['email_institucional'])){

//     $sql = ("SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '$email'");


//     $result = $coat->query($sql);
//     $obj = mysqli_fetch_assoc($result);



    
  
//   mysqli_close($coat);

// }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></head>

    <link rel="icon" href=".\..\media\IMG\Carreiras Logo favicon.png" type="image/x-icon">

    <style>
    body {
    background-image: url(./../media/IMG/bg.jpg);
    background-size: cover;
/*  background-image: url(erp.avif); */
/*	background-image: url('https://images.unsplash.com/photo-1485796826113-174aa68fd81b'); */
    background-color: mediumblue;
    background-position: center;
	background-repeat: no-repeat;
	font-family: Arial, sans-serif;
}

.login-container {
	display: flex;
	justify-content: left;
	align-items: left;
    margin-top: 0;
	height: 100vh;
}

.login-box {
	background-color: #112c50;
	padding: 50px;
	border-radius: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	max-width: 400px;
	width: 15%;
}


.login-container2 {
	display: flex;
	justify-content: center;
	align-items: center;
    margin-top: 220px;
	height: 100vh;
}

.login-box2 {
    position: absolute;
	background-color: #112c50;
	padding: 50px;
    color: #ffffff;
	border-radius: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	max-width: 500px;
    top:25%;
    margin-left: 0%;
	width: 100%;
}

#circulo{
    position: absolute;
    text-align: center;
    position: center;
    padding: 10px 10px;
    width: 100px;
    height: 100px;
    margin-top: 40px;
    margin-left:139px ;
    margin-bottom: 30px;
    border-radius: 50%;


}
#sp1{
    position: absolute;
    margin-top: 90px;
    margin-left: 400px;

}
#sp2{
    position: absolute;
    margin-top: 160px;
    margin-left: 400px;

}
#sp3{
    position: absolute;
    margin-top: 235px;
    margin-left: 400px;

}
#sp4{
    position: absolute;
    margin-top: 305px;
    margin-left: 400px;

}
#sp5{
    position: absolute;
    margin-top: 380px;
    margin-left: 400px;
}
.gmail{
    text-align: center;
    position: absolute;
    padding: 10px 10px;
    width: 30px;
    height: 30px;
    margin-top: 0px;
    margin-left:-41px ;
    margin-bottom: 30px;
    background: transparent;
}
.senha{
    text-align: center;
    position: absolute;
    padding: 10px 10px;
    width: 15px;
    height: 15px;
    margin-top: 80px;
    margin-left:-41px ;
    margin-bottom: 30px;
    background: transparent;
    background-color: #ffffff;
    border-radius: 50%;
}
img{
    border-radius: 50%;
}

h1 {
	text-align: center;
	margin-bottom: 30px;
	color: #fffbfb;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	margin-bottom: 10px;
	font-weight: bold;
	color: #555;
}

input[type="text"],
input[type="password"] {
	padding: 15px;
	/* border-radius: 20px; */
	border: none;
	margin-bottom: 20px;
    outline: none;
    border: 0;
    background: transparent;
    border-bottom: 1px solid #ffffff;
    color: #EA8137;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 18px;
}
button{
    background-color: #EA8137;
	color: white;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
    border-radius: 20px;
    outline: none;
    border: 0;
    background: transparent;
    border-bottom: 1px solid #ffffff;
}
button:hover{
    background-color:#EA8137;
    border-radius: 20px;
}

.radio{
    position: absolute;
    display: inline-flex;
    color: #fffbfb;
    margin-left: 120px;
    margin-top: 450px;
    margin-bottom: 10px;

}
.radio2{
    position: absolute;
    display: inline-flex;
    color: #fffbfb;
    margin-left: 120px;
    margin-top: 500px;
    margin-bottom: 10px;
}
input[type="submit"] {
	background-color: #EA8137;
	color: white;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
    border-radius: 20px;
    outline: none;
    border: 0;
    background: transparent;
    border-bottom: 1px solid #ffffff;

}
input[type="submit"]:hover {
	background-color:#EA8137;
    border-radius: 20px;
} 

footer{
    margin-top:175%;
}

#photo{
    margin-left: 120px;
}
@media screen and (max-width: 480px) {
    nav{
        padding: 30px;
        font-size: 14px;
    }

    .login-box2 {
    position: absolute;
	background-color: #112c50;
    top: 20%;
    padding: 50px;
    color: #ffffff;
	border-radius: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	max-width: 500px;
    margin-top: 1px;
    margin-left: 0%;
	width: 100%;
    }
    footer{
        margin-top:250%;
    }

}
@media screen and (min-width:481px; max-width: 680px) {

    nav{
        padding: 30px;
        font-size: 14px;
    }
    .login-box2 {
        position: absolute;
        background-color: #112c50;
        padding: 50px;
        color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        margin-top: 80%;
        margin-left: 0%;
        width: 100%;
    }
    footer{
        margin-top:70%;
    }
}

@media screen and (min-width:681px;  max-width: 1000px) {
    nav{
        padding: 30px;
        font-size: 14px;
        margin-left: 0px;
    }

    .login-box2 {
        position: absolute;
        background-color: #112c50;
        padding: 50px;
        color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        margin-top: 5%;
        margin-left: 0%;
        width: 100%;
    }

    footer{
    margin-top:180%;
}


}
*/
    </style>
</head>
<body>
<?php
    // convoca o menu
    // include_once('./statics/_nav.html'); 
?>
    <!-- cadastro  -->

    <div class="login-container2">
		<div class="login-box2">
			
        
            
			<form method="post"  enctype="multipart/form-data" action="../sql/cadastrar_projeto.php">
          
                <h1>Cadastro Projeto</h1>

                <br>
                <input type="text" name="nome_projeto" placeholder="Nome do Projeto ">
                <br>
                <input type="text" name="descricao" placeholder="Descrição">
                <p id="img" class="formulary">Insira uma imagem com até 2mb nos formatos jpg, peg, png ou jfif:  
                    
                <input class="photoInput" id="photoInput" name="file1" type="file" value="" ></p>
                <br>
                <input class="photoInput" id="photoInput" name="file2" type="file" value="" >
                <br>
                <input class="photoInput" id="photoInput" name="file3" type="file" value="" >
                <br>
                <input class="photoInput" id="photoInput" name="file4" type="file" value="" >
                <br>
                <input class="photoInput" id="photoInput" name="file5" type="file" value="" >
                <br>
                <input class="photoInput" id="photoInput" name="file6" type="file" value="" >
                <br>
                <input class="photoInput" id="photoInput" name="file7" type="file" value="" >
                <br>
                <input class="photoInput" id="photoInput" name="file8" type="file" value="" >



                <BUtton onclick="confirmPassworw(); return false" id="btn" name="update">Salvar</BUtton>

			</form>
		</div>
	</div>
    <script>
        function confirmPassworw(){
            var password = document.getElementById('password').value;
            var password2 = document.getElementById('password_Conf').value;

            if(password == password2){
                location.href('pdiCompleto.php');

            }else{
                alert('Senhas Incorretas');
            }
        }
      
    </script>

        <footer >
        <?php
            // convoca o rodapé
            include_once('./statics/_footer.html'); 
        ?>
        </footer>
</body>
</html>