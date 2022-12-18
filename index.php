   <!-- en este ejemplo, se identifican las principales etiquetas de estructura WEB --> 
      <!DOCTYPE html>
      <html lang="es">
      <html>

      <head>
      <title>pagina web. 
      </title> 
      <meta charset="utf-8"> 
      <meta name="description" content="HTML con cabeceras y pies y secciones en el cuerpo de la página"> 
      <meta name="keyworks" content="HTML, CSS, JavaScript, web, 
      página, curriculum"> 
      <link rel="icon" href="imagenes./windows.png" type="image/png" 
      sizes="20x20"> 
      <link rel="stylesheet" type="text/css" href="css/style.css"> 
      </head> 
      <body> 
       <?php
       // --- Importamos LA CABECERA <header> definido en el archivo header.php
       include("header.php");
       
       // --- Importamos el MENU (componente <nav>) definido en el archivo nav.php
       include("nav.php");
       ?>

 <main> <!-- definimos los contenidos agrupados en la etiqueta <main> "-->
 <section id="articulos"> <!-- definimos secciones de contenidos (LADO IZQUIERDO)-->
 <article>
     <td>MI PERFIL PROFESIONAL</td>
 <p> Como programador de software y diseñador
    web, poseo los conocimientos habilidades
    para desempeñarme en diferentes cargos
    afines con mi profesión. Entre ellos: </p>
 </article>

 <article>
 <p>
<br> programador </br>
<br> analista de sistemas  </br> 
<br> administrador de base de datos</br> </p>
 </article>
 </section> <!-- Aquí termina la sección de artículos -->
<aside> 
	<p> MIS REDES SOCIALES 
    </p>
    <p>
	
	<img src="./imagenes/giphy.gif" height="40">  <a id="Instagram"; href="https://www.instagram.com/">Instagram</a></li> </p>
        <img src="./imagenes/facebook-gif.gif" height="40">   <a id="Facebook"; href="https://www.facebook.com/eeteban.avila">Facebook</a> </p>

	</p>
    </aside>
<section id="miproyecto"><h4>MI PROYECTO DE VIDA</h4>
    <table>
	<article> 
	<p></p> 
	<table border="5"><tr> 
	<td><img src="./imagenes/5501609ee45d514d1f2c4a63502045e2.gif" height="180"></td>
    <td> mi proyecto de vida es. cuando termine mi tecnologo en adso empesar a trabjar en una empresa de sotware, y posterior a eso omonologar en una univercidad para ser mas profesional.
        por otro lado en mis tempos libres estudiar ingles, para asi en un futuro ejercer mi trabajo en el extranjero. </td> 
	</tr></table> 
	</article> 
	</section> 
	</main> 
	   <?php
       // --- Importamos el componente <footer> definido en el archivo cabecera.php 
     include("footer.php");

     ?>
      </body>
      </html>