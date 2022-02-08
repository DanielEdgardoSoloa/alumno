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

