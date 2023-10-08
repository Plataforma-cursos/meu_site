<?php 

include_once("conexao.php");




if(isset($_FILES['file'])){



  $arquivo = $_FILES['file'];



  if($arquivo['error'])

      die("Falha ao enviar o arquivo");



  if($arquivo['size'] > 2097152 )

      die("Arquivo muito grande !! Max. 2MB");

  $pasta = "imagesBD/";



  $nomeDoArquivo = $arquivo['name'];

  $novoNomeArquivo = uniqid();

  // $extensao = pathinfo($target_file,PATHINFO_EXTENSION);



  $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));



  if($extensao != "jpg" && $extensao != "jpeg" && $extensao != "png" && $extensao != "gif" && $extensao != "jfif" )

      die("tipo de arquivo não aceito");



  $path = $pasta . $novoNomeArquivo . "." . $extensao;





  $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);

  $file1 = $_POST['file1'];
  $file2 = $_POST['file2'];
  $file3 = $_POST['file3'];
  $file4 = $_POST['file4'];
  $file5 = $_POST['file5'];
  $file6 = $_POST['file6'];
  $file7 = $_POST['file7'];
  $file8 = $_POST['file8'];

  if($deu_certo){

  //    echo "<p>Arquivo Enviado com Sucesso! Para acessá-lo, clique aqui <a herf=\"arquivo/$novoNomeArquivo.$extensao\">Clique aqui</a> </p>";

  }else{

      echo "<p>Falha ao enviar o Arquivo</p>";

  }

}  





$referencia = $_POST['referencia'];

$nome_projeto = $_POST['nome_projeto'];

$descricao = $_POST['descricao'];

$sql = "INSERT INTO projeto_free () VALUES ()";
$results = $coat->query($sql);

if($results == True){
    $data = [
        'status' => '200',
        'mensagem' => 'ok'
    ];
}else{
    $data = [
        'status' => '400',
        'mensagem' => 'error'
    ];
}

// header("Location:../src/cadastroConcluido.php");





?>