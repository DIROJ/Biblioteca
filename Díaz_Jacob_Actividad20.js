function resultado(){
    let entrada = parseInt(document.getElementById('entrada').value);
    
    if (isNaN(entrada)){
        document.getElementById('salida').style.backgroundColor = ('black');
        document.getElementById('salida').style.color = ('white');
        document.getElementById('salida').value = ('Introduce un valor');
    }

    if (entrada == 0){
        document.getElementById('salida').style.backgroundColor = ('bisque');
        document.getElementById('salida').style.color = ('white');
        document.getElementById('salida').value = ('El valor es 0');
    }
    else{
        if (entrada % 2 === 0){
        document.getElementById('salida').style.backgroundColor = ('aquamarine');
        document.getElementById('salida').style.color = ('white');
        document.getElementById('salida').value = ('El valor es par');
        }
        else if (entrada % 2 === 1){
            document.getElementById('salida').style.backgroundColor = ('orange');
            document.getElementById('salida').style.color = ('white');
            document.getElementById('salida').value = ('El valor es impar');
        }
    }
    
}