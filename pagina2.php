<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		$arq="./categorias.csv";
		$pont=fopen($arq,"r");
		$linha=fgets($pont);
		//echo $linha;
		?>
		Software:
		<select name="Escolha" value="-Selecione-">
			<?php
			$linha=fgets($pont);
			$coisa=0;
			while(($linha) && ($linha!="\r\n")){

			$temp=explode(";",$linha);
			if(count($temp)>1){
				$a[$coisa]=$temp[0];
				$b[$coisa]=$temp[1];
				$coisa++;
			}
			$linha=fgets($pont);
			}
			array_multisort($b,$a);

			for($i=0;$i<count($b);$i++){
			?>
				<option value="<?php echo $a[$i]?>"><?php echo $b[$i]?> </option>
			<?php
				}
			?>
		</select>
	</body>
</html>
