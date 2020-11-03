# API para página informativa sobre hotel
## Requerimientos
- XAMPP
- PHP 7 o mayor
- Laravel
----------

## Instrucciones
- Iniciar XAMPP y crear una base de datos con el nombre "pwa_backend"
- Inicializar la base de datos con el comando `php artisan migrate`
- Iniciar la API con el comando `php artisan serve`
- Iniciar la aplicación web [language](https://github.com/alexdlveliz/pwa_app_hotel)

## Uso
Con peticiones POST se pueden crear entradas para la API, dichas entradas se podrán visualizar en la página principal de la aplicación web.

### Formato
```JSON
{
    "img_source": "ruta de la imagen",
    "title": "Título del lugar",
    "description": "Descripción del lugar",
    "score": 0
}
```
