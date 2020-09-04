<?php
//usando o método GET para capturar o valor do campo id do formulário
$id = $_GET['id'];
//fazendo a conexão
$link = mysqli_connect("localhost", "root", "", "test");

 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //query SQL para selecionar os dados
 $lista = mysqli_query($link, "SELECT * FROM etepac WHERE id='$id'");

 //coleta a linha solicitada
 $linha = mysqli_fetch_array($lista);

?>
<!DOCTYPE html>
<html>
<head>
 <title>Formulario de cadastro</title>
 <style>
 body { text-align:center; }
 
 .retangulo {margin: auto; border: 1px solid black; position:
relative;}

 #ret {width: 450px; background-color: georgian;}

 #ret div {
 margin: 20px auto;
 width: 50px;
 height: 50px;
 }
 </style>
 </head>
 <body>
 <div id="ret" class="retangulo" style="text-align: center;" >
 <br />
 <label id="texto01">ATUALIZACAO DE CADASTRO</label>
 <br /><br />
 <form action="alterar.php" method="post">
 <p>Nome do Aluno: <input type="text" name="aluno" value="<?=
$linha['aluno'] ?>" /></p>
 <p>Diciplina: <input type="text" name="diciplina" value="<?=
$linha['disciplina'] ?>" /></p>
 <p>Nota1: <input type="text" name="nota1" value="<?=
$linha['nota1'] ?>" /></p>
<p>Nota2: <input type="text" name="nota2" value="<?=
$linha['nota2'] ?>" /></p>
<p>Nota3: <input type="text" name="nota3" value="<?=
$linha['nota3'] ?>" /></p>
 <input type="hidden" name="id" value="<?= $linha['id'] ?>" />
 <p><input type="submit" name="submit" value="alterar" /></p>
 </form>
 </body>
</html>