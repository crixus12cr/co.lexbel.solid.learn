<?php
namespace PrincipioOCP\Tarifas;

class TarifaAuto implements TarifaTransporteInterface {

    /**
     * Calcula la tarifa para un auto según la distancia.
     *
     * @param float $distancia Distancia en kilómetros.
     * @return float Tarifa calculada en unidades monetarias.
     */
    public function calcular(float $distancia): float {
        return $distancia * 1000;
    }
}
