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
			while(($linha) && ($linha!="\r\n")){
			$temp=explode(";",$linha);
			if(count($temp)>1){
				?>
				<option value="<?php echo $temp[0]?>"><?php echo $temp[1]?> </option>
				<?php
			}
			$linha=fgets($pont);
			}
			?>
		</select>
	</body>
</html>
