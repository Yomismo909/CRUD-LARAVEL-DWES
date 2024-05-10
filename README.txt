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

    A parte, hemos creado los modelos y los controladores de todos y cada uno de los modelos que se van a ver luego en las tablas.
    Igualmente, haremos uso de las herramientas de fake para poder generar más datos nuevos.
    Hemos implementado, el uso de middleware para que mientras no este autenticado, no pueda acceder a ninguna página del sitio.

08/05/2024

    Hoy iniciamos la sesion con creacion de datos de mock para la tabla mediante el uso de factory y seeders.
    Hemos eliminado el script inicial para poder dar mas profundidad a nuestras tablas, estableciendo tablas intermedias,
    que nos permiten relacionar diferentes elementos entre si, esto lo hemos conseguido mediante el uso de las propiedades
    de las clases en la creacion del mock.

    Hemos generado por fin la primera query exitosa, la de alumnos. Tambien hemos hecho lo mismo para profesores y clases.

09/05/2024

    Hoy me he planteado una duda respecto a las tablas intermedias; Resulta que es posible hacer queries semi manuales mediante el uso
    de la notacion flecha de php sobre los metodos propios de este framework.
    Con esto, he conseguido unir ambas tablas: Profesores y clases, de modo que puedo mostrar que profesor imparte cada materia.

    Si bien es cierto qe el controlador de la tabla intermedia no lo vamos a utilizar, al menos por el momento, el modelo es util.
    Puesto que mediante las queries del modelo, podemos sembrar con el factory y el seed, para tener esa conjuncion de datos, consiguiendo
    la tercera forma normal en nuestra base de datos relacional.

    Hemos creado los metodos restantes del CRUD, ahroa solo queda extrapolarlos al resto de clases//modelos para finalizar la aplicacion.

    Hemos incluido las validaciones de formulario en todos los metodos de creacion y actualizacion de modelos contra la base de datos.

10/05/2024

    Hoy vamos a realizar un poquito de estilos para finalizar, por ejemplo la pantalla de recuperacion de contraseña.

    NOTAS ADICIONALES:  Las funcionalidades basicas de CRUD están completas, sin embargo, podemos ver que la vista de clases contiene una asignacion de profesor
                        que no se puede modificar. Esto es debido a que se trata de una consulta a una tabla intermedia, que está implementada, pero todavia no he
                        encontrado la manera de hacer esa insercion, puesto que parece lógica de laravel bastante mas avanzada de lo que hasta ahora he podido ver.
