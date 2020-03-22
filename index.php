<!DOCTYPE html>
<html>
<!--Titulo de la pagina-->
<head>
<title>Mi sitio de pruebas</title>
<link rel="stylesheet" href="estilos.css">
</head>
<!--Estilos CSS dentro del archivo-->
<style>
.titulo {
    color:red;
}

</style>
<body>
    <!--Encabezados HTML-->
    <h2 class="titulo">Encabezados:</h2>
    <h1>Mi primer encabezado</h1>
    <h2>Mi primer encabezado</h2>
    <h3>Mi primer encabezado</h3>
    <h4>Mi primer encabezado</h4>
    <h5>Mi primer encabezado</h5>
    <h6>Mi primer encabezado</h6>
    <!--A continuacion hay un encabezado mas grande de los limites que permiten las etiquetas <h1>,<h2>,<h3>...-->
    <h1 style="font-size:60px;">Mi primer encabezado</h1>
    <!--Regla horizontal HTML-->
    <hr>
    <p>Soy un parrafo comun</p>
    <hr>

    <!--Parrafos HTML-->
    <h2 class="titulo">Parrafos:</h2>
    <p>Mi primer parrafo</p>
    <p>Mi segundo parrafo</p>
    <p>
        Este es un parrafo que 
        contiene muchas lineas
        en el codigo fuente,
        pero el navegador
        ignora dichas lineas
    </p>
    <p>Este es<br>un parrafo<br>con saltos de linea</p>
    <pre>
        My Barco navega por el oceano.
        
        My Navega a la velovidad del viento.

        My Barco se hunde en el oceano.
        
        Oh, devuelveme mi barco.
    </pre>
    
    <!--Elementos de formateo de texto HTML-->
    <h2 class="titulo">Elementos de formateo de texto HTML:</h2>
    <b>Soy un texto en negritas</b><br>
    <hr>
    <strong>Soy un texto Importante, me parezco al texto en negritas</strong><br>
    <hr>
    <i>Soy un texto italico</i><br>
    <hr>
    <em>Soy un texto enfatizado</em><br>
    <hr>
    <small>Soy un texto mas pequeño</small><br>
    <hr>
    <mark>Soy un texto remarcado</mark><br>
    <hr>
    <del>Soy un texto tachado</del><br>
    <hr>
    <ins>Soy un texto subrayado</ins><br>
    <hr>
    <sub>Soy un texto en subindice</sub><br>
    <hr>
    <sup>Soy un texto en superindice</sup><br>

    <!--Citas HTML-->
    <h2 class="titulo">Citas HTML:</h2>
    <q>Soy una cita</q>
    <hr>
    <blockquote cite="http://www.worldwildlife.org/who/index.html">
        El vídeo proporciona una manera eficaz para ayudarle a demostrar el punto.
        Cuando haga clic en Vídeo en línea, puede pegar el código para insertar del vídeo que desea agregar.
        También puede escribir una palabra clave para buscar en línea el vídeo que mejor se adapte a su documento.
    </blockquote>
    <hr>
    <p>Este parrafo incluye una abreviacion, La <abbr title="Organizacion Mundial de la Salud">OMS</abbr> fue fundada en 1948.</p>
    <hr>
    <address>
        Hola, Soy una direccion.<br>
        Visitanos en:<br>
        Ejemplo.com<br>
        Box 564, Disneyland<br>
        Mexico<br>
    </address>
    <hr>
    <cite>Soy una cita que define el titulo de una obra o trabajo</cite>
    <hr>
    <bdo dir="rtl">Esta linea estara escrita de derecha a izquierda</bdo>

    <!--Comentarios HTML-->
    <h2 class="titulo">Comentarios HTML:</h2>
    <p>Los comentarios aparecen solamente en el codigo fuente, presiona F12 para ver los comentarios</p>
    <!--Soy un comentario y no aparezco en el navegador, solamente en el codigo fuente-->
    <!--
        <p>Soy un parrafo comun pero no aparezco en el navegador por que estoy entre lineas de comentario</p>
    -->

    <!--Colores HTML-->
    <h2 class="titulo">Colores HTML:</h2>
    <p>Color de fondo:</p>
    <h1 style="background-color: dodgerblue;">Hola mundo</h1>
    <p style="background-color: tomato;">
        El vídeo proporciona una manera eficaz para ayudarle a demostrar el punto.
        Cuando haga clic en Vídeo en línea, puede pegar el código para insertar del vídeo que desea agregar.
        También puede escribir una palabra clave para buscar en línea el vídeo que mejor se adapte a su documento.
    </p>
    <p>Color del texto:</p>
    <h3 style="color: dodgerblue;">Hola mundo</h3>
    <p style="color: tomato;">
        El vídeo proporciona una manera eficaz para ayudarle a demostrar el punto.
        Cuando haga clic en Vídeo en línea, puede pegar el código para insertar del vídeo que desea agregar.
        También puede escribir una palabra clave para buscar en línea el vídeo que mejor se adapte a su documento.
    </p>
    <p style="color: mediumseagreen;">
        El vídeo proporciona una manera eficaz para ayudarle a demostrar el punto.
        Cuando haga clic en Vídeo en línea, puede pegar el código para insertar del vídeo que desea agregar.
        También puede escribir una palabra clave para buscar en línea el vídeo que mejor se adapte a su documento.
    </p>
    <p>Color del borde:</p>
    <h1 style="border:2px solid dodgerblue;">Hola mundo</h1>
    <h1 style="border:2px solid tomato;">Hola mundo</h1>
    <h1 style="border:2px solid violet;">Hola mundo</h1>
    <p>Valores para los colores:</p>
    <p>El mismo color "tomato":</p>
    <!--Color "tomato" en RGB-->
    <h1 style="background-color: rgb(255, 99, 71);">rgb(255, 99, 71)</h1>
    <!--Color "tomato" en HEX-->
    <h1 style="background-color: #ff6347;">#ff6347</h1>
    <!--Color "tomato" en HSL-->
    <h1 style="background-color: hsl(9, 100%, 64%);">hsl(9, 100%, 64%)</h1>
    <p>El mismo color "tomato", pero 50% transparente:</p>
    <!--Color "tomato" en RGB pero con 50% de transparencia-->
    <h1 style="background-color: rgba(255, 99, 71, 0.5);">rgba(255, 99, 71, 0.5)</h1>
    <!--Color "tomato" en HSL pero con 50% de transparencia-->
    <h1 style="background-color: hsla(9, 100%, 64%, 0.5);">hsla(9, 100%, 64%, 0.5)</h1>
    <!--hsl(matiz (de 0 a 360),saturacion (de 0% a 100%),iluminacion (de 0% a 100%))-->
    <h1 style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</h1>
    <!--Valor Alfa de HSLA-->
    <h1 style="background-color: hsla(9, 100%, 64%, 0.5);">Soy otro ejemplo de <ins>hsla(9, 100%, 64%, 0.5)</ins> con 50% opacidad (alpha)</h1>

    <!--Estilos CSS-->
    <h2 class="titulo">Estilos CSS Introduccion</h2>
    <hr>
    <p style="color: blue;">Soy un parrafo azul con CSS dentro de la linea de codigo</p>
    <hr>
    <p class="parrafo_azul">Soy un parrafo verde con fondo amarillo con estilo CSS externo</p>
    <hr>
    <p style="color: blue; font-family: Verdana; font-size: 300%;">Este es un parrafo</p>
    <hr>
    <p style="color: red; font-family: courier; font-size: 160%;">Este es otro parrafo</p>
    <hr>
    <p style="border: 1px solid powderblue;">Este es un parrafo con borde</p>
    <hr>
    <p style="padding: 30px;">Este es un parrafo con sangria</p>
    <hr>
    <p style="margin: 50px;">Este es un parrafo con margen</p>
    <hr>
    <p id="parrafo_diferente">Soy un parrafo con un estilo definido mediante el atributo "id" (#parrafo_diferente) en el archivo "estilos.css"</p>
    <hr>
    <p class="error_rojo">Soy un parrafo con un estilo definido mediante clases (p.error_rojo)</p>
    <hr>
    <h3 class="error_rojo">Soy un encabezado con la misma clase (error_rojo), pero el estilo no funciona debido a que se establecio solamente para parrafos</h3>
    
    <!--Links HTML-->
    <h2 class="titulo">Links:</h2>
    <!--La etiqueta de a continuacion incluye el atributo "href"-->
    <a href="https://www.google.com/">Google</a><br>
    <!--Link local-->
    <a href="ejemplo_link.html">Ejemplo de link</a><br>
    <!--Link en nueva pestaña-->
    <a href="ejemplo_link.html" target="_blank">Ejemplo de link en nueva pestaña (_blank)</a><br>
    <!--Link que va al tope de la pantalla-->
    <a href="https://www.msn.com/es-mx/noticias" target="_top">Ejemplo de link que va al tope de la pantalla (_top)</a>

    <!--Imagenes HTML-->
    <h2 class="titulo">Imagenes:</h2>
    <!--La etiqueta de a continuacion incluye los atributos "src" y "alt"-->
    <img src="like.jpg" alt="Deja tu like">
    <!--Botones HTML-->
    <h2 class="titulo">Botones HTML:</h2>
    <button>Dame click!</button>
    <!--Listas HTML-->
    <h2 class="titulo">Botones HTML:</h2>
    <!--Listas desordenadas-->
    <ul>
        <li>Cafe</li>
        <li>Te</li>
        <li>Leche</li>
    </ul>
    <!--Listas ordenadas-->
    <ol>
        <li>Cafe</li>
        <li>Te</li>
        <li>Leche</li>
    </ol>
    <!--Salto de linea-->
    <p>Hola, esto es un<br>salto de linea<p>
    
    
    <!--Inicia la parte PHP-->
    <!--<p class="titulo">Parte PHP:</p>
    <?php
    echo "My first PHP script!";
    ?>-->

</body>
</html>