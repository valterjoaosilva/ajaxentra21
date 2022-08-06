<?php 
//Incluir o arquivo de conexão
include("conexão.php");
//Obtendo valores
$curso = $_POST["curso"];
$valor = $_POST["valor"];

//SQL 
$sql = "INSERT INTO curso VALUES (null,'$curso',$valor)";

//iNSERIR DADOS
mysqli_query($conexão, $sql);



?>