switch (pageName){
case 'index':
	
	break;
case 'blog':
	break;
case 'services':
	break;
case 'about':
	break;
default: 
}

function MetaTitle(metaTitle){
	$("title").val(title);
}
function MetaDescriptiom(metaDescription){
	$("head").append("<meta name='description; content='" + metaDescription + "'/>")
}