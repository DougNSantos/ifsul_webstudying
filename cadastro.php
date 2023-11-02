<?php //estas variáveis são superglobais, ou seja, são reservadas exclusivamente para usar estes recursos de entrada de dados POST ou $_GET[] se for GET!!!
$nome = $_POST['nome'];  //o nome dos campos do formulário é usado como chave associativa. e os valores dos campos são armazenados como valores array!!!
$endereco = $_POST['endereco']; //para facilitar no começo do script, vamos criar variáveis para nossos arrays!
$cidade = $_POST['cidade']; //essa estrutura $_POST[''] significa que vamos adicionar mais um elemento ao nosso array superglobal na última posição!!!

$conexao = mysqli_connect("localhost","root","","php_ifsul"); //esse é o método usado para fazer a conexão com o mysql
if(!$conexao){ //os parametros são: ( host,servidor + usuário + senha do usuário(se não fica vazio) + nome do banco de dados )
    die("erro ao conectar no banco de dados"); //esse método retorna um valor true ou false, por isso é interessante fazer essa estrutura para saber se deu certo
}

print_r($nome); //TESTE

?>