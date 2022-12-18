 <!-- en este ejemplo, se identifican las principales etiquetas de estructura WEB --> 
 <!DOCTYPE html>
 <html lang="es">
 <html>
  
      <head>
          <meta charset="uft-8">
          <title>glosario</title>
          <link rel="icon" href="imagenes./windows.png" type="image/png" 
          <meta name="viewpoert" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0 minimumscale=1.0">
      </head>
          <link rel="stylesheet" href="css/miexperiencia.css">
          <body>
 <head>
 <title>pagina web. 
 ()</title> 
 <meta charset="utf-8"> 
 <meta name="description" content="HTML con cabeceras y pies y secciones en el cuerpo de la página"> 
 <meta name="keyworks" content="HTML, CSS, JavaScript, web, 
 página, curriculum"> 


 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css"> 
 </head> 
 <body> 
 <?php
       // --- Importamos LA CABECERA <header> definido en el archivo header.php
       include("header.php");
       
       // --- Importamos el MENU (componente <nav>) definido en el archivo nav.php
       include("nav.php");
       
       
    include("ConectarSQL.php");

    $datosbase = "SELECT * FROM glosario";

    
?>
    
       
<?php

$resultado = mysqli_query($Conexion , $datosbase);
while($row=mysqli_fetch_assoc($resultado)){

?>



<table class="table table-bordered">
    <thead>  
        <tr>
            <th>id</th>
            <th>palabra</th>
            <th>significado</th>
            <th>ilustracion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td class = "id"><?php echo $row["id"]?></td>
        <td><b><?php echo $row["Palabra"]?></b></td>
        <td><?php echo $row["Significado"]?></td>
        <td ><img src="<?php echo $row["Ilustracion"]?>" width="150" alt="150"></td>
        </tr>>
    </tbody>
</table>
 </body>
 
                <?php

} mysqli_free_result($resultado)  

?>

 <?php
       // --- Importamos el componente <footer> definido en el archivo cabecera.php 
     include("footer.php");

     ?>

<?php
    $i= 1;
    ?>

 </html>




