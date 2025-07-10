<?php
namespace PrincipioISP\interfaces;

interface Manejable {
    /**
     * Permite manejar o mover un medio de transporte.
     *
     * @return string
     */
    public function manejar(): string;
}
