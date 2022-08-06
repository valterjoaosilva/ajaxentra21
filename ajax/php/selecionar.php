<?php
//Conexão
include("conexão.php");

//sql
$sql = "SELECT * FROM cursos";


//Executar
$executar = mysqli_query($conexao, $sql);

//Exibir dados 
while ($indece = mysqli_fetch_assoc($executar)){
    echo $indice["curso"];
}
?>