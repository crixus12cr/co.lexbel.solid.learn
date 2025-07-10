<?php
namespace PrincipioISP;

use PrincipioISP\interfaces\Manejable;

class Auto implements Manejable {
    /**
     * Manejar un auto.
     *
     * @return string
     */
    public function manejar(): string {
        return "Manejando auto";
    }
}
