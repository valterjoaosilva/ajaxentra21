<?php 
//Incluir o arquivo de conexão
include ("conexao.php");
//Obtendo valores
$curso = $_POST["curso"];
$valor = $_POST["valor"];

//SQL 
$sql = "INSERT INTO cursos VALUES (null,'$curso',$valor)";

//iNSERIR DADOS
mysqli_query($conexao, $sql);



?>