<!--

alert('admin_marqueUpdate.js');




function confirme_updateMarque(event){
	
	event = window.event || event;
	var target = event.target || event.srcElement;
	//alert('id: '+target.id);
	
	if( confirm('êtes-vous sur de vouloir enregistrer les modifications ?') ){

		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function(){

			if ( xhr.readyState === 4 && xhr.status === 200 ){
				alert(xhr.responseText);
			}
		};

		
		var nom;
		var logo='';
		var logo_nom='';

		var i = 0;

		for( i = 0 ; i < document.getElementsByTagName('input').length ; i++ ){
			if( document.getElementsByTagName('input')[i].name === 'nom' ){
				nom = document.getElementsByTagName('input')[i].value;
			}

			else if( document.getElementsByTagName('input')[i].name === 'logo' && document.getElementsByTagName('input')[i].value !== '' ){
				alert(document.getElementsByTagName('input')[i].value);
				logo = document.getElementsByTagName('input')[i].files[0];
				logo_nom = document.getElementsByTagName('input')[i].files[0].name;
			}
		}

		var reader = new FileReader();
		if( logo !== ''){

		reader.readAsDataURL(logo);

		reader.onloadend = function(){ 
				xhr.open('PUT','/app_dev.php/admin/marque/update/'+target.id,true);
				xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
				xhr.send('nom='+nom+'&logo_nom='+logo_nom+'&logo='+reader.result);
			};
		}
		else{
			xhr.open('PUT','/app_dev.php/admin/marque/update/'+target.id,true);
			xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
			xhr.send('nom='+nom+'&logo_nom='+logo_nom+'&logo='+reader.result);
		}
	}
	else{
		return;
	}
}

var i = 0;

if( window.addEventListener ){
	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'enregistrer' ){

			document.getElementsByTagName('button')[i].addEventListener('click',confirme_updateMarque,false);

		}

	}

}

else if( window.attachEvent ){

	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'enregistrer' ){

			document.getElementsByTagName('button')[i].attachEvent('onclick',confirme_updateMarque);

		}

	}

}

-->