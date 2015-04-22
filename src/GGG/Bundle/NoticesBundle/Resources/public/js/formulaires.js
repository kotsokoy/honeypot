<!-- 

//alert('AJAX SF2 ENVOIE FORMULAIRE');

function formPOST(){

	this.submit();

}


if( window.addEventListener ){
	for ( i = 0 ; i < document.getElementsByTagName('form').length ; i++ ){
		if ( document.getElementsByTagName('form')[i].name == 'form' ){
			document.getElementsByTagName('form')[i].addEventListener('change',formPOST,false);
		}
	}
}
else if( window.attachEvent ){
	for ( i = 0 ; i < document.getElementsByTagName('form').length ; i++ ){
		if ( document.getElementsByTagName('form')[i].name == 'form' ){
			document.getElementsByTagName('form')[i].attachEvent('onchange',formPOST);
		}
	}
}

-->