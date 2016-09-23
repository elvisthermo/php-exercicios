<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel ="stylesheet" href="_css/estilo.css"/>
    <title>aula1</title>
</head>
<body>
    <div>
		<?php
			$nota1 = isset($_GET["nota1"])?_GET["nota1"]:0;
			$nota2 = isset($_GET["nota2"])?_GET["nota1"]:0;
			$media = $nota1/$nota2;
			echo "sua nota é $nota";
			if ($media<5) {
				$r = "sua media e insuficiente";
				
			} 
			elif ($media<6 ){
				$r = "sua media é regular";
						
			}
			elif($media <=8){
				$r = "sua media é boa";
				
			}
			elif ($media <=10){
				$r = "sua media é exelente";
			}
			echo "sua media é $r ";
		?>
	</div>
</body>
</html>
