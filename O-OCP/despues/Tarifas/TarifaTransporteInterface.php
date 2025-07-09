<?php
namespace PrincipioOCP\Tarifas;

interface TarifaTransporteInterface {
    
    /**
     * Calcula la tarifa según la distancia.
     *
     * @param float $distancia Distancia en kilómetros.
     * @return float Tarifa calculada en unidades monetarias.
     */
    public function calcular(float $distancia): float;
}
