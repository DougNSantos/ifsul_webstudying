<?php

$conexao = mysqli_connect("localhost","root","","php_ifsul");
if(!$conexao){
    die("erro ao conectar no banco de dados");
}

$nome = $_POST['nome'];
$endereco = $_POST['endereco']; //usado comandos SQL na variavel como String!!!
$cidade = $_POST['cidade']; //varivel $sql para receber a string de comandos!!! é uma string, por isso está em aspas duplas, mas os comandos vão dentro dessa forma...

$sql = "INSERT INTO usuarios(nome,endereco,cidade) 
        VALUES('$nome','$endereco','$cidade')";

$resultado = mysqli_query($conexao,$sql); //essa variavel com esse método, envia os dados dessas variaveis para o banco de dados efetivamente!!!
// ou seja, no nosso caso em php, no fim estamos apenas criando uma String nessas variáves, mas usando este método mysqli_query(parametros que enviará), é o método que vai pegar essas Strins e enviar ao banco de dados, como se fosse uma SQL direto no banco de dados!!!

mysqli_close($conexao); //PODERÍAMOS USAR DIRETAMENTE A STRING DO $SQL DIRETO NOS PARAMETROS DO MÉTODO MYSQLI_QUERY, MAS A TÍTULO DE ORGANIZAÇÃO FIZEMOS ASSIM!!!
//por questões de segurança, importante encerrar a conexão
?>