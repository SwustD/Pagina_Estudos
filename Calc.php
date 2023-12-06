<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src="https://kit.fontawesome.com/b198138bf0.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="Imagens/Icon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <style>
h1,p{
    text-align: center;
    color: #ffff;
    font-family: Comic sans-serif;
    font-size: 50px;
}
body{
    margin:30px;
    background-color:rgb(24, 26, 36);
 } 
.btn-link{
        text-decoration: none;
        border-radius: 8px;
        border: 1px solid #000;
        width: 120px;
        text-align: center;
        padding: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 16px;
        background-color: #063146;
        color: #FFF;

    }
    .btn-link:hover {
        box-shadow: 2px 2px 2px #000;
    }
  </style>
  <a class="btn-link" href="funda.html"><i class="fa-solid fa-left-long"></i></a>
<body>
<center><fieldset style="width: 50%;">
    <h1>Resultado da Conversão</h1>
    
    <?php
        $Num = $_POST["num"];
        $op = $_POST["op"];

        if ($op == 1){ //Converte binário para decimal
            
            $tamanho = strlen($Num); //"strlen" diz o tamanho da string
            $result = 0;

            for ($i = 0; $i < $tamanho; $i++) {
                $bit = $Num[$tamanho - $i - 1];
                $result += $bit * pow(2, $i); //"pow" calcula a potência de 2 elevada a posição de $i
            }            //"+=" vai somar o resultado da multiplicação no resultado total da conversão
            
            echo "<p>O valor binário $Num em decimal é: $result</p>";

        } 
        if ($op == 2){ //Converte decimal para binário
            
            $dec = $Num;
            $bin = "";

            while ($dec > 0){
                $resto = $dec % 2;
                $bin = $resto . $bin; //Concatenação feita para representar da direita para a esquerda.
                $dec = ($dec - $resto) / 2; //Atualiza o valor decimal dividindo por 2 e arredondando para baixo. 
            }                       //Necessário para continuar a divisão sucessiva até o valor decimal ser zero.

            echo "<p>O valor decimal $Num em binário é: $bin</p>";
        }
    ?>
  </fielset></center>
</body>
</html>