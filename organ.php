<?php

require('./dao/OrganDAO.class.php');

$organismoDAO = new OrganDAO();

//cria o array associativo
$dados = array("dados"=>$organismoDAO->dados());

//converte o conteúdo do array associativo para uma string JSON
$json_str = json_encode($dados);

//imprime a string JSON
echo $json_str;
