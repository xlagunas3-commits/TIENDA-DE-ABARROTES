# Guía de Uso del Panel de Administración

## Acceso Rápido

### Iniciar el servidor
```bash
php artisan serve
```

El servidor estará disponible en: `http://127.0.0.1:8000`

### Acceder al panel de administración
```
http://127.0.0.1:8000/admin
```

## Estructura del Panel

### Barra Lateral (Sidebar)
Localizada a la izquierda de la pantalla con las siguientes opciones:
- 📊 **Dashboard** - Panel principal con estadísticas
- 📁 **Categorías** - Gestión de categorías de productos
- 📦 **Productos** - Gestión de productos
- 🚚 **Proveedores** - Gestión de proveedores
- 📋 **Pedidos** - Gestión de pedidos
- 👥 **Usuarios** - Gestión de usuarios

### Secciones Principales

#### 1. Dashboard
Muestra un resumen de estadísticas:
- Total de categorías
- Total de productos
- Total de proveedores
- Total de pedidos y usuarios
- Enlaces rápidos para crear nuevos registros

#### 2. Categorías
**Operaciones disponibles:**
- ✅ Listar todas las categorías con paginación
- ✅ Crear nueva categoría
- ✅ Ver detalles de una categoría
- ✅ Editar categoría existente
- ✅ Eliminar categoría

**Campos:**
- Nombre * (requerido, único)
- Descripción (opcional)

#### 3. Productos
**Operaciones disponibles:**
- ✅ Listar productos con categoría relacionada
- ✅ Crear nuevo producto
- ✅ Ver detalles del producto
- ✅ Editar producto
- ✅ Eliminar producto
- ⚠️ Alerta de stock bajo (rojo si < 10)

**Campos:**
- Nombre * (requerido)
- Categoría * (requerido)
- Descripción (opcional)
- Precio * (requerido, numérico)
- Stock * (requerido, numérico)

#### 4. Proveedores
**Operaciones disponibles:**
- ✅ Listar proveedores
- ✅ Crear nuevo proveedor
- ✅ Ver detalles del proveedor
- ✅ Editar proveedor
- ✅ Eliminar proveedor

**Campos:**
- Nombre * (requerido)
- Email de Contacto * (requerido, válido)
- Teléfono * (requerido)
- Dirección (opcional)

#### 5. Pedidos
**Operaciones disponibles:**
- ✅ Listar pedidos con usuario y estado
- ✅ Crear nuevo pedido
- ✅ Ver detalles del pedido con artículos
- ✅ Editar pedido (usuario, total, estado)
- ✅ Eliminar pedido

**Estados disponibles:**
- 🟡 Pendiente (Pending)
- 🟢 Completado (Completed)
- 🔴 Cancelado (Cancelled)

**Campos:**
- Usuario * (requerido)
- Total * (requerido, numérico)
- Estado * (pendiente, completado, cancelado)

#### 6. Artículos de Pedidos
**Operaciones disponibles:**
- ✅ Listar artículos de pedidos
- ✅ Crear nuevo artículo
- ✅ Ver detalles del artículo
- ✅ Editar artículo
- ✅ Eliminar artículo

**Campos:**
- Pedido * (requerido)
- Producto * (requerido)
- Cantidad * (requerido, mínimo 1)
- Precio * (requerido, numérico)

#### 7. Usuarios
**Operaciones disponibles:**
- ✅ Listar usuarios
- ✅ Crear nuevo usuario
- ✅ Ver detalles del usuario
- ✅ Editar usuario
- ✅ Eliminar usuario

**Campos para creación:**
- Nombre * (requerido)
- Email * (requerido, único, válido)
- Contraseña * (requerido, mínimo 8 caracteres)
- Confirmación de contraseña * (debe coincidir)

**Campos para edición:**
- Nombre * (requerido)
- Email * (requerido, único - excepto el actual)
- Contraseña (opcional, dejar en blanco si no se desea cambiar)
- Confirmación de contraseña (si se ingresa contraseña)

## Funcionalidades

### Listado de Registros
- Cada tabla muestra registros con paginación de 10 por página
- Botones para ver, editar y eliminar cada registro
- Navegación entre páginas al pie de la tabla

### Crear Registro
1. Haz clic en el botón "+ Nuevo [Entidad]"
2. Completa el formulario con la información requerida
3. Los campos obligatorios están marcados con *
4. Haz clic en "Crear [Entidad]"
5. Si hay errores, se mostrarán debajo del campo correspondiente

### Editar Registro
1. Ve a la tabla de la entidad que deseas editar
2. Haz clic en el botón "Editar" del registro
3. Modifica los campos que desees
4. Haz clic en "Guardar Cambios"
5. Se mostrará un mensaje de confirmación

### Eliminar Registro
1. En la tabla, encuentra el registro a eliminar
2. Haz clic en el botón "Eliminar"
3. Se solicitará confirmación
4. Una vez confirmado, el registro se eliminará
5. Se mostrará un mensaje de confirmación

### Ver Detalles
1. Haz clic en el botón "Ver" de cualquier registro
2. Se mostrarán todos los detalles del registro
3. Desde aquí puedes editarlo o volver a la lista

## Validaciones

### Lado del Servidor
- Campos requeridos no pueden estar vacíos
- Emails deben ser válidos y únicos
- Números deben ser numéricos y no negativos
- Stock debe ser número entero
- Contraseñas mínimo 8 caracteres
- Las contraseñas se almacenan de forma segura con hash

### Mensajes de Error
- Si hay error de validación, se muestran mensajes en rojo bajo el campo
- Todos los errores se muestran en conjunto en la parte superior

### Mensajes de Éxito
- Después de crear, editar o eliminar un registro, verás un mensaje verde de confirmación
- El mensaje permanece visible por unos segundos

## Consideraciones Importantes

⚠️ **SIN AUTENTICACIÓN**: Las rutas del panel NO tienen protección de autenticación. Cualquiera puede acceder a `/admin`.

🔐 **Para agregar autenticación en el futuro:**
```php
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // ... rutas
});
```

🔄 **Relaciones entre tablas:**
- Los Productos están relacionados con Categorías
- Los OrderItems están relacionados con Orders y Products
- Los Orders están relacionados con Users

📊 **Paginación:**
- Todas las listas muestran 10 registros por página
- Usa los botones de paginación para navegar

## Troubleshooting

### El servidor no inicia
```bash
php artisan serve
```
Si hay erro, verifica que:
- Las migraciones estén ejecutadas: `php artisan migrate`
- Laravel está instalado correctamente

### Tabla está vacía
- Usa los botones "+ Nuevo" para crear registros
- O ejecuta los seeders si existen: `php artisan db:seed`

### Errores de validación
- Usa placeholders del formulario como referencia
- Sigue los mensajes de error mostrados

---

**Versión**: 1.0  
**Última actualización**: 26 de Abril de 2026  
**Estado**: Producción
