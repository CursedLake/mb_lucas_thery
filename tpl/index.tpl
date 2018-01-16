<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">NEWS</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        {if isset($aModifier)}
            <div class="row">
                <form method="GET" action="article.php">
                    <div class="col-sm-10">
                        <div class="form-group">
                                <textarea id="message" name="message" class="form-control" placeholder="Message">{$contenuAModifier}</textarea>
                            <!-- ajouter le label -->
                        </div>
                            <input type="hidden"  name="a"  value="mod">
                            <input type='hidden'  name='id'  value={$idAModifier}>

                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>
                </form>
            </div>
        {elseif $util_connecte eq 'true'}
            <div class="row">
                <form method="POST" action="message.php">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                            <!-- ajouter le label -->
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>
                </form>
            </div>
        {/if}

        {*barre de recherche*}
        <form id="IndexSearch" method="GET" action="index.php">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="search" placeholder=Recherche value="{$critereRechercheInput}">
        </form>

        <br /> <br />

        {foreach from=$allMessagesData item=i}
            <blockquote><p>{$i.contenu}</p><footer>{$i.date|date_format:"%d/%m/%Y - %H:%M"}</footer></blockquote>
            {if $util_connecte eq 'true'}
                <a href="article.php?a=sup&id={$i.id}" class="btn btn-danger">Supprimer</a>
                <a href="index.php?a=mod&id={$i.id}&contenu={$i.contenu}" class="btn btn-warning">Modifier</a>
                <br /> <br />
            {/if}
        {/foreach}
        
        {*pagination (critereRecherche="" ou ="&search=blabla"*}
        <div class="navMessages">
            <a href="index.php?page=0{$critereRecherchePagination}" class="navMessagesItem"><<</a>
            {for $i=1 to $nombreDePage}
                {if $pageActuelle eq $i}
                    <a class="navMessagesItem" style="color: black;">{$i}</a>
                {else}
                    <a href="index.php?page={$i-1}{$critereRecherchePagination}" class="navMessagesItem">{$i}</a>
                {/if}
            {/for}
            <a href="index.php?page={$nombreDePage-1}{$critereRecherchePagination}" class="navMessagesItem">>></a>
        </div>

        <!--<blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur <a href="#">#adipiscing</a> elit. Integer posuere erat a ante.</p>
          <footer>Foo</footer>
        </blockquote>

        <blockquote>
          <p>Sed eu tellus vel lectus <a href="#">@rhoncus</a> maximus. Nam eu turpis ac eros pellentesque tincidunt. Maecenas pellentesque consequat libero</p>
          <footer>Mauris arcu</footer>
        </blockquote>

        <blockquote>
          <p>Nunc volutpat vel nibh vitae blandit</p>
          <footer>blandit</footer>
        </blockquote>-->
    </div>
</section>