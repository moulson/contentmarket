$(document).ready(function(){
	switch(pageName){
	case 'index':
		$('#nav-home').addClass('active');
		break;
	case 'about':
		$('#nav-about').addClass('active');
		break;
	}
});