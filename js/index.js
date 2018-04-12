$(document).ready(function()
{
	$(".readmore").click(function(event) {
		var id = event.target.attributes.recupID.value;

		$.ajax({
			url: "article.php?a=recup&id="+id
		}).done(function(done){
			event.target.parentElement.innerHTML = done;
		});
	});

	$(".fa-star-o").mouseenter(function(){
		var starid = $(this).context.attributes.starid.value;
		for (var i = 0; i < 5; i++) {
			if (i < starid || i == 0){
				$($(this).parent("span")[0].children[i]).removeClass('fa-star-o').addClass('fa-star');
			}
			else
			{
				$($(this).parent("span")[0].children[i]).removeClass('fa-star').addClass('fa-star-o');
			}
		}
	});

	$(".stars").mouseleave(function(event){
		$(event.currentTarget).children('i').addClass('fa-star-o').removeClass('fa-star');
	});

	$(".fa-star-o").click(function(){
		//requête ajax pour insérer la note dans la bdd
		//essayer de faire une moyenne pour l'attribuer la note
	});

	
});