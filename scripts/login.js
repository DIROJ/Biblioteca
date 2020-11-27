
  function mostrarContrasena(){
      let x = document.getElementById("password");
      if(x.type == "password"){
          x.type = "text";
      }else{
          x.type = "password";
      }
  }


function barra(){
    document.getElementById('cuerpo').style.overflow = ('hidden');
}
function barraX(){
    document.getElementById('cuerpo').style.overflowY = ('scroll');
    document.getElementById('cuerpo').style.scroll = ('scroll');
}
