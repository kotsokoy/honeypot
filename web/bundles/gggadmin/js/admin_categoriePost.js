<!--

alert('admin_categoriePost.js');




function confirme_postCategorie(event){
	
	event = window.event || event;
	var target = event.target || event.srcElement;

	
	if( confirm('êtes-vous sur de vouloir ajouter cette catégorie ?') ){

		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function(){

			if ( xhr.readyState === 4 && xhr.status === 200 ){
				alert(xhr.responseText);
			}
		};

		
		var nom;


		var i = 0;

		for( i = 0 ; i < document.getElementsByTagName('input').length ; i++ ){
			
			if( document.getElementsByTagName('input')[i].name === 'nom' ){
				nom = document.getElementsByTagName('input')[i].value;
			}

		}

		xhr.open('POST','/app_dev.php/admin/categorie/post',true);
		xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
		xhr.send('nom='+nom);
	}
	else{
		return;
	}
}

var i = 0;

if( window.addEventListener ){
	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'ajouter' ){

			document.getElementsByTagName('button')[i].addEventListener('click',confirme_postCategorie,false);

		}

	}

}

else if( window.attachEvent ){

	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'ajouter' ){

			document.getElementsByTagName('button')[i].attachEvent('onclick',confirme_postCategorie);

		}

	}

}

-->