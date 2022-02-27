<?php
 function Insertar(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='INSERT INTO ALUMNOS VALUES("'.$_POST["dni"].'","'.$_POST["nombre"].'","'.$_POST["apellido"].'")';
    $resultado=mysqli_query($conexion,$consulta); 
 }
 
 function Borrar(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='DELETE FROM `alumnos` WHERE alu_dni="'.$_GET["id"].'"';
    $resultado=mysqli_query($conexion,$consulta);
 }
 
 Function Modificar(){
   $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
   $consulta='UPDATE `alumnos` SET `alu_nombre`="'.$_POST["nombre"].'",`alu_apellido`="'.$_POST["apellido"].'" WHERE `alu_dni`="'.$_POST["dni"].'"' ;
   $resultado=mysqli_query($conexion,$consulta);  
     
 }
 
 function InsertarP(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='INSERT INTO PROFESOR VALUES("'.$_POST["dni"].'","'.$_POST["nombre"].'","'.$_POST["apellido"].'","'.$_POST["titulo"].'")';
    $resultado=mysqli_query($conexion,$consulta); 
 }
 
 Function ModificarP(){
   $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
   $consulta='UPDATE `profesor` SET `prof_nombre`="'.$_POST["nombre"].'",`prof_apellido`="'.$_POST["apellido"].'",`prof_titulo`="'.$_POST["titulo"].'" WHERE `prof_dni`="'.$_POST["dni"].'"' ;
   $resultado=mysqli_query($conexion,$consulta);  
     
 }
 
 function BorrarP(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='DELETE FROM `profesor` WHERE prof_dni="'.$_GET["id"].'"';
    $resultado=mysqli_query($conexion,$consulta);
 }

 function InsertarM(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='INSERT INTO `materias` (`mat_nombre`,`mat_prof_dni`) VALUES("'.$_POST["materia"].'","'.$_POST["dniprofesor"].'")';
    $resultado=mysqli_query($conexion,$consulta); 
 }
 
 Function ModificarM(){
   $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
   $consulta='UPDATE `materias` SET `mat_nombre`="'.$_POST["materia"].'",`mat_prof_dni`="'.$_POST["dniprofesor"].'" WHERE `mat_cod`="'.$_POST["codmateria"].'"' ;
   $resultado=mysqli_query($conexion,$consulta);  
     
 }
 
 function BorrarM(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='DELETE FROM `materias` WHERE mat_cod="'.$_GET["id"].'"';
    $resultado=mysqli_query($conexion,$consulta);
 }
 
  function InsertarN(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='INSERT INTO `alumat` (`alumat_alu_dni`,`alumat_mat_cod`,`alumat_notas`) VALUES("'.$_POST["dni"].'","'.$_POST["codmateria"].'","'.$_POST["nota"].'")';
    $resultado=mysqli_query($conexion,$consulta); 
 }
 
 Function ModificarN(){
   $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
   $consulta='UPDATE `alumat` SET `alumat_alu_dni`='.$_POST["dni"].',`alumat_mat_cod`='.$_POST["codmateria"].',`alumat_notas`='.$_POST["nota"].' WHERE `alumat_id`='.$_POST["idnota"].'' ;
   $resultado=mysqli_query($conexion,$consulta);  
     
 }
 
 function BorrarN(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='DELETE FROM `alumat` WHERE alumat_id='.$_GET["id2"].'';
    $resultado=mysqli_query($conexion,$consulta);
 }
