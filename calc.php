
<?php

 class Calculadora {

    public function calcular() {
        if (isset($_POST['doCalc'])) {
            $numeroMesa = $_POST['v1'];
            $quantidadePessoas = $_POST['v2'];
            $valorConta = $_POST['v3'];
            
            # Validação para evitar divisão por zero e garantir que os valores são numéricos
            if (is_numeric($numeroMesa) && is_numeric($quantidadePessoas) && is_numeric($valorConta) && $quantidadePessoas > 0) {
                $resultado = $valorConta / $quantidadePessoas;
                return "Número da mesa: ".$numeroMesa."<br>Valor total da conta: R$ ".number_format($valorConta, 2, ',', '.').
                "<br>Dividido por ".$quantidadePessoas." pessoa(s): R$ ".number_format($resultado, 2, ',', '.');
            } else {
                return "Insira valores válidos para o número da mesa, quantidade de pessoas e valor da conta.";
            }
        }
    }
}
?>
