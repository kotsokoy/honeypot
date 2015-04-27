<!--

alert('admin_deleteMarque.js');

function confirme_deleteMarque(event){
	
	event = window.event || event;
	var target = event.target || event.srcElement;
	//alert('id: '+target.id);
	
	if( confirm('êtes-vous sur de vouloir supprimer ?') ){

		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function(){

			if ( xhr.readyState === 4 && xhr.status === 200 ){
				alert(xhr.responseText);
			}
		};

		xhr.open('DELETE','/app_dev.php/admin/marque/delete/'+target.id,true);
		xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
		xhr.send('id='+target.id);
	}
	else{
		return;
	}
}


var i = 0;

if( window.addEventListener ){
	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'supprimer' ){

			document.getElementsByTagName('button')[i].addEventListener('click',confirme_deleteMarque,false);

		}

	}

}

else if( window.attachEvent ){

	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){
		
		if( document.getElementsByTagName('button')[i].className == 'supprimer' ){

			document.getElementsByTagName('button')[i].attachEvent('onclick',confirme_deleteMarque);

		}

	}

}

-->