<!--

alert('admin_appareilUpdate.js');




function confirme_updateAppareil(event){
	
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
		var photo='';
		var photo_nom='';
		var marque;
		var categorie;
		var notice;


		var i = 0;

		for( i = 0 ; i < document.getElementsByTagName('input').length ; i++ ){
			if( document.getElementsByTagName('input')[i].name === 'nom' ){
				nom = document.getElementsByTagName('input')[i].value;
			}
			else if( document.getElementsByTagName('input')[i].name === 'photo' && document.getElementsByTagName('input')[i].value !== '' ){
				photo = document.getElementsByTagName('input')[i].files[0];
				photo_nom = document.getElementsByTagName('input')[i].files[0].name;
			}
		}

		for( i = 0 ; i < document.getElementsByTagName('select').length ; i++ ){
			if( document.getElementsByTagName('select')[i].name === 'marque' ){
				marque = document.getElementsByTagName('select')[i].value;
			}
			else if( document.getElementsByTagName('select')[i].name === 'categorie' ){
				categorie = document.getElementsByTagName('select')[i].value;
			}
			else if( document.getElementsByTagName('select')[i].name === 'notice' ){
				notice = document.getElementsByTagName('select')[i].value;
			}
		}

		/* 
		la classe File hérite de Blob, et le seul moyen de lire un Blob est d'utiliser un FileReader,
		file[0] est donc notre photo, dont on recupere le contenu sous forme de chaine de caracteres
		 */
		var reader = new FileReader();
		if( photo !== ''){
			reader.readAsDataURL(photo);
	

			reader.onloadend = function(){
				xhr.open('PUT','/app_dev.php/admin/appareil/update/'+target.id,true);
				xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
				xhr.send('nom='+nom+'&photo_nom='+photo_nom+'&photo='+reader.result+'&marque='+marque+'&categorie='+categorie+'&notice='+notice);
			};
		}
		else{
			xhr.open('PUT','/app_dev.php/admin/appareil/update/'+target.id,true);
			xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
			xhr.send('nom='+nom+'&photo_nom='+photo_nom+'&photo='+reader.result+'&marque='+marque+'&categorie='+categorie+'&notice='+notice);
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

			document.getElementsByTagName('button')[i].addEventListener('click',confirme_updateAppareil,false);

		}

	}

}

else if( window.attachEvent ){

	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'enregistrer' ){

			document.getElementsByTagName('button')[i].attachEvent('onclick',confirme_updateAppareil);

		}

	}

}

-->