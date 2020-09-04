<?php
 $link = mysqli_connect("localhost", "root", "", "test");
 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //definindo as variaveis para receber os dados do formulario
 $id = $_POST['id'];
 $aluno = $_POST['aluno'];
 $diciplina = $_POST['diciplina'];
 $nota1 = $_POST['nota1'];
 $nota2 = $_POST['nota2'];
 $nota3 = $_POST['nota3'];
 //criando a query em SQL para alterar os dados
 $query = "UPDATE etepac SET aluno='$aluno',
disciplina='$disciplina', nota1='$nota1',nota2='$nota2',nota3='$nota3' WHERE id=$id";
 //executando o comando SQL
 mysqli_query($link, $query);
 //exibe mensagem de confirmação
 echo "Dados atualizados!"

?>