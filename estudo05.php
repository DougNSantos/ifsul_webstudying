<?php
$nome_array = array('p','h','p'); //assim se faz a contrução de um array em php, pode ser usado parenteses ou colchetes
$num_array = array(1,2,3,4,5);  //dependendo do array, usamos aspas duplas ou simples ou não, em PHP um array pode conter diferentes tipos de dados!!!
$dif_array = array(1,"Doug",true); //em php pode-se usar valores booleanos nos array também

echo $nome_array[0] . $num_array[3] . $dif_array[2];

$num_array[]=6; //aqui o array num_array, vai adicionar o valor 6 no próximo index disponível!!!
print_r($num_array); //este método imprimi todo o conteúdo do array e suas posições

//CHAVES ASSOCIOATIVAS!!! isto quer dizer que em php ao invés de usar índices para os arrays, podemos definir o que quisermos para cada item do array:
$array_quatro = array('chave1' => 'valor 1',
                    'chave2' => 'valor2',
                    'chave3' => 'valor3',
                    'chave4' => 'valor4',
                    'valor5', 'valor6');

                    //ARRAYS ASSOCIATIVOS E ARRAY MULTIDIMENSIONAL

$user =array('nome'=>'Doug',
'email'=>'doug@gmail',
'number'=>'055177');

echo "<br>" . $user['email']; //ao inves de usar $user[1] estou usando $user['email']
echo "<br>" . $user['nome']; //em php, os vetores são heterogêneos

$user[]="Arthur"; //assim adicionamos mais elemntos mas sem definir uma chave associativa, dái entrará como índices, comaçando com o 0(zero)!!!
$user['idade']=26; //assim definimos a chave associativa que vai adicionar o vlaor 26 a ela

print_r($user);

//HÁ OS ARRAYS MULTIDIMENSIONAIS TAMBÉM, podemos adicionar outrso arrays dentro dso arrays - SÃO AS MATRIZES!!!
$matriz=array(array(1,2,3),
            array(4,5,6),
            array(7,8,9));

            echo "<br>" . $matriz[0][0]; //linha e coluna
            echo "<br>" . $matriz[0][1]; //[0]linha + [1]coluna
            echo "<br>" . $matriz[0][2];




?>