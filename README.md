## Proyecto de Ejemplo de TDD.

El siguiente proyecto tiene como objetivo servir de ejemplo como una introducción a TDD. El objetivo es mostrar
mediante un ejercicio sencillo, los pasos a seguir para trabajar con Desarrollo guiado por pruebas o su nombre en ingles
Test Driven Development (TDD)

En esta rama (desarrollo) tendremos el ejercicio terminado para ser usado como guia. En el mismo se trabajo en lo siguiente:

```
Se quiere implementar la funcionalidad de registrarse como usuario del blog de la materia. Esto se harà siguiendo los 
principios de TDD 
```

Por cuestiones de simplicidad, se eligio el framework de Laravel para el desarrollo del sitio, ya que el framework 
incorpora phpunit, lo que nos ayudará a crear nuestros tests. 

Para instalar el proyecto, es necesario contar con lo siguiente:
+ PHP 8.1 o nuevo
+ Composer
+ Git, para clonar el proyecto.

Una vez completado los requisitos, deberemos hacer lo siguiente.

1. Clonar el proyecto
2. Ejecutar comando ```composer install``` (esto nos instalara las dependencias de laravel, entre otras)
3. Con laravel ya instalado, en la carpeta raiz del proyecto, crear el archivo .env
4. Luego, generar el AppKey con el siguiente comando ```php artisan key:generate```
5. Para poder acceder a nuestra app, correr el comando ```php artisan serve```. Esto levantara un servidor en localhost en puerto 8000.

Abrir el navegador con url indicada y ya podremos acceder a nuestra app.

**Nota:** para correr los tests pueden conseguir un IDE como phpstorm o netbeans (con soporte de php) y usar el archivo de configurarion
phpunit.xml 

**Alternativa:** pueden correr los tests desde la linea de comandos, teniendo en cuenta lo siguiente:

``path\to\php path\to\phpunit --configuration path\to\phpunit.xml ``

Ejemplo:

``"C:\Php\php.exe" D:/ids/proyectos/loginform/vendor/phpunit/phpunit/phpunit --configuration D:\ids\proyectos\loginform\phpunit.xml``