
# cakephp 3

## Installation

>Download Composer or update composer self-update.

```
Run php composer.phar create-project --prefer-dist cakephp/app [app_name].
```

>If Composer is installed globally, run

```
composer create-project --prefer-dist cakephp/app [app_name]
```

>You should now be able to visit the path to where you installed the app and see the setup traffic lights.

Configuration

>Read and edit config/app.php and setup the 'Datasources' and any other configuration relevant for your application


proceso 15 de noviembre de 2017

>creacion de megraciones

```
	bin/cake migratio create CreateDataSeedMigration  
	bin/cake migrations create CreateBookmarksSeedMigrate
```

>ejecucion de migraciones 

```
 	bin/cake migrations migrate
```
>creacion de controllers 

```
 	bin/cake bake controller User --no-actions 
 	bin/cake bake controller User              
```

finalizando con la creacion de grupo de turas y rutas estaticas y vincular la ruta a un metodo de controller con parametros 

Creación de registros en CakePHP 3

Para crear una vista con los datos de una tabla con bake desde la línea de comandos
bin/cake bake template Users add
mas
[como guardar datos](http://book.cakephp.org/3.0/en/orm/saving-data.html).

– Conoce también con profundidad acerca de los Helpers en CakePHP 3

[mas sobre helpers](http://book.cakephp.org/3.0/en/views/helpers.html).