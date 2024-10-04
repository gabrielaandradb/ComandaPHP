
<!DOCTYPE html>
<html lang="en">
<head>
   
<?php  include ('Calc.php') ?>
 <link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
    
    <form name="form" method="post" action="">
        
        <h1>    BAR DA ZEZA </h1>
    <!-- Input que recebe o numero da mesa-->
    Insira o número da mesa:<input type="text" name="v1" placeholder="Número da mesa" /></br>

    <!-- Input que receberá o segundo valor a ser calculado -->
	Quantidade de pessoas:<input type="text" name="v2" placeholder="Quantidade" /></br>
        
     <!-- Input que receberá o segundo valor a ser calculado -->
	Valor da conta:<input type="text" name="v3" placeholder="Valor da Conta" /></br>

        <input type="submit" name="doCalc" value="Calcular" />
        
        <div class="resultado">
	<?php
	# Instancia a classe CALCULADORA()
        $minhacalculadora = new Calculadora();
        
        # Executa o meto Calcular
        echo $minhacalculadora->calcular();
	?>    
         </div>
        </form>
   
</body>
</html>
