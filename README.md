

# Tema Base Laravel
## Laravel 8 - Sanctum - Bouncer - Laravel Backup - Log Actividades

El presente proyecto es un API en laravel, con roles y permisos, cruds de roles y usuarios, logs de actividades 

- Inicio de Sesión (API Sanctum)
- Recuperar contraseña (método de email)
- CRUD Usuarios
- Cerrar sesión a un usuario concreto
- Bloquear un usuario
- Crud Roles


## Rutas

|Método|Ruta|Explicación|
|------|-----|--------|
|GET|`/api/abilities`|Obtener listado de habilidades.|
|GET|`/api/activity`|Obtener listado de actividades paginado.|
|GET|`/api/backup`|Generar un backup.| 
|POST|`/api/forgot-password`|Enviar correo de recuperación de contraseña.| 
|POST|`/api/login`|Generar token de sesión.| 
|GET|`/api/password/find/{token}`|Verificar existencia del token.|
|POST|`/api/password/reset`|cambiar contraseña con token de recuperación.|
|GET|`/api/roles`|listar todos los roles.|
|POST|`/api/roles`|crear nuevo rol.|
|GET|`/api/roles/{role}`|Obtener un rol bajo su id.|
|PUT/PATCH|`/api/roles/{role}`|Actualizar un rol bajo su id.|
|DELETE|`/api/roles/{role}`|Eliminar un rol bajo su id.|   
|GET|`/api/users`|listar todos los usuarios - paginacion.|
|POST|`/api/users`|crear nuevo usuario.|
|GET|`/api/users/{user}`|Obtener un usuario bajo su id.|
|PUT/PATCH|`/api/users/{user}`|Actualizar un usuario bajo su id.|
|DELETE|`/api/users/{user}`|Eliminar un usuario bajo su id.| 
|POST|`/api/users/{user}`|Activar o inactivar usuario.| 
|POST|`/api/remove-token/{user}`|Cerrar sesión a un usuario concreto.| 


## License

[MIT license](https://opensource.org/licenses/MIT).
