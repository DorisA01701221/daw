function validar_password(){
    let password1= document.getElementById("password1").value;
    let password2= document.getElementById("password2").value;
    
  if(password1.length == 0 || !(password1.length >= 5 && password1.length <= 10)){
        alert('escribe contraseña de 5-10 letras o caracteres');
    }
    else if(password1 != password2){
                alert('las contraseñas no coinciden');
     }
    else {
        document.getElementById("form1").submit();
}
}