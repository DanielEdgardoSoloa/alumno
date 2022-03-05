<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <style>
            .container{
                background-color: green;
                background-image: url(instituto1.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                height: 550px;
            }
            .menu{
                background-color: #6c757d;
                width: 200px;
                height: 450px;
                float: left;
            }
            .noticias{
                position: relative ;
                background-color: #6c757d;
                width: 200px;
                height: 450px;
                margin-left: 713px;
                float: left;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div class="container">
          <h1 class="text-dark">LEGAJOS ALUMNOS</h1> 
          <div class="menu">
              <h3 class="text-dark">MENU</h3>
            <form action="tablaAlumnos.php" method="POST">
              <br/><br/>
              <input type="submit" name="Enviar" class="btn btn-primary" value="Ir a Alumnos" class="enviar" >
            </form>
            <form action="tablaProfesores.php" method="POST">
              <br/><br/>
              <input type="submit" name="Enviar" class="btn btn-primary" value="Ir a Profesores" class="enviar" >
            </form>
            <form action="materias.php" method="POST">
              <br/><br/>
              <input type="submit" name="Enviar" class="btn btn-primary" value="Ir a Materias" class="enviar" >
            </form>  
            <form action="notas.php" method="POST">
              <br/><br/>
              <input type="submit" name="Enviar" class="btn btn-primary" value="Ir a Notas" class="enviar" >
            </form>  
          </div>
          <div class="noticias" id='posicion3'>
             <h3 class="text-dark">NOTICIAS</h3>
             <ul>
              <li> Mesas Feb-Mar 2021</li>
              <li> Consultas Feb-Mar 2021</li>
              <li> Solicitud equivalencias 2022</li>
              <li> Ingreso a Indumentaria: AVISO</li>
              <li> Ingreso Computación y Redes 2022</li>
          </ul>
          </div>
        </div>
    </body>
</html>
