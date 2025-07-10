<?php
namespace PrincipioISP;

use PrincipioISP\interfaces\Manejable;
use PrincipioISP\interfaces\Volable;

class AutoVolador implements Manejable, Volable {
    /**
     * Manejar un auto volador.
     *
     * @return string
     */
    public function manejar(): string {
        return "Manejando auto";
    }

    /**
     * Volar un auto volador.
     *
     * @return string
     */
    public function volar(): string {
        return "Volando en auto";
    }
}
