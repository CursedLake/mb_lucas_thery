$(document).ready(function()
{

	$(".readmore").click(function(event) {
		var id = event.target.attributes.recupID.value;

		$.ajax({
			url: "article.php?a=recup&id="+id
		}).done(function(done){
			//console.log(event.target.parentElement);
			event.target.parentElement.innerHTML = done;
		});
	});

});