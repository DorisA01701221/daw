function validar_password(){
    let password1= document.getElementById("password1").value.style.position = "absolute";
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
function validar_email(){
   let email= document.getElementById("GETemail").value;
   if(email.hasOwnProperty('@')){
       alert('tu email es correcto');
   }else{
       alert('tu email es incorrecto');
   }
}
function setTime() {
    alert("diste click :O ");
}



function hacerDrop(ev) {
    ev.preventDefault();
}

function arrastrar(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}