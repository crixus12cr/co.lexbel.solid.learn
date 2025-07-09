# Principio Abierto/Cerrado (OCP - Open/Closed Principle)

## Concepto
El código debe estar abierto a extensión, pero cerrado a modificación.

## Objetivo
Permitir que el sistema pueda ser extendido sin modificar el código base existente, es decir:
- Se deben poder agregar nuevas funcionalidades sin modificar el código existente.
- Si cada vez que se agrega algo nuevo tienes que modificar la misma clase, estás violando este principio.

## Después
Se refactorizó el diseño creando una interfaz común para los tipos de transporte y una clase específica para cada uno. Esto permite agregar nuevos transportes sin modificar la clase principal.

### Cambios realizados
- Se creó la interfaz `TarifaTransporteInterface` que define el método `calcular()`.
- Se implementó una clase por tipo de transporte (`TarifaAuto`, `TarifaBus`, etc.).
- La clase `CalculadorTarifa` depende de la interfaz, no de clases concretas.
- Para agregar un nuevo transporte, solo se crea una nueva clase que implemente la interfaz, sin modificar el código existente.

### Ventajas
- El sistema ahora es abierto a nuevas extensiones (nuevos tipos de transporte).
- No es necesario modificar `CalculadorTarifa` al agregar un nuevo transporte.
- Se respeta el principio abierto/cerrado (OCP).