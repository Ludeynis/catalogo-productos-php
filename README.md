# Catálogo Dinámico de Productos (PHP y Front-End)
Catálogo dinámico de productos. Backend en PHP (Arrays asociativos) y Front-end modular con CSS.
[![Tecnología](https://img.shields.io/badge/Tecnología-PHP-blue)](https://www.php.net/) 
[![Estilos](https://img.shields.io/badge/Estilos-CSS3-informational)](https://developer.mozilla.org/es/docs/Web/CSS)

Este proyecto simula la estructura de datos y la presentación de un catálogo web. Su principal objetivo es demostrar la **separación de la lógica del servidor (PHP) y la presentación (HTML/CSS)**, utilizando arrays asociativos anidados para gestionar los distintos productos.

## Características Implementadas

* **Estructura de Datos (Back-End):** Uso de un array de arrays asociativos (`$productos`) para simular una base de datos de productos. Cada producto tiene propiedades como `nombre`, `precio`, `disponibilidad` y `imagen`.
* **Generación Dinámica de HTML:** Uso de la estructura de control **`foreach`** en PHP para iterar sobre el array y generar automáticamente el marcado HTML (`<article class="producto">`) para cada ítem.
* **Funciones Personalizadas:** Creación de la función `formateoPrecio()` para encapsular la lógica de negocio y asegurar un formato de precio consistente (`X.XXX,XX€`).
* **Lógica Condicional:** Implementación de sentencias **`if/else`** para cambiar dinámicamente la presentación del producto según su estado (`disponibilidad`), mostrando un mensaje y estilo diferente ("¡Disponible!" o "¡Agotado!").
* **Conversión de Tipos (Casting):** Uso de *casting* explícito `(int)` para asegurar que el ID del producto se maneje como un entero.

## Tecnologías

* **PHP** (Lógica del servidor)
* **HTML5** (Estructura)
* **CSS3** (Estilos para la presentación del catálogo)
