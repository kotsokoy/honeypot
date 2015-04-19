<!--


//alert('test js avec Symfony 2');


function setImgStyle(){

//alert('setImgStyle');

var i = 0;
var j = 0;
var img;

	for( i = 0 ; i < document.getElementsByTagName('div').length ; i++ ){
		if( document.getElementsByTagName('div')[i].className == 'marque' ){

			//alert('gauche trouvee');

			for( j = 0 ; j < document.getElementsByTagName('div')[i].getElementsByTagName('img').length ; j++ ){
				
				//alert('parcours image, j = '+j);

				img = document.getElementsByTagName('div')[i].getElementsByTagName('img')[j];

				var ratio = ( img.width / img.height );
				//alert('w: '+img.width);
				//alert('h: '+img.height);
				//alert(img.src+' : ratio = '+ratio);

				if( ratio  > 1 ){
					//alert(img.src+' : ratio > 1');
					img.style.width = 300 + 'px';
					img.style.height = 90 + 'px';
				}
				else if ( ratio  < 1 ){
					//alert(img.src+' : ratio < 1');
					img.style.width = 28 + 'px';
					img.style.height = 90 + 'px';			
				}
				else if ( ( ratio  > 0.90 ) && ( ratio  < 1.1 ) ){
					//alert(img.src+' : ratio presque egale a 1');
					img.style.width = 90 + 'px';
					img.style.height = 90 + 'px';			
				}
			}
		}
	}
	return;
}

//alert('apres listeImg');




if ( window.addEventListener ){
window.addEventListener('load',setImgStyle,false);
}
else if ( window.attachEvent ){
window.attachEvent('onload',setImgStyle);
}
-->