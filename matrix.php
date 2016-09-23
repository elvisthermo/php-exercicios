<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel ="stylesheet" href="_css/estilo.css"/>
    <title>aula1</title>
</head>
<body>
    <div>
    <pre>
	
	
	<?php
$v = array(5,10,20,30);
		echo"o vetor tem ".count($v)." elementos</br>"; 
		$v[]="N";
		array_unshift($v,7,"O");
		asort($v);
		
		print_r($v);		
		var_dump($v);	
		$n =array(2=>"C",8=>"G",16=>"H",3=>"Y");
		krsort($n);
		var_dump($n);
	?>
	
		
		
		
	</pre>	
    </div>
</body>
</html>