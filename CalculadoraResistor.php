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
  <a class="btn-link" href="ele.html"><i class="fa-solid fa-left-long"></i></a>
<body>
<center><fieldset style="width: 50%;">
        <?php  
$PF = $_POST["pri_faixa"];
$SF = $_POST["seg_faixa"];
$TF = $_POST["terc_faixa"];
$QuarF = $_POST["quar_faixa"];
$QuinF = $_POST["quin_faixa"];
$op = $_POST["NumFaixas"];

if($op == 4){
    if($PF == "Erro" or $SF == "Erro" or $QuarF == "Erro" or $QuinF == "Erro"){
        echo "Informações inválidas! Volte e tome cuidado.";
    }else{
        $resu = $PF.$SF*$QuarF;

        echo "<p>O valor do seu resistor é : <br><br>$resu Omhs$QuinF</p>";
    }
}
if($op == 5){
        if($PF == "Erro" or $SF == "Erro" or $TF == "Erro" or $QuarF == "Erro" or $QuinF == "Erro"){
            echo "Informações inválidas! Volte e tome cuidado.";
        }else{
            $resu = $PF.$SF.$TF*$QuarF;
    
            echo "<p> O valor do seu resistor é : <br><br> $resu Omhs$QuinF</p>";
        }
    }

?>
 </fielset></center>
</body>
</html>