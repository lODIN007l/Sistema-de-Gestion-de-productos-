IMPORTANTE
    Algunas acotaciones para nombres:
    *Nombres especificos para cada funcion y archivo que vayan a crear:
    El nombre debe ser acorde a su funcion, la aplicacion esta dividida en 3 capas
    Colocar cada archivo donde corresponde, si hay dudas escriban en el chat
    ejm: insertar.php

    *Nombres para variables,id,name:
    Los nombres de las variables se definen de acuerdo a su tipo y funcion
    Formularios: id='frmEjemplo' name='frmEjemplo'
    Lables: id='lblEjemplo' name='lblEjemplo'
    Inputs: id='inEjemplo' name='inEjemplo'

    *Patrones de diseño:
    El diseño queda acargo de cada persona, tanto para las tablas como paginas o alerts boostrap
    Deben ver que sea acorde al tema, preferible colores azules no muy oscuros con blanco de fondo
    la letra y demas igual queda a gusto de cada quien.

    *Base de datos:
    La base de datos la tendran todos localmente, al momento de hacer los validaciones cada uno veriricara que funcione
    en su base de datos.

    *Git:
    Se trabajara con github, en una sola rama para evitar inconvenientes, no modificar los archivos que no les corresponda
    se dividira el trabajo conforme cada quien se encargue de un o dos archivos.
    Actuualizar tu repositorio local constantemente, se haran cambios cada 1 hora
    --git clone //clonar el repositorio, solo se hace una vez

    --git add (archivos q modificaron, no hagan con (.) xq se alteran todos)
    --git commit -m "escriben en pocas palabras lo q hicieron"
    --git push -u origin master

    luego de q subieron los cambios, hacen un pull para recoger lo q hicieron los demas
    --git pull

    *Imagenes:
    Ubicar Imagenes del css en la carpeta Imagenes
    las imagenes de los prodcutos vienen en una url q obitienen de aqui https://ibb.co/album/k2LmqS, ahi pueden copiar el html de la imagen

    *Base de Datos:
    Nombre DB: Proyecto
    Tabla: Productos (id,nombre,descripcion,precio(por kg),url(imagen),categoria)


    *Logica del negocio: Sera un sistema simple, con un CRUD unicamente para los prodcutos, no habra usuarios, se podra agregar, eliminar, mostrar y editar un producto.

    *Pantallas: Seran 5 (Inicio, Productos, Comprar, Vender, Catalogo)
    --Inicio: pantalla principal
    --Productos: listado de productos por categoria (se accede a la opcion de compra)
    --Vender: Formulario con los datos para agg producto
    --Buscar: Producto encontrado, si no existe alert
    --Editar: Formulario con los datos del producto
    --Eliminar: Tabla con los productos y boton eliminar
    --Catalogo: Pdf de los productos (Pueden ir por categoria si nos da tiempo)
    --Ayuda: Ventana de ayuda al usuario, o tambien podemos agregar cada uno tooltips