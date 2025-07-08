<?php
namespace PrincipioOCP;

use PrincipioOCP\interfaces\Transporte;

class CalculadorTarifa {
    /**
     * Calcula la tarifa de transporte.
     *
     * @param Transporte $transporte Clase que implementa la interfaz Transporte
     * @param float $distancia Distancia a recorree
     * @return float
     */
    public function calcular(Transporte $transporte, float $distancia): float {
        return $transporte->calcularTarifa($distancia);
    }
}
