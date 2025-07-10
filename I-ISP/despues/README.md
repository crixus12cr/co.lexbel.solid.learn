# Principio de Segregación de Interfaces (ISP - Interface Segregation Principle)

## Concepto:
Una clase no debe estar obligada a implementar métodos que no necesita, ni debe verse obligado a depender de interfaces que no utiliza.

## Objetivo
Evitar que las clases implementen métodos que no necesitan.
- Las interfaces deben ser específicas y no obligar a las clases a implementar métodos que no necesiten.
- Es mejor tener interfaces pequeñas y enfocadas que una grande y genérica.

## Antes
La interfaz general `antesISP\TransporteAvanzado` obliga la implementación de métodos innecesarios como `volar()` el cual no es aplicable a la clase `antesISP\Auto`.

- La interfaz es grande y mal diseñada.
- Obliga a todas las clases a implementar métodos que no usan.
- El Auto debe implementar volar() aunque no aplique, y si otro medio de transporte fuera la Bicicleta tendría el mismo problema.
- Esto genera excepciones innecesarias y confusión.

## Después
Se crearon las interfaces `PrincipioISP\interfaces\Manejable` y `PrincipioISP\interfaces\Volable`, en donde cada una tiene una única responsabilidad, y se crearon las clases `PrincipioISP\Auto`,  `PrincipioISP\Avion` y `PrincipioISP\AutoVolador` que implementan solo lo necesario.

## Explicación
Separamos las interfaces. Cada clase implementa solo lo que necesita. No más métodos vacíos o sin sentido.

## Beneficios
- Interfaces más específicas y enfocadas.
- Clases más limpias y enfocadas.
- No se obliga a una clase a implementar métodos que no necesita.
- Si una interfaz es demasiado grande, probablemente debe dividirse.
- Este principio hace que el código sea modular, claro y flexible.

## Para tener en cuenta
- Recordar que las interfaces también pueden extender de otras interfaces para reutilización y combinación de métodos
- Recordar que una clase puede implementar varias interfaces, por ejemplo, una clase `PrincipioISP\AutoVolador` implementa las interfaces `PrincipioISP\interfaces\Manejable` y `PrincipioISP\interfaces\Volable`
- Tener en cuenta que una clase en PHP solo puede extender desde una (1) sola clase

## Ejemplo de uso
```
use PrincipioISP\Avion;
use PrincipioISP\Auto;
use PrincipioISP\AutoVolador;

$auto = new Auto();
echo $auto->manejar(); // Manejando auto

$avion = new Avion();
echo $avion->volar(); // Volando en AirLex

$autoVolador = new AutoVolador();
echo $autoVolador->manejar(); // Manejando auto
echo $autoVolador->volar(); // Volando en auto
```
