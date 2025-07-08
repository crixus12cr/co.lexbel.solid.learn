<?php

namespace PrincipioSRP;

class ServicioRecorrido {

    private CalcularRuta $calcularRuta;
    private GuardarRecorrido $guardarRecorrido;

    public function __construct(
        CalcularRuta $calcularRuta,
        GuardarRecorrido $guardarRecorrido
    ) {
        $this->calcularRuta = $calcularRuta;
        $this->guardarRecorrido = $guardarRecorrido;
    }

    /**
     * Calcula y guarda la ruta entre origen y destino.
     *
     * @param string $origen
     * @param string $destino
     * @return void
     */
    public function procesar(string $origen, string $destino): void {
        $ruta = $this->calcularRuta->calcular($origen, $destino);
        $this->guardarRecorrido->guardar($ruta);
    }
}
