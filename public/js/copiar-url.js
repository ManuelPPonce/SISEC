
// //<![CDATA[
//     var boton = document.getElementById('btn-participante');
//     boton.addEventListener('click', function(e) {
//     if(boton.id == 'getlink'){
//     var aux = document.createElement('input');
//     aux.setAttribute('value', window.location.href.split('?')[0].split('#')[0]);
//     document.body.appendChild(aux);
//     aux.select();
//     try {
//     document.execCommand('copy');
//     var aviso = document.createElement('div');
//     aviso.setAttribute('id', 'aviso');
//     aviso.style.cssText = 'position:fixed; z-index: 9999999; top: 50%;left:50%;margin-left: -70px;padding: 20px; background: gold;border-radius: 8px;font-family: sans-serif;';
//     aviso.innerHTML = 'URL copiada';
//     document.body.appendChild(aviso);
//     document.load = setTimeout('document.body.removeChild(aviso)', 2000);
//     document.load = setTimeout('boton.id = "getlink"',2500);
//     boton.id = '';
//     } catch (e) {
//     alert('Tu navegador no soporta la función de copiar');
//     }
//     document.body.removeChild(aux);
//     }
//     });
//     //]]


