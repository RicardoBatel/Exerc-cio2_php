<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php 

			function calculoIR($salario) {
				$imposto = 0;

				if($salario <= 1903.98) {
					$imposto = 0;
				}elseif ($salario >= 1903.99 && $salario <= 2826.65) {
					$imposto = ($salario * 7.5) / 100;
					echo "O valor da aliquota é de 7,5%, então o Imposto de Renda será no valor de R$ $imposto";
				}elseif ($salario >= 2826.66 && $salario <= 3751.05) {
					$imposto = ($salario * 15) / 100;
					echo "O valor da aliquota é de 15%, então o Imposto de Renda será no valor de R$ $imposto";
				}elseif ($salario >= 3751.06 && $salario <= 4664.68) {
					$imposto = ($salario * 22.5) / 100;
					echo "O valor da aliquota é de 22,5%, então o Imposto de Renda será no valor de R$ $imposto";
				}elseif ($salario >= 4664.69) {
					$imposto = ($salario * 27.5) / 100;
					echo "O valor da aliquota é de 27,5%, então o Imposto de Renda será no valor de R$ $imposto";
				}
			
			}

			calculoIR(5000);

		?>


	</body>
</html>