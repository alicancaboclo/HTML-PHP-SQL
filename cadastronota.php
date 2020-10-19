<!DOCTYPE html>
<html lang="pt-BR">
 <head>
 <title>Formulário de cadastro</title>
 <style>
 body { text-align:center; }

 .retangulo {margin: auto; border: 1px solid black; position:
relative;}

 #ret {width: 450px; background-color: #6feae0;}

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
 <form action="inserir.php" method="post">
 <p>Nome do Aluno: <label>
         <input type="text" name="nome"/>
     </label></p>
 <p>Diciplina: <label>
         <input type="text" name="disciplina" />
     </label></p>
 <p>Nota1: <label>
         <input type="text" name="nota1" />
     </label></p>
 <p>Nota2: <label>
         <input type="text" name="nota2" />
     </label></p>
 <p>Nota3: <label>
         <input type="text" name="nota3" />
     </label></p>
 <p><input type="submit" name="submit" value="cadastrar" /></p>
 </form>
 </body>
</html>
