<?php
namespace PrincipioISP;

use PrincipioISP\interfaces\Manejable;
use PrincipioISP\interfaces\Volable;

class Avion implements Manejable, Volable {

    /**
     * Implementa el método manejar.
     *
     * @return string Mensaje indicando que el avión está siendo manejado.
     */
    public function manejar(): string {
        return "El avión rueda por la pista.";
    }

    /**
     * Implementa el método volar.
     *
     * @return string Mensaje indicando que el avión está volando.
     */
    public function volar(): string {
        return "El avión está volando.";
    }
}
