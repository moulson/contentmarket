$(document).ready(function(){
switch (pageName){
	case 'index':
		MetaTitle("Index Page");
		MetaDescription("This is a metadesc");
		break;
	case 'blog-index':
		MetaTitle("Index Page");
		MetaDescription("This is a metadesc");
		break;
	case 'blog-new':
		break;
	case 'about':
		break;
	default: 
}

function MetaTitle(metaTitle){
	$("head").append("<title>" +metaTitle + "</title>");
}
function MetaDescription(metaDescription){
	$("head").append("<meta name='description; content='" + metaDescription + "'/>");
}
alert("got here");
});