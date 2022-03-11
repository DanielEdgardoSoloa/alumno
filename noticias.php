<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Noticias</title>
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
                width: 400px;
                height: 450px;
                margin-left: 513px;
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
          <h1 class="text-dark">NOTICIAS INSTITUTO</h1> 
          <div class="menu">
              <h3 class="text-dark">MENU</h3>
            <form action="index.php" method="POST">
              <br/><br/>
              <input type="submit" name="Enviar" class="btn btn-primary" value="Ir a Inicio" class="enviar" >
            </form> 
          </div>
          
          <div class="noticias" id='posicion3'>
              <?php
              require 'vendor/autoload.php';
              $id = $_GET['id'];
              echo $id;
              // Creo un alias del namespace
              use MongoDB\Client as Mongo;
              // Crea una instancia del driver MongoDB
              $mongo= new Mongo("mongodb://localhost:27017");
              // Selecciona la base de datos llamada "instituto"
              $dbInstituto = $mongo->instituto;
              // Selecciona la colección llamada "noticias" de la base de datos "instituto"
              $noticias = $dbInstituto->noticias;
              /*try {
                  $connection = new Mongo();
                  $database = $conection->selectDb("instituto");
                  $collection = $database->selecCollection("noticias");
              } catch (MongoConnectionException $ex) {
                  die("Falla conexion database Instituto" . $ex->getMessage());
              }
              $noticias = $collection->findOne(array('_id' => new MongoId($id)));*/
              //$collection = (new MongoDB\Client)->instituto->noticias;

              $cursor = $noticias->findOne(['_id' => $id]);
              ?>
              <h3 class="text-dark"><?php echo $cursor['Titulo']; ?></h3><br>
             <p><?php echo $cursor['Contenido']; ?></p>
             
          </div>
        </div>
    </body>
</html>


