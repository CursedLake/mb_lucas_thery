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

	
});