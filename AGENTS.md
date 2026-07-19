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

    ## Reglas específicas de este proyecto (Moro Home)

- Este es el ecommerce de decoración del hogar "Moro Home". El tema en uso es Hummingbird 2.0.
- Trabajar únicamente dentro de `themes/hummingbird/` — nunca modificar archivos core de PrestaShop fuera de esa carpeta. (NOTA: la ruta real en esta instalación es `C:\xampp-8-2\htdocs\more-home\themes\hummingbird\`, sin prefijo `prestashop/`.)
- Priorizar cambios en archivos `.tpl` (Smarty) y configuración visual. Los archivos SCSS/TypeScript fuente no están compilables en este entorno todavía — avisar antes de tocarlos. Como workaround temporal, los estilos nuevos se escriben en CSS plano bajo `themes/hummingbird/assets/css/` y se linkean desde `head.tpl`. Migrar a SCSS cuando el toolchain de build esté disponible.
- Hacer cambios acotados y específicos, uno por vez, no reescribir componentes enteros de una.
- Después de cualquier cambio en un `.tpl`, recordar que hace falta limpiar el caché de Smarty para verlo reflejado.
- Idioma de la tienda: español (Argentina). Moneda: ARS.

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
  Ingresar a "C:\xampp-8-2\htdocs\more-home\var\cache\prod\smarty\compile" y eliminar el contenido, esto es para que los cambios de css hagan efecto.
  Sino tambien directamente con el siguiente comando en powershell: 
  
  'Remove-Item -Path "C:\xampp-8-2\htdocs\more-home\var\cache\prod\smarty\compile\*" -Recurse -Force'.