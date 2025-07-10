<?php
namespace PrincipioLSP;

class Automovil extends TransporteConMotor {

    /**
     * Método que enciende el motor del automóvil.
     *
     * @return string
     */
    public function encenderMotor(): string {
        return "Motor del automovil encendido";
    }

    /**
     * Método que define cómo avanza el automóvil.
     *
     * @return string
     */
    public function avanzar(): string {
        return "El automovil avanza";
    }
}
