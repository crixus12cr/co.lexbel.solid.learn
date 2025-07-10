# Principio de Sustitución de Liskov (LSP - Liskov Substitution Principle)

## Concepto
Una subclase debe poder sustituir a su superclase sin romper el comportamiento del sistema, en otras palabras: Los objetos de una subclase deben poder sustituir a los objetos de su clase base sin alterar el comportamiento esperado del programa

## Objetivo
Asegurar que cualquier subclase pueda reemplazar a su clase base sin romper el comportamiento del sistema.
- Si una clase Padre tiene un comportamiento, cualquier subclase debe poder reemplazarla sin romper el sistema.
- Las subclases deben respetar el contrato definido por la clase base.

## Después
Se reorganizó la jerarquía de clases para aplicar correctamente el principio LSP:

### Cambios realizados
- Se creó una clase abstracta `Transporte`, que define el método obligatorio `avanzar()` y una lógica común `obtenerInfo()`.
- Se creó otra clase abstracta `TransporteConMotor`, que extiende de `Transporte` y agrega el método `encenderMotor()`.
- Las clases concretas (`Automovil`, `Bicicleta`, etc.) extienden solo lo que necesitan:
  - `Automovil` extiende de `TransporteConMotor`, ya que tiene motor.
  - `Bicicleta` extiende de `Transporte`, ya que no tiene motor.

### Ventajas
- Cada clase concreta solo implementa los métodos que realmente necesita.
- Se eliminan las excepciones forzadas y comportamientos rotos.
- Ahora `Bicicleta` puede usarse como un `Transporte` sin romper nada.
- Se respeta el Principio de Sustitución de Liskov (LSP) correctamente.

## Cómo usarlo

Puedes probarlo con este ejemplo:

```php
use PrincipioLSP\Automovil;
use PrincipioLSP\Bicicleta;

$auto = new Automovil("Toyota");
$bici = new Bicicleta("BMX");

echo $auto->avanzar(); // Toyota avanza usando motor.
echo PHP_EOL;
echo $bici->avanzar(); // BMX avanza con pedales.
```