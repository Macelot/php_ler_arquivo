<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
<?php
$arq="./categorias.csv";
$pont=fopen($arq,"r");
$linha=fgets($pont);
$coisa=0;
$linha=fgets($pont);
while($linha){
	$temp=explode(";",$linha);
	$a[$coisa]=$temp[0];
	$b[$coisa]=$temp[1];
	$coisa++;
	$linha=fgets($pont);
}
foreach($b as $nome)
	echo $nome." ";

for($i=0;$i<count($b)-1;$i++){
	for($j=0;$j<count($b)-($i+1);$j++){
		if($b[$j]>$b[$j+1]){
			$t=$b[$j];
			$b[$j]=$b[$j+1];
			$b[$j+1]=$t;
		}
	}
}
foreach($b as $nome)
	echo $nome." ";



	?>
