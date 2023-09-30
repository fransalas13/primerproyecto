function verificarPasswords(){
    pass1 = document.getElementById('contrasenia');
    pass2 = document.getElementById('repeatcontrasenia');

    if(pass1.value != pass2.value){
        //Contraseñas no coinciden
        document.getElementById("error").classList.add("mostrar");
        
        return false;

    }
    else{
        document.getElementById("error").classList.remove("mostrar");
        document.getElementById("ok").classList.remove("ocultar");
        document.getElementById("login").disabled="true";
    
        //refresca la pagina 
        setTimeout(function(){
            location.reload();

        },3000);
        return true;
        
    }
}


function saludar(obj,contador) {
  
    document.getElementById("check1").checked = false;
    document.getElementById("check2").checked = false;
    document.getElementById("check3").checked = false;

    obj.checked = true;
    
}