<?php
namespace PrincipioOCP\Tarifas;

use PrincipioOCP\Tarifas\TarifaTransporteInterface;

class CalculadorTarifa {
    private TarifaTransporteInterface $tarifa;

    public function __construct(TarifaTransporteInterface $tarifa) {
        $this->tarifa = $tarifa;
    }

    /**
     * Calcula la tarifa según la distancia.
     *
     * @param float $distancia
     * @return float
     */
    public function calcular(float $distancia): float {
        return $this->tarifa->calcular($distancia);
    }
}
