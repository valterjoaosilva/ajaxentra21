<?php
//Conexão
include("conexao.php");

//sql
$sql = "SELECT * FROM cursos";


//Executar
$executar = mysqli_query($conexao, $sql);

//Exibir dados 
while ($indice = mysqli_fetch_assoc($executar)){
    echo $indice["curso"]."<hr>";
}
?>