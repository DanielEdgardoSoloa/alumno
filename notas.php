<html>
    <head>
       <meta charset="UTF-8">
       <title>Notas</title> 
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
                padding-left: 30px;
            }
            .p5{
                padding-left: 57px;
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
        <div class="notas">
          <h1>Notas</h1>
          <div class="opciones" class="tabla">
            <table border="1" class="table table-dark"> 
              <tr>
                <td>DNI</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td> 
                <td>MATERIA</td>
                <td>NOTA</td>
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
        <div class="notas">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <h5 class="p4" class="text-success">NOTAS ALUMNOS </h5>
            <p class="p1" class="text-success">DNI:<input type="text" name="dni" value="<?php echo $mostrar2[0]?>" id="dni"class="text"></p>
            <p class="p2" class="text-success">NOMBRE:<input type="text" name="nombre" value="<?php echo $mostrar2[1]?>" id="nombre"class="text"></p> 
            <p class="p3" class="text-success">APELLIDO:<input type="text" name="apellido" value="<?php echo $mostrar2[2]?>" id="apellido" class="text"></p>
            <p class="p4" class="text-success">MATERIA:<input type="text" name="materia" value="<?php echo $mostrar2[2]?>" id="materia" class="text"></p>
            <p class="p5" class="text-success">NOTA:<input type="text" name="nota" value="<?php echo $mostrar2[2]?>" id="nota" class="text"></p>
            <br/>
            <?php  
            if ($controlBtnAct )
             {?>
            <spam>
             <input type="submit" name="Modificar" class="btn btn-warning" value="Modificar" onclick="return EnviarForm()" class="enviar" class="modificar">
            </spam>
             <?php }else { ?>
            <spam>
             <input type="submit" name="Nuevo" class="btn btn-success" value="Nuevo" onclick="return EnviarForm()" class="enviar">
            </spam>
                <?php } ?>
          </form>  
            <div id="error" class="negrita">
            </div>    
        </div>
      <script src="valid.js"></script> 
    </body>
</html>


