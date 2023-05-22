function crearPartida() {
  const mapa2 = $('#mapa').val();
  const txtMapa2 = $("#mapa option[value=" + mapa2 + "]").text().toLowerCase();
  location.href = "../multijugador.html?room=" + makeid(5) + "&mapa=" + txtMapa2;
}


//Generar el codigo
function makeid(length) {
  let result = '';
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  const charactersLength = characters.length;
  let counter = 0;
  while (counter < length) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
    counter += 1;
  }
  return result;
}