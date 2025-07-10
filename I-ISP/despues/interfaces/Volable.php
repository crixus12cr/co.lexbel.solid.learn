<?php
namespace PrincipioISP\interfaces;

interface Volable {
    /**
     * Permite volar un medio de transporte.
     *
     * @return string
     */
    public function volar(): string;
}
