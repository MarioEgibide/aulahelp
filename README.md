# AulaHelp Laravel

Proyecto base para prácticas y examen de **Despliegue de Aplicaciones Web (DAW)**.

La aplicación incluye:

- una vista principal con listado de incidencias,
- una tabla MySQL preparada mediante migraciones,
- un seeder con datos de ejemplo,
- estructura base de Laravel,
- diseño sencillo con Blade.

## Requisitos

- PHP 8.2 o superior
- Composer
- MySQL o MariaDB

## Puesta en marcha

1. Clona el repositorio.
2. Copia el archivo de entorno:

```bash
cp .env.example .env
```

3. Configura la base de datos en `.env`.
4. Instala dependencias:

```bash
composer install
```

5. Genera la clave de la aplicación:

```bash
php artisan key:generate
```

6. Ejecuta migraciones y seeders:

```bash
php artisan migrate --seed
```

7. Lanza el servidor local:

```bash
php artisan serve
```

8. Abre en el navegador:

```text
http://127.0.0.1:8000
```

## Base de datos

La tabla principal es `incidencias` y contiene:

- `id`
- `titulo`
- `equipo`
- `descripcion`
- `created_at`
- `updated_at`

También se incluye una versión SQL en `database/schema/mysql-schema.sql`.

## Estructura útil del proyecto

```text
app/
  Http/Controllers/IncidenciaController.php
  Models/Incidencia.php
bootstrap/
config/
database/
  migrations/
  seeders/
  schema/
public/
resources/views/
routes/web.php
```

## Idea pedagógica

Este proyecto está pensado para que el alumnado pueda:

- clonar o inicializar un repositorio,
- trabajar con ramas,
- añadir funcionalidad,
- resolver conflictos,
- desplegar Laravel con MySQL,
- preparar después Docker Compose como parte del examen.
# aulahelp
# aulahelp
# aulahelp
