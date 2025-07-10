<?php
namespace PrincipioISP;

use PrincipioISP\interfaces\Volable;

class Avion implements Volable {
    /**
     * Volar un avión.
     *
     * @return string
     */
    public function volar(): string {
        return "Volando en AirLex";
    }
}
