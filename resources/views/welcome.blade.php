@extends('partials.main')


@section('content')
    {{-- Show success message --}}
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            <script>
                setTimeout(function() {
                    $(".alert-success").fadeOut();
                }, 3000);
            </script>
        </div>
    @endif
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Nos formations</span>
                                {{-- <h2>Découvrez nos différentes formations</h2> --}}
                                <div class="buttons">
                                    <div class="main-button">
                                        {{-- <a href="#courses">Decouvrir</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Cours en ligne</span>
                                <h2>Une autre vision de l'education</h2>
                                <p style="font-weigth: bold">
                                    Nous vous offrons la possibilité d'étudier peu importe votre position géographique. Nous
                                    vous dotons de très bons encadrements pour votre réussite scolaire et professionnelle.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Formations</h6>
                        <h2>Toutes nos formations</h2>
                    </div>
                </div>
            </div>
            <div class="row event_box">
                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/gestion.jpg" alt=""></a>
                            <span class="category">Informatique</span>
                        </div>
                        <div class="down-content">
                            <h5>Informatique de Gestion</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/commerce_digital.jpeg" alt=""></a>
                            <span class="category">CDI</span>
                        </div>
                        <div class="down-content">
                            <h5>Commerce Digital et Infographie</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/commerce.jpg" alt=""></a>
                            <span class="category">Logistique</span>
                        </div>
                        <div class="down-content">
                            <h5>Commerce et Logistique Internationale</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/economie.jpg" alt=""></a>
                            <span class="category">Économie</span>
                        </div>
                        <div class="down-content">
                            <h5>Économie Appliquée et Économétrie</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/science.jpg" alt=""></a>
                            <span class="category">ST</span>
                        </div>
                        <div class="down-content">
                            <h5>Sciences technologiques</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/rh2.jpeg" alt=""></a>
                            <span class="category">GARH</span>
                        </div>
                        <div class="down-content">
                            <h5>Gestion Administrative des Ressources Humaines</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/hygiene.jpg" alt=""></a>
                            <span class="category">Environnement</span>
                        </div>
                        <div class="down-content">
                            <h5>Qualité Hygiène Sécurité Environnement</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/comptabilite.jpg" alt=""></a>
                            <span class="category">Comptabilité et Audit</span>
                        </div>
                        <div class="down-content">
                            <h5>Audit Comptabilité Gestion</h5>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 10px" class="col-lg-4 col-md-6 align-self-center event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/certificate.jpeg" alt=""></a>
                            <span class="category">MCD</span>
                        </div>
                        <div class="down-content">
                            <h5>Master-classes et Certifications diverses</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section testimonials" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Nous choisir</h6>
                        <h2>Pourquoi nous choisir ?</h2>
                        <p>
                            Decouvrez quelques uns de nos atouts qui nous permettent de rendre la formation de nos
                            étudiants
                            plus agreable.
                        </p>
                    </div>
                </div>
                <br>
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p class="text-uppercase fs-8">Salles multimedias avec connexion</p>

                        </div>
                        <div class="item">
                            <p class="text-uppercase fs-8">Cours en presentiel et en ligne</p>

                        </div>
                        <div class="item">
                            <p class="text-uppercase fs-8">Certifications par specialite</p>

                        </div>

                        <div class="item">
                            <p class="text-uppercase fs-8">Cours dipenses par des enseignants d'universites et des
                                professionels chevronnes</p>

                        </div>

                        <div class="item">
                            <p class="text-uppercase fs-8">Appui a la creation et au developpement de projets
                                d'entreprise
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Diplômes</h6>
                        <h2>Nos diplômes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOnes" aria-expanded="true" aria-controls="collapseOnes">
                                    DUT
                                </button>
                            </h2>
                            <div id="collapseOnes" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <p class="col-6">
                                            Le DUT, ou Diplôme universitaire de technologie, est un diplôme de
                                            niveau bac +2
                                            qui se prépare en deux ans après le baccalauréat.
                                            <br><br> C'est un diplôme professionnalisant qui permet d'acquérir les
                                            compétences nécessaires pour exercer un métier dans un domaine technique ou
                                            professionnel.
                                        </p>
                                        <img class="col-6" height="200" src="assets/images/dut.jpeg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwos" aria-expanded="false" aria-controls="collapseTwos">
                                    LICENCE
                                </button>
                            </h2>
                            <div id="collapseTwos" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <p class="col-6">
                                            La Licence est un diplôme de niveau bac +3 qui se prépare en
                                            trois ans après le baccalauréat.
                                            <br><br> C'est un diplôme généraliste qui permet d'acquérir une
                                            formation solide dans un domaine particulier
                                        </p>
                                        <img class="col-6" height="200" src="assets/images/licence2.jpeg"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThrees" aria-expanded="false"
                                    aria-controls="collapseThrees">
                                    MASTER
                                </button>
                            </h2>
                            <div id="collapseThrees" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <p class="col-6">
                                            Le Master est un diplôme de niveau bac +5 qui se prépare en deux
                                            ans après la
                                            licence. <br><br> C'est un diplôme d'excellence qui permet d'acquérir
                                            une formation approfondie dans un domaine particulier.
                                        </p>
                                        <img class="col-6" height="200" src="assets/images/master2.jpeg"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFours" aria-expanded="false" aria-controls="collapseFours">
                                    CERTIFICATION
                                </button>
                            </h2>
                            <div id="collapseFours" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <p class="col-6">
                                            Une Certification atteste de la maîtrise de compétences spécifiques
                                            dans un domaine particulier.
                                        </p>
                                        <img class="col-6" height="200" src="assets/images/certificate.jpeg"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div style="margin-bottom: 10px" class="col-lg-5 align-self-center offset-lg-1">
                    <div class="section-heading">
                        <h6>A propos de nous</h6>
                        <h2>
                            Decouvrez ici quelques questions recurentes pour mieux nous connaitre
                            </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Que signifie &nbsp; <strong> ISTAM</strong>?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>ISTAM</strong> signifie INSTITUT SUPERIEUR DES TECHNIQUES AVANCEES ET
                                    DE
                                    MANAGEMENT
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Où nous trouver ?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    OKALA : 100 m après l’ancien dispensaire d’OKALA (en allant vers MIKOLONGO sur la
                                    Gauche)
                                    <br>
                                    <b>Contacts</b>
                                    <br>
                                    Tél (+241) 065 40 92 65
                                    <br>
                                    E-mail : istamgabon@gmail.com
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Notre vision
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    L’<strong>ISTAM</strong> participe à la diffusion du savoir dans le respect des
                                    traditions universitaires
                                    au profit de la communauté. <br>
                                    Il tend à créer les conditions qui favorisent la culture du mérite et de
                                    l’excellence,
                                    dans le respect de toutes les spécificités dans un environnement marqué par une
                                    gestion
                                    vertueuse.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Nos objectifs
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Assurer la formation initiale des jeunes bacheliers ;
                                    Former des professionnels de haut niveau capables d’apporter une valeur ajoutée à
                                    l’entreprise <br>
                                    Perfectionner les personnels pour leur permettre de faire face aux mutations et à la
                                    concurrence <br>
                                    Atteindre les standards de la qualité supérieure dans l’encadrement des étudiants,
                                    grâce
                                    à un personnel qualifié.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    L'organisation des études
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Durée</strong> <br>
                                    La formation dispensée par spécialité. Chacune est répartie sur six (10) semestres
                                    d’études pour un volume horaire total de 3000 heures. (Voir maquette de formation).
                                    <br>
                                    <strong>Répartition des enseignements</strong> <br>
                                    Les enseignements sont organisés en cours magistraux, travaux dirigés (TD), travaux
                                    pratiques (TP) ; séminaires spécialisés, visite en entreprise et projet pour une
                                    durée
                                    de deux trois et cinq ans répartis respectivement sur quatre, six et dix semestres.
                                    Chaque semestre est composé de 15 semaines dont : <br>
                                    • Trois (2) semaines d’évaluation <br>
                                    • Douze (13) semaines d’enseignement <br>
                                    A la fin du quatrième semestre du cycle l’étudiant ayant capitalisé 120 crédits
                                    obtient
                                    son diplôme de DUT. Et, au sixième semestre du cycle l’étudiant ayant capitalisé 180
                                    crédits obtient-le diplôme de licence professionnelle. En fin, à la fin du dixième
                                    semestre l’étudiant ayant capitalisé 300 crédits obtient son diplôme de Master.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Quelles sont les modalités d'admission ?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    L’admission à l’ISTAM se fait par examen de dossier :
                                    <br> <strong>ADMISSION SUR EXAMEN DE DOSSIER</strong>
                                    Le candidat doit être titulaire d’un BAC ou équivalent ou avoir fait la classe de
                                    terminale
                                    <br><br> Pour les auditeurs libres recommandés par les secteurs publics, parapublics
                                    ou
                                    privés qui sont admis à suivre tout ou partie des enseignements, conformément aux
                                    textes en vigueur, leur admission est toutefois subordonnée à la justification des
                                    diplômes ou des connaissances minimales nécessaires pour suivre les enseignements.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="350" data-speed="1000"></h2>
                                    <p class="count-text ">Étudiants</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="4" data-speed="1000"></h2>
                                    <p class="count-text ">Année d'expérience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>


    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h6 style="font-size: 35px">Nous contacter</h6>
                        <br>
                        {{-- <h2>N'esitez pas a nous ecrire!</h2> --}}
                        <div class="contact-us-content">

                            <form id="contact-form" action="{{ url('/contact') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input type="name" name="name" id="name"
                                                placeholder="Votre Nom..." autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="Votre Email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="orange-button">Envoyer le
                                                message</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="contact-us-content">

                        <h1>Contact Info</h1>
                        <br><br>
                        <div class="dbox w-100 d-flex align-items-start">

                            <svg width="150px" height="150px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M12 22C13 17 20 16.4183 20 10C20 5.58172 16.4183 2 12 2C7.58172 2 4 5.58172 4 10C4 16.4183 11 17 12 22Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>
                            <br>
                            <br>
                            <div class="text pl-3">
                                <h5>Notre Administration
                                </h5>
                                <p style="color: white">
                                    OKALA : 100 m après l’ancien dispensaire d’OKALA (en allant vers MIKOLONGO sur la
                                    Gauche)
                                </p>
                            </div>
                        </div>
                        <br><br>

                        <div class="dbox w-100 d-flex align-items-start">
                            <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M12 7V12H15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>
                            <br>
                            <br>
                            <div class="text pl-3">
                                <h5>Heures d'ouverture des bureaux
                                </h5>
                                <p style="color: white">
                                    LUN-VEN: 8h – 18h
                                </p>
                            </div>
                        </div>
                        <br><br>

                        <div class="dbox w-100 d-flex align-items-start">
                            <svg width="80px" height="80px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <br>
                            <br>
                            <div class="text pl-3">
                                <h5>Contactez-nous
                                </h5>
                                <p style="color: white">
                                    <a style="color: white" href="https://wa.me/241065409265" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                        (+241) 065 40 92 65
                                    </a>
                                    <br>
                                    <a style="color: white" href="https://wa.me/241074728392" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                        (+241) 074 72 83 92
                                    </a>

                                    <br>
                                    E-mail : <a style="color: white"
                                        href="mailto:istamgabon@gmail.com">istamgabon@gmail.com</a>
                                <div class="btn-group btn-block" role="group">


                                    <a href="https://www.facebook.com/istamgabon?mibextid=9R9pXO" target="_blank">
                                        <div style="margin: 2px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; border-radius: 8px;background-color: rgb(42, 166, 42)"
                                            class="">
                                            <span style="color: white" class="fab fa-facebook"></span>
                                        </div>
                                    </a>

                                    <a href="https://wa.me/241065409265" target="_blank">
                                        <div style="margin: 2px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; border-radius: 8px;background-color: rgb(42, 166, 42)"
                                            class="">
                                            <span style="color: white" class="fab fa-whatsapp"></span>
                                        </div>
                                    </a>

                                    <a href="mailto:istamgabon@gmail.com" target="_blank">
                                        <div style="margin: 2px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; border-radius: 8px;background-color: rgb(42, 166, 42)"
                                            class="">
                                            <span style="color: white" class="fa fa-envelope"></span>
                                        </div>
                                    </a>
                                </div>
                                </p>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".owl-testimonials").owlCarousel({
                items: 1, // Nombre d'éléments à afficher à la fois
                loop: true, // Boucler le carrousel
                autoplay: true, // Activer le défilement automatique
                autoplayTimeout: 5000, // Délai entre chaque diapositive en millisecondes (par exemple, 5000 ms = 5 secondes)
                autoplayHoverPause: true // Mettre en pause le défilement automatique au survol de la souris
            });
        });
    </script>
@endsection
