<!DOCTYPE html>
<html>
    <head>
        <title><h2>Estudo 3 php</h2></title> <!--PHP É UMA LINGUAGEM USADA NOS SERVIDORES: HÁ OS CÓDIGOS CLIENTE E CÓDIGOS SERVIDORES-->
        <meta charset="utf-8"> <!--o símbolo de php é um elefante-->
    </head>
    <body> <!--NÃO É NECESSARIO DECLARAR O TIPO DA VARIAVEL EM PHP, ela é fracamente tipada -->
        <?php //as variaveis são representadas por $ em php e php é CASE SENSITIVE!!! começo de nomes de variaveis com numeros é inválido
        $variavel="Doug"; //aspas para Strings, não aspas para outros tipos
        echo $variavel; //informamos até no comando echo o cifrão de variável $. o navegador informa os erros normalmente quando não certo
//OS ARQUIVOS SÃO SALVOS NA PASTA DO APACHE(SERVIDOR LOCAL) POIS O NAVEGADOR VAI CHAMAR ELE PARA ABRIR OS ARQUIVOS, POIS ELE QUE REPRESENTA O SERVIDOS DA WEB!!!

    $palavra="teste";
    $frase_aspas_duplas="isto é um $palavra"; //com as aspas duplas, vai ser interpretado a variavel
    $frase_aspas_simples='isto é um $palavra'; //com aspas simples, vai ser mostrado sem interpretação
        echo $frase_aspas_duplas . "-" . $frase_aspas_simples; // o ponto . é o concatenador nas frases por exemplo!!!

        ?>
    </body>
</html>

    


