<?php
 $link = mysqli_connect("localhost", "root", "", "test");
 if(ini_set	$link){
	printf ("erro",mysqli_connect_error());} 
		$aluno = $_POST["aluno"];
		$diciplina = $_POST['diciplina'];
		$nota1 = $_POST["nota1"];
		$nota2 = $_POST["nota2"];
		$nota3 = $_POST["nota3"];
$query = "INSERT INTO etepac('aluno', 'diciplina', 'nota1', 'nota2', 'nota3') 
VALUES ('$aluno','$diciplina','$nota1','$nota2','$nota3')";
mysqli_query($link,$query);

echo"dasdos inseridos";
?>
