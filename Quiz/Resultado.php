<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src="https://kit.fontawesome.com/b198138bf0.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="../Imagens/Icon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
    <style>
div{
    color: #ffff;
}
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
  <a class="btn-link" href="../ing.html"><i class="fa-solid fa-left-long"></i></a>
<body>
<center><fieldset style="width: 50%;">
    <h1>Parabéns.</h1>
    <div>
<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];

$resu = $q1 + $q2 + $q3 + $q4;

echo "Você acertou $resu de 4 questões.<br><br>";

?>
</div>
 </fielset></center>
</body>
</html>