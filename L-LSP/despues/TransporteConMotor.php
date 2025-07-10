<?php
namespace PrincipioLSP;

abstract class TransporteConMotor extends Transporte {
    
    /**
     * Método abstracto que debe ser implementado por las clases hijas
     * para definir cómo se enciende el motor del transporte.
     *
     * @return string
     */
    abstract public function encenderMotor(): string;
}
