$(document).ready(function()
{
    var msgChampVide = "Champ vide"; //message de champ vide par défaut

    function erreur(element, message)
    {
        element.parent().addClass("has-error");
        element.attr("id","inputError");
        if(message!="") var text = "<div class='alert alert-danger'>"+ message +"</div>";
        element.after($(text).hide());
        $(".alert").slideDown("slow");
    }

    $("#insForm").submit(function(event)
    {
        event.preventDefault();
        $(".has-error").removeClass("has-error");
        $(".alert").remove();  //si il y des alert encore présents, on les retire

        if (this.email.value=="") erreur($(this.email), msgChampVide);
        else if (this.mdp.value=="") erreur($(this.mdp), msgChampVide);
        else if (this.confmdp.value=="") erreur($(this.confmdp), msgChampVide);
        else if (this.mdp.value!=this.confmdp.value)
        {
            erreur($(this.mdp), "");
            erreur($(this.confmdp), "Champs non-identique");
            return  false;
        }
        else {
            return true;
        }
    });

    $("form input").keypress(function()
    {
        $(this).parent().removeClass("has-error");
        $(this).next().slideUp("slow");
    });
});