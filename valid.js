var dni = document.getElementById("dni");
var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var error = document.getElementById("error");

function EnviarForm(){
    console.log('Enviando form');
   var control = true;
   var mensajeError = [];
   var soloNumeros=/^[0-9]+$/;
   var soloLetra=/^[A-z]+$/;
   
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
   
  error.innerHTML = mensajeError.join(', ');
   //error=null;
   return control;
}


