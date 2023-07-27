@extends('partials.main')

@section('content')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Nos formations</span>
                                <h2>Decouvrez nos differentes formations</h2>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#courses">Decouvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Cours en ligne</span>
                                <h2>Une autre vision de l'education</h2>
                                <p>Nous vous offrons la possibilite d'etudiant peu importe votre position geographique et
                                    vous dotons de tres bons encadrements pour votre reussite scolaire et professionels.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-01.png" alt="DUT">
                        </div>
                        <div class="main-content">
                            <h4>DUT</h4>
                            <p>Diplôme de niveau Bac+2, le Diplôme Universitaire de Technologie vise la polyvalence et la
                                professionnalisation.</p>
                            {{-- <div class="main-button">
                <a href="#">Read More</a>
              </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-02.png" alt="Licence">
                        </div>
                        <div class="main-content">
                            <h4>Licence</h4>
                            <p>La licence correspond au premier niveau de formation du système LMD après le BACCALAUREAT.
                            </p>
                            {{-- <div class="main-button">
                <a href="#">Read More</a>
              </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-03.png" alt="Master">
                        </div>
                        <div class="main-content">
                            <h4>Master</h4>
                            <p>C'est le deuxième diplôme universitaire d'Etat, obtenu au terme de deux années
                                d'études, juste après la licence.</p>
                            {{-- <div class="main-button">
                <a href="#">Read More</a>
              </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where shall we begin?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do we work together?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why SCHOLAR is the best?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are more than one hundred responsive HTML templates to choose from
                                    <strong>Template</strong>Mo website. You can browse by different tags or categories.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do we get the best support?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can also search on Google with specific keywords such as <code>templatemo business
                                        templates, templatemo gallery templates, admin dashboard templatemo, 3-column
                                        templatemo, etc.</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>What make us the best academy online?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid risus commodo.</p>
                        <div class="main-button">
                            <a href="#">Discover More</a>
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
            {{-- <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Webdesign</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Development</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Wordpress</a>
                </li>
            </ul> --}}
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/gestion.jpg" alt=""></a>
                            <span class="category">Informatique</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Informatique de gestion</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/digital.jpg" alt=""></a>
                            <span class="category">Informatique</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Commerce digital & Infographie</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/commerce.jpg" alt=""></a>
                            <span class="category">Logistique</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Commerce & Logistique internationale</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/economie.jpg" alt=""></a>
                            <span class="category">Economie</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Economie Applique & Economie</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/science.jpg" alt=""></a>
                            <span class="category">Informatique</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Science technologique</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/rh.jpg" alt=""></a>
                            <span class="category">RH</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Gestion Administrative des ressoure humaines</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/hygiene.jpg" alt=""></a>
                            <span class="category">Environnement</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Qualite Hygiene Securite Environnement</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/comptabilite.jpg" alt=""></a>
                            <span class="category">Comptabilite & Audi</span>
                            {{-- <span class="price">
                                <h6><em>$</em>160</h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            <h5>Audit Comptabilite Gestion</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="350" data-speed="1000"></h2>
                                    <p class="count-text ">Etudiants</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="4" data-speed="1000"></h2>
                                    <p class="count-text ">Annee d'experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="team section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-01.jpg" alt="">
                            <span class="category">UX Teacher</span>
                            <h4>Sophia Rose</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-02.jpg" alt="">
                            <span class="category">Graphic Teacher</span>
                            <h4>Cindy Walker</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-03.jpg" alt="">
                            <span class="category">Full Stack Master</span>
                            <h4>David Hutson</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-04.jpg" alt="">
                            <span class="category">Digital Animator</span>
                            <h4>Stella Blair</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <br><br>

    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Nous choisir</h6>
                        <h2>Pourquoi nous choisir ?</h2>
                        <p>
                            Decouvrez quelques uns de nos atouts qui nous permettent de rendre la formation de nos etudiants
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
                            <p class="text-uppercase fs-8">Appui a la creation et au developpement de projets d'entreprise
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Schedule</h6>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Web Design</span>
                                        <h4>UI Best Practices</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>16 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>22 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$120</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Front End</span>
                                        <h4>New Design Trend</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>24 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>30 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$320</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Full Stack</span>
                                        <h4>Web Programming</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>12 Mar 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>48 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$440</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h6>Nous contacter</h6>
                        <h2>N'esitez pas a nous ecrire!</h2>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name" placeholder="Votre Nom..."
                                            autocomplete="on" required>
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
        </div>
    </div>
@endsection
