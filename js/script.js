$(document).ready(function(){
	$('#more').click(function(){
		loadMore();
	})
})

function loadMore(){
	var current_article_index = $('article').length;
	
	$.ajax({
	       url : 'https://www.voltajazz.com/esgi/api.php',
	       type : 'POST',
	       dataType : 'json',
	       crossOrigin: null,
	       data : {"index" : current_article_index},
	       beforeSend: function(){
	          displayLoader(); 
	       },
	       success : function(response, status){
	          displayArticle(response); 
	       },
			error : function(response, status, error){
	         alert(error);
	       },
			complete : function(result, status){
				removeLoader(); 
	       }

	    });
}

function displayLoader(){
	// masquer le bouton
	$('#more').css('visibility','hidden');
	// afficher le loader
	$('#more').before('<i id="loader" class="fas fa-spinner"></i>')
}

function removeLoader(){
	// supprimer le loader
	$('#loader').remove();
	// changer l'intitulé du bouton
	if($('article').length > 0){
		$('#more').html('Voir l\'article suivant');
	}
	// afficher le bouton
	$('#more').css('visibility','visible');
	
}

function displayArticle(response){
	
	// créer un objet html article avant de l'ajouter au document
	var article = $('<article/>')
	.append('<header><h1>' + response.article.title + '</h1><p>' + response.article.subtitle + '</p></header>')
	.append('<main>' + response.article.content + '</main>');

	$('#more').before(article);
	
	if($('article').length == response.total){
		$('#more').remove();
	}
}
