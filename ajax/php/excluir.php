<?php
include("conexão.php");


$codigo = $_GET["codigo"];

$sql = "DELETE FROM cursos WHERE codigo = $codigo";

mysqli_query($conexão, $sql);


?>