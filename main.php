<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

echo "Olá,". $nome. $sobrenome;
}
?>
