var dni = document.getElementById("dni");
var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var titulo = document.getElementById("titulo");
var codmateria = document.getElementById("codmateria");
var materia = document.getElementById("materia");
var dniprofesor = document.getElementById("dniprofesor");
var idnota = document.getElementById("idnota");
var nota = document.getElementById("nota");
var error = document.getElementById("error");

function EnviarFormA(){
    console.log('Enviando form');
   var control = true;
   var mensajeError = [];
   var soloNumeros=/^[0-9]+$/;
   var soloLetra=/^[A-z]+$/;
  // var soloLetrayespacio=/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ.]+$/;
   
   
   /*if(!(soloNumeros.test(dni.value))){
       mensajeError.push('Dni no es numérico');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(nombre.value))){
       mensajeError.push('En Nombre ingrese solo letras');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(apellido.value))){
       mensajeError.push('En Apellido ingrese solo letras');
       control = false;
   }else{ 
        
       }*/  
    
   if(dni.value === null || dni.value === ''){
       mensajeError.push('Ingrese su dni');
       control = false;
   }else{
       if(!(soloNumeros.test(dni.value))){
          mensajeError.push('Dni no es numérico,ingrese DNI válido');
          control = false;
       }else{ 
       }
   }
   if(nombre.value === null || nombre.value === ''){
       mensajeError.push('Ingrese su nombre');
       control = false;
   }else{
       if(!(soloLetra.test(nombre.value))){
       mensajeError.push('En Nombre ingrese solo letras');
       control = false;
   }else{ 
       }
   }
   if(apellido.value === null || apellido.value === ''){
       mensajeError.push('Ingrese su apellido');
       control = false;
   }else{
       if(!(soloLetra.test(apellido.value))){
       mensajeError.push('En Apellido ingrese solo letras');
       control = false;
   }else{ 
       }
   }
   /*if(titulo.value === null || titulo.value === ''){
       mensajeError.push('Ingrese su título');
       control = false;
   }else{
       if(!(soloLetrayespacio.test(titulo.value))){
       mensajeError.push('En Título ingrese solo letras');
       control = false;
   }else{ 
       }
   }*/
  error.innerHTML = mensajeError.join(', ');
   //error=null;
   return control;
}
function EnviarFormP(){
    console.log('Enviando form');
   var control = true;
   var mensajeError = [];
   var soloNumeros=/^[0-9]+$/;
   var soloLetra=/^[A-z]+$/;
   var soloLetrayespacio=/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ.]+$/;
   
   
   /*if(!(soloNumeros.test(dni.value))){
       mensajeError.push('Dni no es numérico');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(nombre.value))){
       mensajeError.push('En Nombre ingrese solo letras');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(apellido.value))){
       mensajeError.push('En Apellido ingrese solo letras');
       control = false;
   }else{ 
        
       }*/  
    
   if(dni.value === null || dni.value === ''){
       mensajeError.push('Ingrese su dni');
       control = false;
   }else{
       if(!(soloNumeros.test(dni.value))){
          mensajeError.push('Dni no es numérico,ingrese DNI válido');
          control = false;
       }else{ 
       }
   }
   if(nombre.value === null || nombre.value === ''){
       mensajeError.push('Ingrese su nombre');
       control = false;
   }else{
       if(!(soloLetra.test(nombre.value))){
       mensajeError.push('En Nombre ingrese solo letras');
       control = false;
   }else{ 
       }
   }
   if(apellido.value === null || apellido.value === ''){
       mensajeError.push('Ingrese su apellido');
       control = false;
   }else{
       if(!(soloLetra.test(apellido.value))){
       mensajeError.push('En Apellido ingrese solo letras');
       control = false;
   }else{ 
       }
   }
   if(titulo.value === null || titulo.value === ''){
       mensajeError.push('Ingrese su título');
       control = false;
   }else{
       if(!(soloLetrayespacio.test(titulo.value))){
       mensajeError.push('En Título ingrese solo letras');
       control = false;
   }else{ 
       }
   }
  error.innerHTML = mensajeError.join(', ');
   //error=null;
   return control;
}

function EnviarFormM(){
    console.log('Enviando form');
   var control = true;
   var mensajeError = [];
   var soloNumeros=/^[0-9]+$/;
   var soloLetra=/^[A-z]+$/;
   var soloLetrayespacio=/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ.]+$/;
   
   
   /*if(!(soloNumeros.test(dni.value))){
       mensajeError.push('Dni no es numérico');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(nombre.value))){
       mensajeError.push('En Nombre ingrese solo letras');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(apellido.value))){
       mensajeError.push('En Apellido ingrese solo letras');
       control = false;
   }else{ 
        
       }*/  
    
   /*if(codmateria.value === null || codmateria.value === ''){
       mensajeError.push('Ingrese su Código Materia');
       control = false;
   }else{
       if(!(soloNumeros.test(codmateria.value))){
          mensajeError.push('Código Materia no es numérico,ingrese Código Materia válido');
          control = false;
       }else{ 
       }
   }*/
   if(materia.value === null || materia.value === ''){
       mensajeError.push('Ingrese Materia');
       control = false;
   }else{
       if(!(soloLetrayespacio.test(materia.value))){
       mensajeError.push('En Materia ingrese solo letras');
       control = false;
   }else{ 
       }
   }
   if(dniprofesor.value === null || dniprofesor.value === ''){
       mensajeError.push('Ingrese DNI Profesor');
       control = false;
   }else{
       if(!(soloNumeros.test(dniprofesor.value))){
       mensajeError.push('En DNI Profesor ingrese solo números');
       control = false;
   }else{ 
       }
   }
  error.innerHTML = mensajeError.join(', ');
   //error=null;
   return control;
}

function EnviarFormN(){
    console.log('Enviando form');
   var control = true;
   var mensajeError = [];
   var soloNumeros=/^[0-9]+$/;
   var soloLetra=/^[A-z]+$/;
   var soloLetrayespacio=/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ.]+$/;
   
   
   /*if(!(soloNumeros.test(dni.value))){
       mensajeError.push('Dni no es numérico');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(nombre.value))){
       mensajeError.push('En Nombre ingrese solo letras');
       control = false;
   }else{ 
        
       }
   
   if(!(soloLetra.test(apellido.value))){
       mensajeError.push('En Apellido ingrese solo letras');
       control = false;
   }else{ 
        
       }*/  
    
  /* if(idnota.value === null || idnota.value === ''){
       mensajeError.push('Ingrese Id Nota');
       control = false;
   }else{
       if(!(soloNumeros.test(idnota.value))){
          mensajeError.push('Id Nota no es numérico,ingrese Id Nota válido');
          control = false;
       }else{ 
       }
   }*/
   if(dni.value === null || dni.value === ''){
       mensajeError.push('Ingrese DNI');
       control = false;
   }else{
       if(!(soloNumeros.test(dni.value))){
       mensajeError.push('En DNI ingrese solo números');
       control = false;
   }else{ 
       }
   }
   if(codmateria.value === null || codmateria.value === ''){
       mensajeError.push('Ingrese su Cod Materia');
       control = false;
   }else{
       if(!(soloNumeros.test(codmateria.value))){
       mensajeError.push('En Cod Materia ingrese solo números');
       control = false;
   }else{ 
       }
   }
   if(nota.value === null || nota.value === ''){
       mensajeError.push('Ingrese Nota');
       control = false;
   }else{
       if(!(soloNumeros.test(nota.value))){
       mensajeError.push('En Nota ingrese solo números');
       control = false;
   }else{ 
       }
   }
  error.innerHTML = mensajeError.join(', ');
   //error=null;
   return control;
}

