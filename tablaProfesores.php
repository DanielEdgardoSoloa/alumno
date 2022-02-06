<html>
    <head>
       <meta charset="UTF-8">
       <title>Tabla Profesores</title> 
       <style>
            .p1{
               padding-left: 67px; 
            }
            .p2{
               padding-left: 32px; 
            }
            .p3{
               padding-left: 23px; 
            }
            .p4{
                padding-left: 100px;
            }
            .negrita{
                color:#FF3333;
                font-size: 25px;
            }
            spam{
                margin-left: 160px;
            }
       </style>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <!-- Bloque de Tabla Alumnos que se actualiza dinámicamente-->   
        <div class="tablaProfesores">
          <h1>TABLA PROFESORES</h1>
          <div class="opciones" class="tabla">
            <table border="1" class="table table-dark"> 
              <tr>
                <td>DNI</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td> 
                <td>TITULO</td>
                <td>ACTUALIZAR</td>
                <td>BORRAR</td>
              </tr>
              <!--
              <?php
                $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
                $sql='SELECT * FROM ALUMNOS';
                $resultado= mysqli_query($conexion, $sql);
                while($mostrar= mysqli_fetch_array($resultado)){
              ?>
              <tr>
                <td><?php echo $mostrar[0]?></td>
                <td><?php echo $mostrar[1]?></td>
                <td><?php echo $mostrar[2]?></td>
                <td ><a href="tablaAlumnos.php?accion=Actualizar&&id=<?php echo $mostrar[0]?>" class="modificar" name="Actualizar"> <img src="editar1.png"</a> </td>
                <td ><a href="tablaAlumnos.php?accion=Borrar&&id=<?php echo $mostrar[0]?>" class="eliminar" name="Borrar"> <img src="eliminar1.png"</a></td>
              </tr>
              <?php
              }
              ?>
              -->
            </table>
            <br/>
            <form action="index.php" method="POST">
               <spam>   
                 <input type="submit" class="btn btn-primary" name="volver" value="Inicio" class="enviar">
               </spam>    
            </form>
        
          </div>
        </div>
    </body>
</html>

