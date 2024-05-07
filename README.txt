05/05/2024

    Inicio de proyecto
    Vamos a iniciar nuestro proyecto de laravel, añado un script de mysql generado como base de datos de un instituto.
    En esta "web" vamos a realizar un CRUD sobre la base de datos, con un frontend montado mediante el sistema de plantillas de blade.

    Al hacer la instalacion desde composer se nos añade una base de dats de msqli, yo la cambio a MySQL y realizmaos la migracion modificando tanto la dababase.php
    como el fichero.env

    Hemos instalado tailwind y breeze en nuestro proyecto, para obtener una forma de dar estilos similar a bootstrap,
    con los módulos de autenticacion tambien instalados por parte de breeze.

07/05/2024

    Hoy he levantado la instancia de docker, añadiendo un script propio que va a añadir datos a la base de datos que hemos migrado.
    Las migraciones en este caso no son necesarias porque docker se encargará de crearme las tablas directametne al ser levantadas.
    Para lo que si será necesario migrar es para poder tener las tablas de autenticacion en la instancia de docker.
