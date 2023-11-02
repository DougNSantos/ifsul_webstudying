<?php
$servername="localhost";
$database="php_ifsul";
$username="root";
$password="";
//cria conexão
$strcon= mysqli_connect($servername,$username,
                    $password,$database);
//verifica conexão
if(!$strcon){
    die("falha conexão:" . mysqli_connect_error());
}
// echo "sucesso conexão";

?>