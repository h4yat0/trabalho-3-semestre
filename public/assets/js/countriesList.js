function mostrar_cards(div, btn){
    let display = document.getElementById(div).style.display;
    let btnInner = document.getElementById(btn)
    
    if (display == "none"){
      document.getElementById(div).style.display = 'block';
      btnInner = btnInner.innerHTML =  "Ocultar"
    }else{
        document.getElementById(div).style.display= 'none';
        btnInner = btnInner.innerHTML =  "Mostrar"
    }
}
  