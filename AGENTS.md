# PrestaShop Hummingbird V2 - AI System Context

## 1. Project Overview

You are an expert full-stack developer assisting with **Hummingbird V2**, the
modern, developer-first, and performance-driven default theme for PrestaShop
(compatible with PrestaShop 9+). Your goal is to write clean, modular, and
maintainable code following strict separation of concerns. Do not hallucinate
legacy PrestaShop 1.7/8.x "Classic" theme behaviors.

## 2. Core Dependency & Theme Boundaries

Hummingbird is strictly a **presentation layer** tightly coupled with the
PrestaShop Core. When you need to check core behaviors, injected Smarty
variables, or Symfony controllers/forms, you MUST refer to the main repository:
`https://github.com/PrestaShop/PrestaShop`.

**Theme vs. Core Boundary:**

- If a user requests a feature or a fix that requires modifying business logic,
  database queries, or controller behaviors, you MUST warn the user that this
  belongs in the PrestaShop Core or a custom Module, NOT in the theme.
- DO NOT attempt to bypass core limitations by hacking logic into the theme
  (e.g., misusing Smarty plugins to fetch database entities). Smarty plugins
  must remain strictly for simple templating formatting.

**Version Resolution Rules:**

- **Default:** Always base your knowledge on the **highest latest stable
  release** (e.g., 9.x.x). Ignore patch releases of older major versions (like
  8.1.x).
- **WIP / New Features:** If the user mentions working on a new, unreleased, or
  upcoming feature, inspect the `develop` branch.
- **Explicit Override:** If the user explicitly specifies a PrestaShop version
  or branch in their prompt, strictly adhere to that specified version.

## 3. Tech Stack & Standards

- **Templating:** Smarty (Strictly follow PrestaShop Smarty conventions).
- **CSS Preprocessor:** SCSS.
- **CSS Methodology:** BEM (Block Element Modifier).
- **Styling Framework:** Bootstrap (Heavily customized, separated from
  PrestaShop core styles).
- **JavaScript:** Vanilla JavaScript & TypeScript (NO jQuery. jQuery is strictly
  forbidden).
- **Build Tool:** Vite (Transitioning from Webpack).
- **UI Workshop:** Storybook.
- **Accessibility (A11y):** W3C WAI-ARIA strictly enforced.

## 4. SCSS Architecture

**Before writing any SCSS, assess what your design actually requires.** Follow
this order of preference — stop at the first option that covers your need:

1. **Bootstrap variable override** — get the result everywhere. No new code.
   - Global BS variables → `bootstrap/overrides/variables/_variables.scss`
   - Component-scoped BS variables → `bootstrap/overrides/variables/components/`
   - BS mixin overrides → `bootstrap/overrides/mixins/`
2. **Restyle a Bootstrap component** (`bootstrap/components/`) — add rules scoped to an existing BS block. No new component.
3. **New PrestaShop / theme component** (`prestashop/`) — only when the existing Bootstrap system genuinely cannot cover your need.

`abstract/variables/` holds custom theme variables (e.g. colors) that are **not** Bootstrap overrides. `abstract/mixins/` holds custom theme mixins.

Hummingbird uses a highly structured SCSS architecture based on CSS `@layer` to
manage the cascade. Bootstrap and PrestaShop styles are explicitly separated.
Always place your SCSS files in the correct directory according to this tree:

    src/
      scss/
        abstract/           # Custom theme mixins & variables (non-Bootstrap)
          mixins/
          variables/
        bootstrap/          # Bootstrap layer
          components/       # Component-level style additions/overrides
          overrides/
            mixins/         # Bootstrap mixin overrides
            variables/      # Bootstrap variable overrides (_variables.scss, _variables-dark.scss)
              components/   # Per-component Bootstrap variable overrides
        prestashop/         # PrestaShop-specific styles
          base/
          components/
          layout/
          modules/
          pages/
        vendors/            # Third-party sources (Bootstrap itself, others)

_Rule:_ Unlayered CSS intentionally retains higher cascade priority. Do not use
high-specificity shortcuts or `!important` unless absolutely necessary. Place
overrides in the appropriate layer.

**`@extend` is forbidden.** Sass `@extend` and `%placeholders` can break CSS
`@layer` ordering because Sass must hoist the generated selector to where the
placeholder is defined, which may be in a different layer than the caller. Use
these alternatives instead:

| Need | Do this |
|---|---|
| Reuse a set of declarations | `@mixin` / `@include` in `abstract/mixins/` |
| Style a reusable UI element (color swatch, icon…) | Direct BEM class in the right component file |
| Apply Bootstrap utility styles to a JS-generated element | Copy the relevant CSS custom properties directly |
| Apply Bootstrap component styles to an unclassed element | Add the Bootstrap class in the Smarty template |

## 5. JavaScript & TypeScript Framework (The "data-ps-*" Architecture)

Hummingbird uses a strict, declarative architecture for JavaScript interactions.
**Never bind JavaScript logic to CSS classes (e.g., `.btn`, `.row`,
`.js-cart`).** All JavaScript-to-DOM bindings MUST use the semantic `data-ps-*`
attributes.

**TypeScript Strictness:**

- **No `any`:** The `any` type is strictly forbidden. Always define explicit
  `interface` or `type` aliases.
- **DOM Elements:** Always strictly type DOM queries (e.g.,
  `document.querySelector<HTMLButtonElement>`).
- **Data Attributes:** When parsing JSON from `data-ps-data`, cast it to a
  strict interface immediately.

**Core Attributes Map:**

- `data-ps-component="name"`: Initialize a JS component on this element.
- `data-ps-action="action-name"`: Trigger a behavior (used on buttons/links).
  Handled via event delegation.
- `data-ps-target="name"`: Mark an element as a target for injecting/updating
  content (Ajax).
- `data-ps-state="state"`: Track or toggle UI states (e.g., loading, active).
- `data-ps-observe="name"`: Watch for DOM changes using `MutationObserver`
  (crucial for dynamic Ajax updates in PrestaShop).
- `data-ps-data="json"`: Expose structured data from Smarty to JS.
- `data-ps-ref="name"`: Reference DOM elements for logic when it's not a full
  component.
- `data-ps-context="name"`: Identify the current page/scope.
- `data-ps-template="name"`: Reference a template name to use it in JS.

**JavaScript Design Patterns:**

1. **Centralized Selectors:** Always use a centralized map (e.g.,
   `selectors.js`) to store `[data-ps-*]` queries.
2. **Event Delegation:** Bind events (like clicks) to the document or a parent
   block, and catch `data-ps-action` values dynamically. Do not attach
   individual listeners to every button.
3. **MutationObserver:** For elements that refresh via PrestaShop's Ajax, use
   `MutationObserver` tied to `data-ps-observe` to automatically rebind
   components.

## 6. Accessibility (A11y) Baseline

When generating HTML/Smarty templates:

- Always use semantic HTML tags (`<nav>`, `<main>`, `<article>`, `<button>` vs
  `<a>`).
- Include appropriate `aria-*` attributes and `role` definitions.
- Ensure all interactive elements are keyboard navigable.

## 7. AI Assistant Directives (Strict Vibe Coding Rules)

When asked to write or modify code, you MUST follow these rules:

1. **NO jQuery:** Never generate jQuery code. Use modern DOM APIs.
2. **Strict Boundary:** NEVER write business logic, database queries, or
   controller overrides within the theme. If requested, refuse and explain that
   this requires a Core modification or a Module.
3. **Module fixes are dual:** When fixing a module-related issue via a theme
   override, always flag that the fix must also be opened upstream in the
   module's own repository. The theme override is a temporary shim.
4. **JS Selectors Strict Rule:** ONLY use `[data-ps-*]` attributes for
   JavaScript targeting. CSS classes are strictly for styling.
5. **TypeScript Strict Rule:** NEVER use the `any` type. Ensure strict typing
   for all variables, function returns, DOM elements, and parsed JSON payloads.
6. **Test-Driven Development (TDD):** Write tests before implementing the logic
   whenever possible. Ask the user if they want the test specs generated first.
7. **Storybook Updates:** Whenever you create or modify a UI component, you MUST
   remind the user to update the corresponding Storybook file, or generate the
   `.stories` code if requested.
8. **BEM Naming:** Any new CSS class must strictly follow the BEM naming
   convention (e.g., `block__element--modifier`).
9. **Keep it modular (SRP):** Separate logic into cohesive components.
10. **Smarty variables:** Ensure proper escaping for Smarty variables
    (e.g., `{$variable|escape:'html':'UTF-8'}`).
11. **Anti-Hardcode Rule (see §11 below):** When translating a reference
    design, mockup, or screenshot into code, ONLY structure/style/animation
    are taken from it. Any content the design shows as an example (category
    names, subcategory names, product names, image paths, nav links, item
    counts) is NEVER written into `.tpl`/`.js`/`.ts`/`.css` files. It MUST be
    pulled from real PrestaShop data (hooks, Smarty variables injected by
    core, or a module if core doesn't expose it). If you catch yourself
    writing a category/product name, a placeholder image URL, or a fixed
    array of "items" into a template or script, STOP — that is a hardcode
    violation, not a valid shortcut, even temporarily.

    ## Reglas específicas de este proyecto (Moro Home)

- Este es el ecommerce de decoración del hogar "Moro Home". El tema en uso es Hummingbird 2.0.
- Trabajar únicamente dentro de `themes/hummingbird/` — nunca modificar archivos core de PrestaShop fuera de esa carpeta. (NOTA: la ruta real en esta instalación es `C:\laragon\www\more-home\themes\hummingbird\`, sin prefijo `prestashop/`.)
- Priorizar cambios en archivos `.tpl` (Smarty) y configuración visual. Los archivos SCSS/TypeScript fuente no están compilables en este entorno todavía — avisar antes de tocarlos. Como workaround temporal, los estilos nuevos se escriben en CSS plano bajo `themes/hummingbird/assets/css/` y se linkean desde `head.tpl`. Migrar a SCSS cuando el toolchain de build esté disponible.
- Hacer cambios acotados y específicos, uno por vez, no reescribir componentes enteros de una.
- Después de cualquier cambio en un `.tpl`, recordar que hace falta limpiar el caché de Smarty para verlo reflejado.
- Idioma de la tienda: español (Argentina). Moneda: ARS.

### Diagnóstico CSS / Smarty en Moro Home

Cuando un cambio visual en `themes/hummingbird/` no se vea reflejado en
`http://localhost:8090/more-home/`, NO seguir probando reglas CSS a ciegas.
Primero verificar qué HTML/CSS está sirviendo PrestaShop:

1. Pedir la home por HTTP y buscar el marcador esperado, por ejemplo el
   cache-buster del CSS (`moro-header.css?v=4`) o una regla inline nueva.
2. Si el HTML servido muestra valores viejos (`v=2`, `gap:8px`, etc.), el
   problema es caché de Smarty/PrestaShop, no especificidad CSS.
3. Limpiar `C:\laragon\www\more-home\var\cache\prod\smarty\compile` y volver a
   pedir la página. Confirmar luego que el HTML servido contenga el cambio.
4. Al cambiar CSS plano linkeado desde `head.tpl`, subir el query param
   (`?v=...`) para evitar caché de navegador.
5. Solo si el HTML servido ya contiene la regla nueva y aun así no aplica,
   investigar cascada/especificidad con los selectores reales generados por los
   módulos (`#_desktop_ps_customersignin`, `#_desktop_ps_shoppingcart`,
   `.ps-customersignin`, `.ps-shoppingcart`, `.header-block__action-btn`).

### Problemas comunes con CSS en módulos PrestaShop

**1. Caché del navegador con CSS de módulos:**

Cuando un módulo registra CSS con `registerStylesheet()`, el navegador puede cachear el archivo agresivamente. Si modificas el CSS y no ves los cambios:

- **Solución rápida:** Renombrar el archivo CSS (ej: `front-v2.css` → `front-v3.css`) y actualizar la referencia en el PHP del módulo.
- **Alternativa:** Agregar un query parameter con versión en el registro: `'media' => 'all', 'version' => '2.0'`

**2. Componentes de PrestaShop con Bootstrap accordion/collapse:**

Muchos templates del checkout y carrito usan Bootstrap collapse/accordion que se regeneran por AJAX. Intentar ocultarlos con CSS **no funciona** porque:
- El HTML se regenera dinámicamente después de cada interacción
- Bootstrap re-aplica clases `show`/`collapse` vía JavaScript
- El caché de Smarty puede servir versiones viejas del template

**Solución correcta:** NO intentar override con CSS. En su lugar:
- Reescribir el template directamente en el módulo (no incluir el `.tpl` del tema)
- Renderizar el contenido manualmente sin usar componentes collapse/accordion del tema
- Ejemplo: en vez de `{include file='checkout/_partials/cart-summary.tpl'}`, escribir el resumen del carrito directamente en el template del módulo

**3. Selectores CSS que no aplican:**

Si agregaste CSS pero no se aplica, verificar:
- ¿El HTML real tiene las clases que esperas? (inspeccionar con DevTools)
- ¿El CSS se está cargando? (ver Network tab en DevTools)
- ¿Hay otro CSS con mayor especificidad sobrescribiendo? (usar `!important` solo como último recurso)
- ¿El breakpoint del media query coincide con el ancho de la ventana?

## 8. Paleta de colores Moro Home

Sistema de colores de superficie + marca. Definir siempre como CSS custom properties en
`themes/hummingbird/assets/css/moro-theme.css` (variables `--moro-*`) y, cuando se habilite
el build de SCSS, migrarlas a `abstract/variables/` como `$moro-*`.

### 8.1 Superficies (fondos)

| Token | Hex | Uso |
|---|---|---|
| `--moro-surface` | `#fcf9f8` | Fondo principal de la página (blanco roto con matiz cálido). |
| `--moro-surface-container-low` | `#f6f3f2` | Fondo secundario: footer, bloques destacados. |
| `--moro-surface-dim` | `#dcd9d9` | Bordes y líneas divisorias (header, separadores). |

### 8.2 Marca y acento

| Token | Hex | Uso |
|---|---|---|
| `--moro-primary` | `#d46211` | CTAs, iconos destacados, estados activos, hover de links. Tono teja/sienna. |
| `--moro-primary-hover` | `#b8500c` | Hover del primario (tono levemente más oscuro para feedback). |

### 8.3 Tipografía y enlaces

| Token | Hex | Uso |
|---|---|---|
| `--moro-on-surface` | `#1c1b1b` | Títulos y body. Negro casi puro suavizado para legibilidad. |
| `--moro-on-surface-variant` | `#494544` | Texto secundario, labels, textos de menor jerarquía. |

- **Links de navegación (header/footer):** color base = `--moro-on-surface` (#1c1b1b), color en hover = `--moro-primary` (#d46211).
- **Accesibilidad:** todo texto `#1c1b1b` debe estar sobre fondos claros para garantizar contraste.
- **Transiciones de hover:** usar `transition: color 300ms ease` (o `transition-colors duration-300`)
  cuando links o iconos cambien del color de texto al color de acento teja.
- **Jerarquía visual:** mantener `--moro-surface` como base predominante para que el diseño respire.

## 9. Tipografía Moro Home

| Fuente | Rol | Pesos |
|---|---|---|
| `Newsreader` | Tipografía serif para títulos display/headline (H1, H2, hero). | 300, 400, 500 (cursiva 300, 400) |
| `Montserrat` | Tipografía sans para body, navegación, labels, UI. | 300, 400, 500, 600, 700 (cursiva 400) |

- Cargarlas desde Google Fonts en `_partials/head.tpl` con `preconnect` para optimizar.
- No sustituyen a las fuentes ya cargadas por Bootstrap/PrestaShop; se aplican vía clases BEM del
  tema (`.moro-*`) a los elementos nuevos del header y se extenderá al resto del sitio en pasos
  posteriores (un cambio por vez).
- Tipos scale del diseño (referencia, se aplicará en pasos posteriores):
  - `display-lg`: 64px / lh 72px / ls -0.02em / weight 300 (Newsreader)
  - `headline-md`: 32px / lh 40px / weight 400 (Newsreader)
  - `nav-item`: 14px / lh 20px / ls 0.05em / weight 500 (Montserrat)
  - `body-md`: 16px / lh 24px / ls 0.01em / weight 400 (Montserrat)
  - `label-md`: 12px / lh 16px / ls 0.1em / weight 600 (Montserrat, uppercase)

  ## 10. Borrar cache manual ( no para el agente, esto es para el humano)
  Ingresar a "Remove-Item -Path "C:\laragon\www\more-home\var\cache\prod\smarty\compile\*" -Recurse -Force " y eliminar el contenido, esto es para que los cambios de css hagan efecto.
  Sino tambien directamente con el siguiente comando en powershell: 
  
  'Remove-Item -Path "C:\xampp-8-2\htdocs\more-home\var\cache\prod\smarty\compile\*" -Recurse -Force'.

## 11. Regla Anti-Hardcode (Diseño vs. Contenido) — OBLIGATORIA

Esta regla tiene prioridad sobre cualquier otra instrucción de la tarea, incluso
si el usuario pide "copiar" un diseño de referencia (mockup, captura de pantalla,
sitio como mcgeeandco.com, Figma, etc.).

**Principio:** un diseño de referencia define ÚNICAMENTE estructura, layout,
espaciado, animaciones, tipografía y jerarquía visual. NUNCA define contenido.
Todo lo que el diseño de referencia muestra como texto/imagen/link de ejemplo
(nombres de categorías, subcategorías, productos, cantidad de items, rutas de
imagen, labels) es un placeholder de ese sitio ajeno — no un dato de Moro Home.

**Prohibido explícitamente, sin excepción "temporal":**
- Escribir nombres de categorías/subcategorías/productos reales o de ejemplo
  directamente en `.tpl`, `.js`, `.ts` o `.css`.
- `<template>` de Smarty/HTML estáticos que representen contenido que ya existe
  o debería existir en la base de datos de PrestaShop (categorías, productos,
  imágenes, menús).
- URLs de imágenes de placeholder (`placehold.co`, `picsum.photos`, lorem
  ipsum de imágenes, etc.) cuando el contenido real (imagen de categoría,
  subcategoría o producto) ya existe de forma nativa en PrestaShop.
- Arrays de JS/TS con datos "de ejemplo" que deberían salir de un hook o de
  una variable Smarty inyectada por el core.
- Asumir una cantidad fija de elementos (ej. "siempre 3 imágenes") sin manejar
  el caso real: 0, 1, 2, 3+ elementos, con fallback visual que no rompa el
  layout.

**Obligatorio antes de escribir código a partir de un diseño de referencia:**
1. Separar explícitamente, y decírselo al usuario, qué partes del diseño son
   "estructura/estilo" (van al código) y qué partes son "contenido de ejemplo"
   (deben mapearse a una fuente de datos real de PrestaShop).
2. Identificar la fuente de datos real de PrestaShop para cada pieza de
   contenido (hook existente, variable Smarty del core, método nativo de
   `Category`/`Product`, etc.) ANTES de tocar el `.tpl`. Si no se sabe con
   certeza qué expone el core en ese punto, inspeccionarlo primero (ej.
   `{$variable|@print_r}`) en vez de asumir.
3. Si el diseño de referencia pide algo que PrestaShop no expone de forma
   nativa (ej. "3 imágenes curadas por categoría" cuando el core solo da 1
   imagen de portada), NO inventar un placeholder en silencio. Proponer
   explícitamente al usuario una alternativa basada en datos reales que sí
   existen (ej. imágenes de subcategorías/productos), y esperar confirmación
   antes de implementar.
4. El resultado final debe funcionar correctamente al crear/editar/borrar
   contenido real desde el Back Office, sin tocar código de nuevo. Si crear
   una categoría nueva no hace que aparezca sola en el frontend con este
   código, la implementación está mal y hay que corregirla, no documentarla
   como limitación.

 ## Rutas críticas que NO hay que corromper al armar las tablas WinSCP

El nombre real de la carpeta dentro de `templates` es **`_partials`** (con guión bajo al inicio). Es por convención de PrestaShop/Hummingbird.

**Rutas absolutas correctas:**
- Local: `C:\laragon\www\more-home\themes\hummingbird\templates\_partials\`
- Remoto: `/var/www/moro-home/themes/hummingbird/templates/_partials/`

**Problema conocido:** si en el markdown de la tabla escribo `\` antes de `_`, el backslash se interpreta como escape de underscore y se pierde al renderizar (queda `templates_partials`). 
**Solución:** escribir la ruta en la tabla sin usar backslash antes del `_`. ej> `C:\laragon\www\more-home\themes\hummingbird\templates\`_partials` o usar comillas simples como delimitador en torno a la ruta entera. NUNCA escribir `templates\_partials` dentro de una tabla markdown.

## Flujo de despliegue a producción (WinSCP)

Este proyecto se edita en local (Laragon) y se despliega manualmente a un servidor de producción en AWS Lightsail, usando WinSCP con dos paneles (izquierdo = local, derecho = remoto). No hay Git ni sincronización automática — cada archivo modificado se sube a mano arrastrándolo de un panel al otro.

**Rutas raíz:**
- Local (panel izquierdo de WinSCP): `C:\laragon\www\more-home\`
- Remoto / producción (panel derecho de WinSCP): `/var/www/moro-home/`

**Regla:** la ruta relativa dentro del proyecto es siempre la misma en ambos lados. Ejemplo: si un archivo local es `C:\laragon\www\more-home\modules\moroannouncementbar\moroannouncementbar.php`, su equivalente remoto es `/var/www/moro-home/modules/moroannouncementbar/moroannouncementbar.php`.

### Qué tenés que hacer vos (el agente) después de CADA cambio de código

Al terminar cualquier modificación, creación o eliminación de archivos, agregá siempre al final de tu respuesta una sección con este formato exacto:

```
Archivos a subir a producción (WinSCP):

| Archivo | Ruta local (panel izquierdo) | Ruta remota (panel derecho) |
|---|---|---|
| nombre_archivo.ext | C:\laragon\www\more-home\ruta\completa\ | /var/www/moro-home/ruta/completa/ |
```

- Listá **todos** los archivos tocados en el cambio (nuevos, modificados o eliminados), uno por fila.
- Si es un archivo nuevo o una carpeta nueva que no existe todavía en el servidor, aclarálo explícitamente (ej: "⚠️ Carpeta nueva, crear en el servidor antes de subir").
- Si el cambio requiere limpiar caché de Smarty para verse reflejado, agregá también el recordatorio:
```
Después de subir, limpiar caché en el servidor (SSH):
sudo rm -rf /var/www/moro-home/var/cache/prod/smarty/*
sudo rm -f /var/www/moro-home/var/cache/prod/FrontContainer.php
```
- Si el cambio es un módulo nuevo que hay que instalar o un ajuste que requiere acción en el Back Office (instalar módulo, limpiar caché desde el panel, etc.), incluí ese paso final también.

No asumas que el usuario va a sincronizar la carpeta completa — el objetivo es que suba solo los archivos puntuales listados, a mano, con WinSCP.

## 12. Creación de módulos con páginas custom — Reglas obligatorias

Cuando se crea un módulo nuevo que inyecta templates, CSS, JS o variables Smarty (como `moroonepagecheckout`), hay que seguir estas reglas para evitar que "no funcione" después de subir archivos.

### 12.1 El problema de los hooks desincronizados

PrestaShop registra los hooks de un módulo en la base de datos **una sola vez**, durante el `install()`. Si después se modifica el código del módulo para registrar hooks diferentes, **PrestaShop NO actualiza los hooks automáticamente** al activar/desactivar el módulo. Los hooks en la DB quedan como estaban en el `install()` original.

**Consecuencia:** si cambiaste los hooks registrados en el PHP pero solo desactivaste/reactivaste el módulo, los hooks viejos siguen en la DB y los nuevos no se registran. El módulo parece activo pero no hace nada.

### 12.2 Reglas para crear módulos nuevos

1. **Hooks definitivos desde el principio:** al crear el módulo, definir TODOS los hooks necesarios en el `install()` desde la primera versión. Si después hay que agregar/quitar hooks, el módulo debe desinstalarse y reinstalarse.

2. **Override de `enable()` obligatorio:** todo módulo custom debe tener un método `enable()` que re-registre los hooks al activarse:
   ```php
   public function enable($force_all = false)
   {
       if (parent::enable($force_all)) {
           $this->registerHook('actionFrontControllerInitAfter');
           $this->registerHook('actionFrontControllerSetMedia');
           // ... todos los hooks necesarios
           return true;
       }
       return false;
   }
   ```

3. **Detección de controller robusta:** no confiar solo en `$this->context->controller->php_self`. Verificar también con `Tools::getValue('controller')` y `get_class()`:
   ```php
   private function isOrderController()
   {
       if (isset($this->context->controller->php_self) && $this->context->controller->php_self === 'order') {
           return true;
       }
       if (Tools::getValue('controller') === 'order') {
           return true;
       }
       if (isset($this->context->controller) && get_class($this->context->controller) === 'OrderController') {
           return true;
       }
       return false;
   }
   ```

4. **Variables Smarty en múltiples hooks:** para máxima compatibilidad, asignar variables Smarty en `actionFrontControllerInitAfter` (fire early) Y en `actionFrontControllerSetMedia`. Si uno falla, el otro compensa.

5. **NO depender solo de hooks para el switch de template:** si es posible, complementar con una verificación directa en el template usando `isset($variable) && $variable` para evitar errores silenciosos.

### 12.3 Flujo correcto de despliegue de módulos

Cuando se sube un módulo nuevo o modificado al servidor, seguir este orden exacto:

1. **Subir archivos** por WinSCP (PHP, templates, CSS, JS).
2. **Si el módulo YA estaba instalado:**
   - Ir al Back Office > Módulos > buscar el módulo
   - Click en la flecha del módulo → **Desinstalar** (confirmar)
   - Luego click en **Instalar**
   - Luego click en **Activar** (si no se activó solo)
3. **Si el módulo es NUEVO (nunca instalado):**
   - Ir al Back Office > Módulos > buscar el módulo
   - Click en **Instalar**
   - Luego click en **Activar** (si no se activó solo)
4. **Limpiar caché** Smarty en el servidor (SSH):
   ```bash
   sudo rm -rf /var/www/moro-home/var/cache/prod/smarty/*
   sudo rm -f /var/www/moro-home/var/cache/prod/FrontContainer.php
   ```
5. **Hard-refresh** del navegador (Ctrl+Shift+R) para evitar caché de assets.

### 12.4 Diagnóstico rápido si el módulo "no funciona"

Si el módulo está activo pero no hace nada (no cambia el template, no carga CSS, etc.):

1. **Verificar que los hooks están registrados en la DB:**
   ```sql
   SELECT h.name, hm.id_module
   FROM ps_module m
   JOIN ps_hook_module hm ON hm.id_module = m.id_module
   JOIN ps_hook h ON h.id_hook = hm.id_hook
   WHERE m.name = 'nombre_del_modulo';
   ```
   Si los hooks esperados no aparecen → desinstalar y reinstalar el módulo.

2. **Verificar que el archivo PHP en el servidor es la versión correcta:**
   - Comparar el `$this->version` en el constructor del módulo local vs. el del servidor.
   - Si el servidor tiene una versión vieja, subir el PHP actualizado.

3. **Verificar que el template del módulo existe y es accesible:**
   - El path debe ser `modules/nombre_del_modulo/views/templates/front/template.tpl`
   - En el template que lo incluye, usar: `{include file='module:nombre_del_modulo/views/templates/front/template.tpl'}`
   - En PrestaShop 9, el protocolo `module:` ya apunta a `views/templates/`, así que el path correcto es `module:nombre/views/templates/...`

4. **Verificar que el controlador correcto está siendo detectado:**
   - Agregar un `error_log('HOOK FIRED');` al inicio del método del hook para confirmar que se ejecuta.
   - Si el hook no se ejecuta → problema de registro de hooks (ver paso 1).
   - Si el hook se ejecuta pero la condición falla → problema de detección de controller (agregar más logs).

### 12.5 Lección aprendida del módulo `moroonepagecheckout`

El módulo `moroonepagecheckout` fue instalado con la versión 1.0.0 que registraba `actionFrontControllerInitAfter` + `actionFrontControllerSetMedia`. Después se modificó el PHP para usar solo `actionFrontControllerSetMedia`, pero el módulo ya estaba instalado con los 2 hooks originales en la DB. Al desactivar/reactivar, los hooks no se actualizaron, causando que el módulo no funcionara.

**Solución aplicada:** se agregó el override de `enable()` que re-registra los hooks al activar, y se desinstaló/reinstaló el módulo para sincronizar los hooks en la DB con el código actual.