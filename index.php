<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">

<section class="banniere">
    <div class="container">
      <div class="row">
        <div class="col-6"><h1>SheDrive</h1><br><h2>le covoiturage entre femmes, par des femmes.</h2><br><button>Découvrez Plus</button></div>
        <div class="col-6">image</div>
      </div>
    </div>
</section>

<section class="what">
    <div class="container">
      <div class="row">
        <div class="col-6">image</div>
        <div class="col-6">
            <h3>SheDrive, c'est quoi ?</h3>
            <p>SheDrive est une plateforme de covoiturage dédiée aux femmes.<br>Notre objectif ? Offrir un espace sécurisé et solidaire.</p>
            <h3>Notre objectif</h3>
            <p>Offrir un espace sécurisé, solidaire et pratique pour vos déplacements. Chaque membre bénéficie d’une identification vérifiée pour garantir une confiance mutuelle.</p>
            <p>Avec SheDrive, voyagez en toute sérénité, que ce soit pour vos trajets quotidiens ou des voyages plus longs.</p>
        </div>
      </div>
    </div>
</section>

<section class="know">
        <h2>Le Saviez-vous ?</h2>
        <div class="knows">
            <div class="row">
                <div class="col">
                <b>83%</b><br>
                des femmes déclarent avoir déjà été harcelées dans les rues.
                </div>
                <div class="col order-5">
                <b>89% </b><br>
                des femmes se sentent plus en sécurité entre elles.
                </div>
                <div class="col order-1">
                <b>1 femme sur 2 </b><br>
                se sent en insécurité après une certaine heure.
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <h2>Nos Services</h2>
        <p>Ce que nous proposons pour améliorer votre expérience de covoiturage</p>
        <div class="services">
            <div><b>COVOITURAGE SÉCURISÉ</b><p>Des trajets entre femmes pour garantir votre sécurité. Avec SheDrive, voyagez sans appréhension grâce à un système conçu pour offrir un environnement sûr.</p></div>
            <div><b>COMMUNAUTÉ SOLIDAIRE</b><p>Partager vos expérience avec d’autres femmes bienveillantes. Créez des liens uniques et échangez avec une communauté qui partage vos valeurs.</p></div>
            <div><b>ENGAGEMENT BÉNÉVOLE</b><p>Aucun échange financier, basé sur le partage et l’entraide. Ce concept valorise l’esprit d’entraide et encourage une mobilité inclusive. Un geste simple qui fait toute la différence pour d’autres femmes.</p></div>
            <div><b>TRAJET SUR LE CHEMIN</b><p>DLes conductrices proposent des places uniquement pour les trajets qu’elles effectuent déjà. Un modèle simple et pratique, sans détour inutile. </p></div>
        </div>
    </section>

    <section class="etape">
    <h2>Rejoignez She Drive en 5 étapes :</h2>
    <div class="steps">
        <div class="step">
            <div class="circle">1</div>
            <div class="content">
                <h2>INSCRIPTION</h2>
                <p>Créez un compte en remplissant un formulaire avec vos informations personnelles et en téléchargeant une pièce d'identité. Ce processus garantit un accès sécurisé.</p>
            </div>
        </div>
        <div class="step">
            <div class="circle">2</div>
            <div class="content">
                <h2>VÉRIFICATION D'IDENTITÉ</h2>
                <p>L'équipe SheDrive valide votre identité en quelques heures. Une fois approuvée, vous recevez un e-mail de confirmation pour activer votre compte.</p>
            </div>
        </div>
        <div class="step">
            <div class="circle">3</div>
            <div class="content">
                <h2>CONNEXION</h2>
                <p>Accédez à la plateforme avec votre e-mail et mot de passe pour commencer à utiliser nos services.</p>
            </div>
        </div>
        <div class="step">
            <div class="circle">4</div>
            <div class="content">
                <h2>RECHERCHER OU CRÉER UN TRAJET</h2>
                <ul>
                    <li>Trouvez un trajet en indiquant votre point de départ, destination, et horaire souhaité.</li>
                    <li>Si vous êtes conductrice, proposez un trajet en partageant les détails de votre itinéraire.</li>
                </ul>
            </div>
        </div>
        <div class="step">
            <div class="circle">5</div>
            <div class="content">
                <h2>ORGANISER VOTRE TRAJET</h2>
                <p>Utilisez la messagerie intégrée pour discuter avec les autres utilisatrices et finaliser les détails du voyage.</p>
            </div>
        </div>
            <div class="arrow"></div>
        </div>
    </div>
    </section>

    <section class="temoignages">
        <h2>Ce que les autres femmes pensent de She Drive</h2>
   
    </section>

    <section class="coordonnees">
        <h2>contactez-nous dès maintenant</h2>
        <div class="coordonnee">
      <div class="row">
        <div class="col-6">
            <h3>Notre email</h3>
            <p>support@shedrive.be
            <br>
            <h3>Instagram</h3>
            <p>@shedrive_be</p>
            <br>
            <h3>Facebook</h3>
            <p>@shedrive_fc</p>
        </div>
        <div class="col-6">
        <form>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Nom</label>
                <input type="name" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
                <label for="exampleInputSurname" class="form-label">Prénom</label>
                <input type="surname" class="form-control" id="exampleInputSurname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail">
            </div>
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label">Message</label>
                <input type="message" class="form-control" id="exampleInputMessage">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        </div>
      </div>
    </div>
        
    </section>










<?php get_footer(); ?>
