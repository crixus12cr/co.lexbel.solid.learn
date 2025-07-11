<?php
namespace PrincipioISP\interfaces;

interface Volable {
    
    /**
     * Método para volar el vehículo.
     *
     * @return string Mensaje indicando que el vehículo está volando.
     */
    public function volar(): string;
}
