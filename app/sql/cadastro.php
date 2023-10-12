<?php 
include_once("conexao.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome_empresa = $_POST['nomeEmpresa'];
    $nome_recrutador = $_POST['nomeRecrutador'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmarSenha'];

    if($senha == $confirmar_senha){
        $sql = "INSERT INTO cadastro (gmail_empresa, nome_pessoa, senha, conf_senha) VALUES ('$nome_empresa','$nome_recrutador','$senha','$confirmar_senha')";
        $result = $coat->query($sql);

        if($result == True){
            $date = [
                'status' => 200,
                'mensagem' => 'Cadastrado'
            ];
        }else{
            $date = [
                'status' => 400,
                'mensagem' => 'Erro ao cadastrar'
            ];
        }

        header('Location:../login.php');
        
        mysqli_close($coat);

    }else{
        header('Location:../cadastro.php');

    }



}


?>