<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="uft-8">
        <title>formulario contacto</title>
        <link rel="icon" href="imagenes/Windows.png" type="image/png" 
        <meta name="viewpoert" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0 minimumscale=1.0">
    </head>
        <link rel="stylesheet" href="css/contacto.css">
        <body>

            <head>
                <title>pagina web. 
                </title> 
                <meta charset="utf-8"> 
                <meta name="description" content="HTML con cabeceras y pies y secciones en el cuerpo de la página"> 
                <meta name="keyworks" content="HTML, CSS, JavaScript, web, 
                página, curriculum"> 
             
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






























            
            <div class="contenedor">
             <form action="" class="form">
                <div class="form-header">
                  <h1 class="form-title">c<span>ontacto</span></h1>

                </div>
                <label for="nombre" class="form-label">nombres</label>
                <input type="text" id="nombre" class="form-input" placeholder="escriba su nombre">
                
                
                
                <label for="direccion" class="form-label">direccion</label>
                <input type="text" id="direccion" class="form-input" placeholder="escriba su direccion">
                

               <label for="correo" class="form-label">correo electronico</label>
                <input type="email" id="correo" class="form-input" placeholder="escriba su correo">
                
     
               <label>genero</label><br>
               <input type="radio" name="genero">masculino<br>
               <input type="radio" name="genero">femenino<br>
               <br>

              <label>nivel de studio</label><br>
              <input type="checkbox" name="no tiene estudios">no tiene estudios<br>
              <input type="checkbox" name="secundaria">secundaria<br>
              <input type="checkbox" name="tecnico">tecnico<br>
              <input type="checkbox" name="universitario">universitario<br>

              <label>estudian en:</label><br>
              <select name="" id="">
                <option value="">colegio</option>
                <option value="">sena</option>
                <option value="">universidad</option>
              </select><br>
              
              

              <label>fecha de nacimiento</label> <br>
              <input type="date"> <br>
 

                <label for="mensaje" class="form-label">mensaje</label>
                <textarea  id="mensaje" class="form-textarea" placeholder="aqui escriba su mensaje"></textarea>

                <input type="submit" class="btn-submit" value="envaiar conculta">

             </form>   
            </div>
        </body>

        <?php
       // --- Importamos el componente <footer> definido en el archivo cabecera.php 
     include("footer.php");

     ?>
</html>
  









  












