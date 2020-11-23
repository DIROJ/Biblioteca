function mostrarContrasena(){
    let x = document.getElementById("password");
    if(x.type == "password"){
        x.type = "text";
    }else{
        x.type = "password";
    }
}
function mostrarContrasenac(){
    let y = document.getElementById("passwordc");
    if(y.type == "password"){
        y.type = "text";
    }else{
        y.type = "password";
    }
}

function confirmarC(){
    let pass1 = document.getElementById("password").value;
    let pass2 = document.getElementById("passwordc").value;

    if (pass1 == pass2){
        alert("Son iguales")
    }
    else{
        alert("Son distintas")
    }
}