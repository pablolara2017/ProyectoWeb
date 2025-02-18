document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("enviar").addEventListener("click", function(event) {
      

      let nombre = document.getElementById('nom').value;
      let correo = document.getElementById('mail').value;
      

      let caracteresInvalidos = ['$', '#'];
      let contadorInvalidos = 0;
      

      for (let i = 0; i < nombre.length; i++) {
        if (caracteresInvalidos.includes(nombre[i])) {
          contadorInvalidos++;
        }
      }
      
      
      for (let i = 0; i < correo.length; i++) {
        if (caracteresInvalidos.includes(correo[i])) {
          contadorInvalidos++;
        }
      }
      
     
      if (nombre === "" || correo === "") {
        window.alert("Completa todos los campos obligatorios");
        event.preventDefault(); 
      } else if (contadorInvalidos !== 0) {
        window.alert("Caracter inválido encontrado ('$' o '#')");
        event.preventDefault();
      } else if (!isNaN(correo.charAt(0))) {
        window.alert("El correo no puede comenzar con un número");
        event.preventDefault();
      } else if (!isNaN(nombre.charAt(0))) {
        window.alert("El nombre no puede comenzar con un número");
        event.preventDefault();
      }
      
  
    });
  });
  