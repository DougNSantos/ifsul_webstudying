<!doctype html>
<html>
    <head>
        <title>estudo php 4</title>
        <meta charset="utf-8">
    </head>
<body>
    <?php
    $variavel="variavel";
    echo $variavel; //echo mostra coisas na tela

    $var_um=10; 
    $var_dois=-15;
    $soma=$var_um + $var_dois;
    $subtracao=$var_um - $var_dois;
    $divisao=$var_um / $var_dois;
    $resto=$var_um % $var_dois;
    echo "<br>$var_um" . "-" . "o oposto de " . $var_um . "é: " . -$var_um; //da para usar a tag <br> no php também
    //alguns operadores aritméticos: -,+,/,*,%...
    echo "<br>$var_dois" . "-" . "o oposto de " . $var_dois . "é: " . -$var_dois; //- na frente de uma variavel ,mostra o valor oposto a ele
    echo "<br> a soma dos dois é: " . $soma; //o br na frente ja começa com uma quebra de linha
    echo "<br> subtracao: " . $subtracao;
    echo "<br> divisão: " . $divisao;
    echo "<br> resto da divisão: " . $resto;
    //temos os operadores de comparação!!! ==,!=,<>,<,>,<=,>=
    if ($var_um == 10){ //ESTRUTURA DO IF
        echo "<br>valor é: " . $var_um; //o . é um operador de concatenação!!!
    }

    // temos os operadores de atribuição!!! +=,=,-=,*=,/=,.=,%= é uma forma resumida de a variavel receber ela mesma e mais outro elemento!!!
    echo "<br> atribuição: " . $var_um += $var_dois;
    //temos os operdores lógicos, relacionados a lógica de programação!!! AND,OR,XOR,NOT,&&(and, é a mesma interpretação)||(or, é a mesma interpretação)
    if($var_um != $var_dois and $soma == -5){
        echo "<br> esta condição de operadores lógicos está funcionando!!!";
    }
    else { // tem casos em que o uso das chaves é facultativo, se tiver apenas uma condiçõa por exemplo, mas é uma boa prática usa-las!!!
        echo "OK";
    }
    if($var_dois/$var_um==3){ // condições elseif se devemos testar mais de uma condição, podemos usar várias condições aninhadas!!! ele vai testar cada um e validar a verdadeira
        echo"<br>voce passou fera";
    }
    elseif($var_um == 10){
        echo "<br> condição elseif funcionando!!!";
    }
    else{
        echo "<br>voce é fera mas é preguiçoso" . $var_dois/$var_um;
    }

    $notaum=5;
    $notadois=8;
    $media=($notaum+$notadois)/2; //SE NÃO COLOCAR O PARENTESES, A PRIMMEIRA OPERAÇÃO QUE SERÁ EXECUTADA SERÁ A DIVISÃO
    if($media<3)
        echo "<br>mais um pouco";        
    
        elseif($media<5)
            echo "<br>foi quase";
    
            elseif($media<7)
                echo "<br>ta quase";
            
                else
                    echo "<br>passou!" . $media;

    $idade=18; //esse tipo de programaçõa diminui o uso do comando echo, interessante!!!
    $x;
    if($idade>=18){
        $x="<br>é maior de idade";
    }
    else{
        $x="<br>é menos de idade";
    }
    echo $x;

$str= "olá";
$str.= " mundo!"; //operador de concatenação , exemplo, $str.= vai adicionar mais strings na variavel $str!!!
echo "<br>$str";

$opcao='s'; //ESTRUTURA DE CONTROLE!!!

switch($opcao == 's'){ //verifica as condições e executa os casos, se nenhuma das condições forem verdadeiras, ele executa default, break encerra a estrutura de controle!!!
    case 's':
        echo "<br>comando 1, S"; //essa estrutura somente verifica igualdade!!!, se for verdadeiro ou não
        break;
    case 'n':
        echo "<br>comando 2, N"; //a estrutura de controle usa os cases 1: case2: case3: ....., substituindo os cases pelos resultados de condições
        break;
    default:
        echo "default, opção inválida";
    } //A ESTRUTURA SWITCH FICA MAIS ORGANIZADA SE EU QUERO TESTAR SOMENTE A IGUALDADE, POIS AS VEZES PODEMOS FAZER EM IF/ELSE TAMBÉM

?>
</body>
</html>
