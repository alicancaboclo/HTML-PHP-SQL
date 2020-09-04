<!DOCTYPE html>
<html>
 <head>
 <title>Formulário de cadastro</title>
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
 <label id="texto01">CADASTRO</label>
 <br /><br />
 <form action="inserir.php" method="POST">
 <p>Nome do Aluno: <input type="text" name="aluno" /></p>
 <p>Diciplina: <input type="text" name="diciplina" /></p>
 <p>Nota1: <input type="text" name="nota1" /></p>
 <p>Nota2: <input type="text" name="nota2" /></p>
 <p>Nota3: <input type="text" name="nota3" /></p>
 <p><input type="submit" name="submit" value="cadastrar" /></p>
 </form>
 </body>
</html>