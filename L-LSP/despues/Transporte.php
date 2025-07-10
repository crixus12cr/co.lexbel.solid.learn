<?php
namespace PrincipioLSP;

abstract class Transporte {
    /**
     * Método abstracto que debe ser implementado por las clases hijas
     * para definir cómo se avanza con el transporte.
     *
     * @return string
     */
    abstract public function avanzar(): string;
}
