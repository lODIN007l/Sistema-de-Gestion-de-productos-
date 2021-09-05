function verificar() {
    if ( $("#nombre").val().trim().length > 0 ) {
      alert("El campo contiene un string válido que no son espacios");
    }
    else {
      alert("El campo contiene espacios y está vacío");
    }
  }