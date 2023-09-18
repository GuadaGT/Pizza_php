<?php
class PizzaPi
{
    // 1. Calcular la cantidad de masa necesaria
    public function calcularCantidadDeMasa(int $pizzas, int $personasPorPizza): int
    {
        $masa = $pizzas * (($personasPorPizza * 20) + 200);
        return $masa;
    }

    // 2. Calcular la cantidad de salsa necesaria
    public function calcularCantidadDeSalsa(int $pizzas, int $salsaPorPizza): int
    {
        $latas = ceil($pizzas * $salsaPorPizza / 125);
        return $latas;
    }

    // 3. Calcular la cobertura de cubo de queso
    public function calcularCoberturaDeCuboDeQueso(int $longitudLado, float $espesor, int $diametroPizza): int
    {
        $volumen = pow($longitudLado, 3);
        $pizzas = floor($volumen / ($espesor * M_PI * pow($diametroPizza / 2, 2)));
        return $pizzas;
    }

    // 4. Calcular las rebanadas sobrantes
    public function calcularRebanadasSobrantes(int $pizzas, int $amigos): int
    {
        $totalRebanadas = $pizzas * 8;
        $rebanadasSobrantes = $totalRebanadas % ($amigos * 8);
        return $rebanadasSobrantes;
    }
}

$pizza_pi = new PizzaPi();
// 1. Cantidad de masa requerida
$masaRequerida = $pizza_pi->calcularCantidadDeMasa(4, 8);
echo "Masa requerida: $masaRequerida gramos\n";

// 2. Cantidad de salsa requerida
$latasSalsa = $pizza_pi->calcularCantidadDeSalsa(8, 250);
echo "Latas de salsa requeridas: $latasSalsa\n";

// 3. Cobertura de cubo de queso
$pizzasCubiertas = $pizza_pi->calcularCoberturaDeCuboDeQueso(25, 0.5, 30);
echo "Pizzas cubiertas: $pizzasCubiertas\n";

// 4. Rebanadas sobrantes
$rebanadasSobrantes = $pizza_pi->calcularRebanadasSobrantes(2, 4);
echo "Rebanadas sobrantes: $rebanadasSobrantes\n";
$rebanadasSobrantes2 = $pizza_pi->calcularRebanadasSobrantes(4, 3);
echo "Rebanadas sobrantes: $rebanadasSobrantes2\n";
?>