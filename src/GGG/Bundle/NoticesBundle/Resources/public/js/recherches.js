<!--

//alert('Barre de recherches');


function go(event){
	//alert('go');
	event = event || window.event;
	
	var target = event.target || event.srcElement;
	//alert(event.keyCode);

	/* touche entrée, 'Enter', retour chariot, \r\n */
	if ( event.keyCode === 13 ){
		window.location = 'http://www.honeypot-1.fr/app_dev.php/appareil/'+target.id;
	}
	/* fleche du bas, IE 'Down', ArrowDown */
	else if( event.keyCode === 40 ){
		
		if( target.nextSibling ){
			target.nextSibling.focus();
		}
		else{
			target.focus();
		}
	}
	/* fleche du haut, IE 'Up', 'ArrowUp' */
	else if( event.keyCode === 38 ){
		
		if( target.previousSibling ){
			target.previousSibling.focus();
		}
		else{
			
			document.getElementById('motif').focus();
		}
	}

}


function surligne (event){

	event = event || window.event;
	var target = event.target || event.srcElement;

	target.style.backgroundColor = 'rgb(28, 135, 255)';
	target.style.color = 'rgb(255, 255, 255)';

}

function desurligne (event){

	event = event || window.event;
	var target = event.target || event.srcElement;
	target.style.color = 'rgb(0, 0, 0)';
	target.style.backgroundColor = 'rgb(255, 255, 255)';

}


function recherche(event){

	event = event || window.event;
	var target = event.target || event.srcElement;

	//alert(event.keyCode);

	if ( event.keyCode === 40 ){
		document.getElementById('propositions').firstChild.focus();
	}
	else{

		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
		
		if ( xhr.readyState == 4 && xhr.status == 200 ){

		/* responseText est un objet JSON transformé en string, on le transforme en tableau */
		var responseJson = JSON.parse(xhr.responseText);
		
		var i;

		document.getElementById('propositions').innerHTML = "";
		
		/* si on a pas de resultats */
		if ( responseJson.length == 0 ){
			
			document.getElementById('noRes').style.display = 'block';
		
		}
		/* si on a des resultats */
		else{	
			
			document.getElementById('noRes').style.display = 'none';
				
				for(i = 0 ; i < responseJson.length; i++ ){
			
						var appareil = responseJson[i]['nom']+' '+responseJson[i]['marque'].toUpperCase()+' ('+responseJson[i]['categorie']+')';
						//var proposition = document.createTextNode(appareil);
						var opt = document.createElement('li');
						opt.innerHTML = appareil;
						//opt.appendChild(proposition);
						opt.setAttribute('id',responseJson[i]['id']);
						opt.setAttribute('tabIndex',1);
						opt.addEventListener("keyup",go,false);
						opt.addEventListener("focus",surligne,false);
						opt.addEventListener("blur",desurligne,false);
						document.getElementById('propositions').appendChild(opt);
					}
				}
		
			}
	
		};

		var motif = document.getElementById('motif').value;
	
		xhr.open('POST','/app_dev.php/recherche/'+motif,true);
		xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
		xhr.send('motif='+motif);
	}
}



var barre = document.getElementById('motif');
var i = 0;
if ( window.addEventListener ){
	barre.addEventListener('keydown',recherche,false);

}
else if( window.attachEvent ){
	barre.attachEvent('keypress',recherche);
}


-->