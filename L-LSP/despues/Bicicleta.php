<?php
namespace PrincipioLSP;

class Bicicleta extends Transporte {
    
    /**
     * Método que define cómo avanza la bicicleta.
     *
     * @return string
     */
    public function avanzar(): string {
        return "La bicicleta avanza";
    }
}
