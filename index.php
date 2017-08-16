<?php
require 'template.php';
$array=array(
    "titulo" => "Título da página",
    "nome" => "Alex",
    "idade" => 77
);
$tpl = new Template('template.html');
$tpl->render($array);
?>