<?php
echo "<h2> Aula PDO </h2>";




$conexao = new PDO("mysql:host=localhost;dbname=aulapdo","root","");

var_dump($conexao);

$select = "SELECT * FROM tb_produtos";

$resultado = $conexao->query( $select );

$consulta = $resultado->fetchALL();


foreach ( $consulta as $linha ){
    echo '';
    var_dump($linha['nome_produto']);
    echo $linha['nome_produto'];

}







?>