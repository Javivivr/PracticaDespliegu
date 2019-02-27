<?php include 'cabecera.inc'; ?>

<h1 class="font-italic">PHP</h1>
<hr/>


<h3 class="font-italic">Historia de Php</h3>
            <p class="text-justify" >
                Php se creó como una herramienta de programación para ser usada en un proyecto de set-top-box en una pequeña operación denominada the Green Project en Sun 
                Microsystems en el año 1991. El equipo (Green Team), compuesto por trece personas y dirigido por James Gosling, trabajó durante 18 meses en Sand Hill Road 
                en Menlo Park en su desarrollo.<br><br>
                El lenguaje se denominó inicialmente Oak (por un roble que había fuera de la oficina de Gosling), luego pasó a denominarse Green tras descubrir que Oak 
                era ya una marca comercial registrada para adaptadores de tarjetas gráficas y finalmente se renombró a Java.<br><br>
                El término Java fue acuñado en una cafetería frecuentada por algunos de los miembros del equipo. Pero no está claro si es un acrónimo o no, aunque algunas 
                fuentes señalan que podría tratarse de las iniciales de sus creadores: James Gosling, Arthur Van Hoff, y Andy Bechtolsheim. Otros abogan por el siguiente 
                acrónimo, Just Another Vague Acronym (“sólo otro acrónimo ambiguo más”). La hipótesis que más fuerza tiene es la que Java debe su nombre a un tipo de café 
                disponible en la cafetería cercana, de ahí que el icono de java sea una taza de café caliente. Un pequeño signo que da fuerza a esta teoría es que los 4 
                primeros bytes (el número mágico) de los archivos.class que genera el compilador, son en hexadecimal, 0xCAFEBABE. A pesar de todas estas teorías, el nombre 
                fue sacado al parecer de una lista aleatoria de palabras.<br><br>
                Los objetivos de Gosling eran implementar una máquina virtual y un lenguaje con una estructura y sintaxis similar a C++. Entre junio y julio de 1994, tras 
                una sesión maratoniana de tres días entre John Gaga, James Gosling, Patrick Naughton, Wayne Rosing y Eric Schmidt, el equipo reorientó la plataforma hacia 
                la Web. Sintieron que la llegada del navegador web Mosaic, propiciaría que Internet se convirtiese en un medio interactivo, como el que pensaban era la 
                televisión por cable. Naughton creó entonces un prototipo de navegador, WebRunner, que más tarde sería conocido como HotJava.<br><br>             
                
            </p>




<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ykGRYEX0n60" allowfullscreen></iframe>
</div>


<hr/>
<h1 class="font-italic">Características de Php</h1>
<hr/>


<ul class="text-justify">
    <li>
        
        Orientado al desarrollo de aplicaciones web dinámicas con acceso a información almacenada en una base de datos.
        Es considerado un lenguaje fácil de aprender, ya que en su desarrollo se simplificaron distintas especificaciones, como es el caso de la definición de las variables primitivas, ejemplo que se hace evidente en el uso de php arrays.
    </li>
    <li>

        El código fuente escrito en PHP es invisible al navegador web y al cliente, ya que es el servidor el que se encarga de ejecutar el código y enviar su resultado HTML al navegador.
    </li>
    <li>
            
        Capacidad de conexión con la mayoría de los motores de base de datos que se utilizan en la actualidad, destaca su conectividad con MySQL y PostgreSQL.
    </li>
    <li>
            
        Capacidad de expandir su potencial utilizando módulos (llamados ext's o extensiones).
    </li>
    <li>
            
        
        Posee una amplia documentación en su sitio web oficial, entre la cual se destaca que todas las funciones del sistema están explicadas y ejemplificadas en un único archivo de ayuda.
    </li>
    <li>
            
     Es libre, por lo que se presenta como una alternativa de fácil acceso para todos.
    </li>
    <li>
            
        Permite aplicar técnicas de programación orientada a objetos.
    </li>
    <li>
            
        No requiere definición de tipos de variables aunque sus variables se pueden evaluar también por el tipo que estén manejando en tiempo de ejecución.
    </li>
    <li>
            
        Tiene manejo de excepciones (desde PHP5).
    </li>



</ul>

<!-- inio comentarios -->
<hr>
<h1>Comentarios</h1>
<hr/>
<div>

<h4>Añade un comentario: </h4><br/>
<form action="php.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="nombre" required placeholder="Nombre"><br/>	
  <input type="hidden" name="fecha" value="25/02/2019">
  <input type="hidden" name="lenguaje" value="php.php">
    <textarea name="comentario" rows="4" cols="50" placeholder="Escribe aquí tu comentario"></textarea><br/>
    <input type="submit" value="Enviar" />
    
</form>
</div>
<div>
<h4>Estos usuario ya han comentado:</h4>

<form action="php.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="lenguaje" value="php.php">   
  <input type="hidden" name="fecha" value="no">
  <input type="submit" value="Ver comentarios" /> 
</form>
</div>

<?php include 'comentarios.php'; ?> 
<!-- fin comentarios -->



<?php include 'pie.inc'; ?>