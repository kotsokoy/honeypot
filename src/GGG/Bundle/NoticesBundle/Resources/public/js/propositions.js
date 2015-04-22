<!--


function position(){
	var posX = document.getElementById('recherches').offsetLeft;

	document.getElementById('propositions').style.left = posX + 'px';

}


if ( window.addEventListener ){

	document.getElementById('recherches').addEventListener('click',position,false);
	window.addEventListener('load',position,false);
	window.addEventListener('resize',position,false);

}
else if ( window.attachEvent ){

	document.getElementById('recherches').attachEvent('onclick',position);
	window.attachEvent('onload',position);
	window.attachEvent('onresize',position);

}
-->