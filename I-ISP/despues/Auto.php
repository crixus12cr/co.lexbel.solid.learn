<?php
namespace PrincipioISP;

use PrincipioISP\interfaces\Manejable;

class Auto implements Manejable {
    
    /**
     * Implementa el método manejar.
     *
     * @return string Mensaje indicando que el auto está siendo manejado.
     */
    public function manejar(): string {
        return "El auto está siendo manejado.";
    }
}
