# Arquitectura Hexagonal

La **arquitectura hexagonal**, también conocida como **puertos y adaptadores**, es un patrón de diseño de software que busca separar el núcleo de la aplicación de sus dependencias externas, permitiendo una mayor flexibilidad, testabilidad y mantenimiento.

## 📌 Principios Básicos

1. **Independencia del dominio**: La lógica de negocio es el núcleo de la aplicación y no debe depender de detalles de infraestructura como bases de datos o frameworks.
2. **Uso de puertos y adaptadores**:
   - 🔌 **Puertos**: Interfaces que definen los puntos de entrada y salida del sistema.
   - 🔄 **Adaptadores**: Implementaciones de los puertos que conectan la aplicación con tecnologías externas (bases de datos, APIs, UI, etc.).
3. **Separación de responsabilidades**: Separa claramente la lógica de negocio de la infraestructura y la capa de presentación.

## ✅ Beneficios

- 🚀 Facilita la **prueba unitaria** de la lógica de negocio.
- 🔄 Permite cambiar tecnologías (bases de datos, frameworks) sin afectar el núcleo de la aplicación.
- 🛠️ Mejora la **modularidad** y el mantenimiento del software.

## 🏗️ Estructura Típica

📂 **Capa de dominio**: Contiene la lógica de negocio y las entidades.
📂 **Capa de aplicación**: Define casos de uso e interfaces (puertos).
📂 **Capa de infraestructura**: Contiene implementaciones concretas de los adaptadores.

---

💡 Este patrón es ideal para aplicaciones con reglas de negocio complejas y facilita la evolución del software sin afectar su núcleo principal.

