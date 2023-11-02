<?php
include_once("conectar.php"); //essa função inclui e avalia o script/arquivo uma vez durante a execução deste código!!!

$pesquisa=$_POST['cidade'];
?>
<!--A LINGUAGEM PHP INTERPRETA ALGUMAS TAGS DE HTML!!!-->
<!DOCTYPE html>
<html>
    <head>
        <title>RESULTADO PESQUISA</title>
    </head>
    <body>
        <!--criando cabeçalho e tabela de dados-->
        <table border="1" style='width:50%'>
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>    

        <?php
            $sql = "SELECT * FROM usuarios WHERE cidade = '$pesquisa'";
            $resultado = mysqli_query($strcon,$sql);

            while($registro=mysqli_fetch_array($resultado)){
                $nome=$registro['nome'];
                $endereco=$registro['endereco'];
                $cidade=$registro['cidade'];
                echo "<tr>";
                echo "<td>".$nome."</td>";
                echo "<td>".$endereco."</td>";
                echo "<td>".$cidade."</td>";
                echo "</tr>";
            }
            mysqli_close($strcon);
        ?>
        </table>        
    </body>
</html>