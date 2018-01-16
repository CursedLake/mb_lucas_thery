<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Profil</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

{if isset($modification)}
    <section>
        <div class="container">
            <div class="row">
                <form method="POST" action="interface_util.php">
                    <div class="infoProfil">
                        <h4>Adresse mail</h4>
                        <input type="email" name="update_email" value="{$email}">
                    </div>
                    <div class="infoProfil">
                        <h4>Mot de passe</h4>
                        <p>XXXX</p>
                    </div>
                    <div class="infoProfil">
                        <h4>Nom</h4>
                        <input type="text" name="update_nom" value="{$nom}">
                    </div>
                    <div class="infoProfil">
                        <h4>Prénom</h4>
                        <input type="text" name="update_prenom" value="{$prenom}">
                    </div>
                    <div class="infoProfil">
                        <button class="btn btn-primary" type="submit" name="update">Modifier</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
{else}
    <section>
        <div class="container">
            <div class="row">
                <div class="infoProfil">
                    <h4>Adresse mail</h4>
                    <p>{$email}</p>
                </div>
                <div class="infoProfil">
                    <h4>Mot de passe</h4>
                    <p>XXXX <a href="changement_mdp.php">Modifier mot de passe</a></p>
                </div>
                <div class="infoProfil">
                    <h4>Nom</h4>
                    <p>{$nom}</p>
                </div>
                <div class="infoProfil">
                    <h4>Prénom</h4>
                    <p>{$prenom}</p>
                </div>
                <div class="infoProfil">
                    <form method="POST" action="interface_util.php">
                        <button class="btn btn-primary" type="submit" name="modif">Modifier les informations</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
{/if}