<?php
namespace PrincipioOCP;

use PrincipioOCP\interfaces\Transporte;

class TransporteBus implements Transporte {
    /**
     * Calcular la tarifa en bus de acuerdo a la distancia.
     *
     * @param float $distancia Distancia a recorrer
     * @return float
     */
    public function calcularTarifa(float $distancia): float {
        return $distancia * 600;
    }
}
