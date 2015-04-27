<!--

alert('admin_postNotice.js');




function confirme_postNotice(event){
	
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

		
		var langue;
		var fichier='';
		var fichier_nom='';

		var i = 0;

		for( i = 0 ; i < document.getElementsByTagName('input').length ; i++ ){
			if( document.getElementsByTagName('input')[i].name === 'langue' ){
				langue = document.getElementsByTagName('input')[i].value;
			}

			else if( document.getElementsByTagName('input')[i].name === 'fichier' && document.getElementsByTagName('input')[i].value !== '' ){
				alert(document.getElementsByTagName('input')[i].value);
				fichier = document.getElementsByTagName('input')[i].files[0];
				fichier_nom = document.getElementsByTagName('input')[i].files[0].name;
			}
		}

		var reader = new FileReader();
		if( fichier !== ''){
			reader.readAsDataURL(fichier);
		
			reader.onloadend = function(){
				xhr.open('POST','/app_dev.php/admin/notice/post',true);
				xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
				xhr.send('langue='+langue+'&fichier_nom='+fichier_nom+'&fichier='+reader.result);
			};
		}
		else{
			xhr.open('POST','/app_dev.php/admin/notice/post',true);
			xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
			xhr.send('langue='+langue+'&fichier_nom='+fichier_nom+'&fichier='+reader.result);
		}

	}
	else{
		return;
	}
}

var i = 0;

if( window.addEventListener ){
	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'ajouter' ){

			document.getElementsByTagName('button')[i].addEventListener('click',confirme_postNotice,false);

		}

	}

}

else if( window.attachEvent ){

	for ( i = 0 ; i < document.getElementsByTagName('button').length ; i++ ){

		if( document.getElementsByTagName('button')[i].className == 'ajouter' ){

			document.getElementsByTagName('button')[i].attachEvent('onclick',confirme_postNotice);

		}

	}

}

-->