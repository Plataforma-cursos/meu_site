<?php 


include_once("conexao.php");

if(isset($_POST['nomeEmpresa']) || isset($_POST['senha'])){

  if(strlen($_POST['nomeEmpresa']) == 0){
      echo "Preencher nomeEmpresa";
  }else if(strlen($_POST['senha']) == 0){
      echo "Preencher Senha";
  }else{
      $nomeEmpresa = $coat->real_escape_string($_POST['nomeEmpresa']);
      $senha = $coat->real_escape_string($_POST['senha']);

      $sql = "SELECT * FROM cadastro WHERE gmail_empresa ='$nomeEmpresa'  AND senha ='$senha'";

      $sql_query = $coat->query($sql) or die("Falha ao se conectar". $coat->error);

      $quantidade = $sql_query->num_rows;
      if($quantidade == 1){

          $usuario = $sql_query->fetch_assoc();

          if(!isset($_SESSION)){
              session_start();
          }
          $_SESSION['gmail_empresa'] = $usuario['gmail_empresa'];
          $_SESSION['nome_pessoa'] = $usuario['nome_pessoa'];
          
          session_write_close();

          header('Location:../home_page.php');

      }else{
            header('Location:error_logar.php');
      }
      mysqli_close($coat);
  }
}
