function CrearCaja(texto){
	//contenedor principal
	var pagina=document.getElementById('pagina');
	
	//creando nuevo div
	var cajaNueva=document.createElement('div');
	//creando texto del div con mensaje de la caja de texto
	
	//asignandoles atributos
	cajaNueva.setAttribute('className','caja'); //para IE
	cajaNueva.setAttribute("class", "caja");
	
	//llenando la caja nueva
	cajaNueva.innerHTML=texto;
	
	//insertar antes del primer elemento de pagina
	pagina.insertBefore(cajaNueva,pagina.firstChild);
	
	//elimiar el ultimo elemento
	EliminarCaja();
}

//remueve el ultimo elementos si estos superan los 10
function EliminarCaja(){
	var pagina=document.getElementById('pagina');
	elementos=pagina.childNodes;
	if(elementos.length>20){
		pagina.removeChild(pagina.lastChild);
	}
}
