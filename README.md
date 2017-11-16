cakephp 3

proceso 15 de noviembre de 2017

creacion de megraciones
	bin/cake migratio create CreateDataSeedMigration  //poblar base de datos
	bin/cake migrations create CreateBookmarksSeedMigrate //poblar base de datos

ejecucion de migraciones 
 	bin/cake migrations migrate

creacion de controllers 
 	bin/cake bake controller User --no-actions //para no agragar el crud basico
 	bin/cake bake controller User              //para cargar todo el crud basico

finalizando con la creacion de grupo de turas y rutas estaticas y vincular la ruta a un metodo de controller con parametros 

*******************************************************************
