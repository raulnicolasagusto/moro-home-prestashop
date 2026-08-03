# Tabla de códigos de provincia — API Correo Argentino (MiCorreo)

Fuente: manual oficial de la API MiCorreo (`/agencies` endpoint, parámetro `provinceCode`).
Coincide con la norma ISO 3166-2:AR — es la misma letra que la primera letra del CPA.

| Código | Provincia |
|---|---|
| A | Salta |
| B | Buenos Aires (provincia) |
| C | Ciudad Autónoma de Buenos Aires |
| D | San Luis |
| E | Entre Ríos |
| F | La Rioja |
| G | Santiago del Estero |
| H | Chaco |
| J | San Juan |
| K | Catamarca |
| L | La Pampa |
| M | Mendoza |
| N | Misiones |
| P | Formosa |
| Q | Neuquén |
| R | Río Negro |
| S | Santa Fe |
| T | Tucumán |
| U | Chubut |
| V | Tierra del Fuego |
| W | Corrientes |
| X | Córdoba |
| Y | Jujuy |
| Z | Santa Cruz |

## Reglas de resolución CP → provincia

1. **Si el CP viene con letra (CPA completo, ej. `X5000ABC`)** → la primera letra
   YA ES el `provinceCode` exacto. No hace falta ninguna tabla de rangos, es una
   correspondencia 1 a 1 garantizada por la norma ISO 3166-2:AR.

2. **Si el CP viene sin letra (formato viejo de 4 dígitos, ej. `5000`)** → no hay
   norma oficial de rango numérico a provincia. Para este caso, generar una
   tabla de rangos numéricos a partir de un dataset público confiable
   (ej. `datar.info/dataset/codigo-postal-argentino`), en vez de adivinar
   rangos a mano.

## Por qué esto es necesario (y no un enfoque equivocado)

El endpoint `/agencies` de la API de Correo Argentino (MiCorreo) **solo acepta
`provinceCode` como filtro** — no acepta código postal. No existe otra forma de
consultar sucursales "cerca de un CP" en una sola llamada; hay que resolver la
provincia primero, en el propio servidor, y recién ahí llamar a la API una vez.