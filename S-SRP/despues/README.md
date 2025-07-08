# Principio de Responsabilidad Única (SRP - Single Responsability Principle)

## Concepto
Una clase debe tener una sola responsabilidad y una sola razón para cambiar.

## Objetivo
Demostrar cómo una clase debe tener una sola responsabilidad o motivo de cambio.
- Una clase debe tener una sola responsabilidad o propósito.
- Si una clase tiene más de una responsabilidad, está mal diseñada porque cualquier cambio en una de ellas puede afectar a las demás

## Después

Se refactorizó la clase original dividiendo sus responsabilidades en clases independientes, cada una con una única razón para cambiar.

### Cambios aplicados

Se crearon las siguientes clases:

- `CalcularRuta`: se encarga únicamente de calcular rutas.
- `GuardarRecorrido`: se encarga únicamente de guardar recorridos.
- `ServicioRecorrido`: coordina el uso de ambas clases, sin asumir sus responsabilidades internas.

### Ventajas

- Cada clase tiene una única responsabilidad clara.
- Los cambios en el cálculo de rutas no afectan el guardado.
- Los cambios en el mecanismo de almacenamiento (archivo, base de datos, nube) no afectan el cálculo de rutas.
