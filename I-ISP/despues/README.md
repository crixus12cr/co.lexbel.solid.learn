# Principio de Segregación de Interfaces (ISP - Interface Segregation Principle)

## Concepto:
Una clase no debe estar obligada a implementar métodos que no necesita, ni debe verse obligado a depender de interfaces que no utiliza.

## Objetivo
Evitar que las clases implementen métodos que no necesitan.
- Las interfaces deben ser específicas y no obligar a las clases a implementar métodos que no necesiten.
- Es mejor tener interfaces pequeñas y enfocadas que una grande y genérica.

## Después

1. Se dividió la interfaz original en dos:
   - `Manejable`: para transportes que se pueden conducir.
   - `Volable`: para transportes que pueden volar.
   
2. Se implementaron clases separadas:
   - `Auto` implementa solo `Manejable`.
   - `Avion` implementa `Manejable` y `Volable`.

### Beneficios

- Ahora cada clase implementa únicamente los métodos que le corresponden.
- Se evita código muerto o excepciones innecesarias.
- El sistema es más flexible, limpio y fácil de mantener.

---

## Convención `-able` en interfaces

### ¿Por qué llamamos a las interfaces `Manejable` y `Volable`?

PHP **no exige usar `-able`**, es una **convención ampliamente usada** porque:

- Comunica **capacidad**: `Manejable` = que puede ser manejado.
- Mejora la legibilidad del código.
- Es estándar en lenguajes POO como Java (`Serializable`, `Cloneable`) o C# (`IEnumerable`, `IDisposable`).
- Frameworks PHP como Laravel y Symfony también usan esta convención:
- `Arrayable`, `Renderable`, `Responsable`, `ResettableInterface`, etc.

> Por lo tanto, aunque no es obligatorio, usar `-able` es una **práctica profesional y clara**, ideal para proyectos bien estructurados.

---

## Cómo usarlo

```php
use PrincipioISP\Auto;
use PrincipioISP\Avion;

$auto = new Auto();
$avion = new Avion();

echo $auto->manejar();
echo $avion->volar();
```
