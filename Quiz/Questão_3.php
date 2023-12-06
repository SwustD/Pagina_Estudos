<!DOCTYPE html>
<meta charset="utf-8">
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<script src="https://kit.fontawesome.com/b198138bf0.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="../Imagens/Icon.ico" type="image/x-icon">
<html>
<head>
	<title>Quiz</title>
	<style>
		div{
			color: #ffff;
		}
		h1,p{
			font-size: 22px;
			text-align: center;
			color: #ffff;
			font-family: Comic sans-serif;
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
				padding: 20px;
				font-family: Verdana, Geneva, Tahoma, sans-serif;
				font-size: 20px;
				background-color: #063146;
				color: #FFF;
		
			}
		.btn-link:hover {
				box-shadow: 2px 2px 2px #000;
			}
		.btn-link2{
        text-decoration: none;
        border-radius: 8px;
        border: 1px solid #000;
        left: -250px;
         width: 250px;
        height: 100%;
        text-align: center;
        padding: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 16px;
        background-color: #063146;
        color: #FFF;

    }
    .btn-link2:hover {
        box-shadow: 2px 2px 2px #000;
    } 
		</style>
</head>
<body>
<form method="POST" action="Questão_4.php">

<input type="hidden" name="q1" value='<?php echo $_POST["q1"]; ?>'/>
<input type="hidden" name="q2" value='<?php echo $_POST["q2"]; ?>'/>
<u><h1 style="font-size:40px;">Quiz - How Much/How Many</h1></u>

<p><b>Complete a frase abaixo:</b><br> How ... boys are there in your classroom?</p>
<div><input type="radio" name="q3" value="1" required>a) Many.
<br>
<input type="radio" name="q3" value="0">b) Contável.
<br>
<input type="radio" name="q3" value="0">c) Much.
<br>
<input type="radio" name="q3" value="0">d) N.D.A.</div>
<br>
<br>
<input class="btn-link2" type="submit" value="Próxima pergunta">
</form>
</body>
</html>