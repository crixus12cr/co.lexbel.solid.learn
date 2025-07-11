<?php
namespace PrincipioISP\interfaces;

interface Manejable {

    /**
     * Método para manejar el vehículo.
     *
     * @return string Mensaje indicando que el vehículo está siendo manejado.
     */
    public function manejar(): string;
}
