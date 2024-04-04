@extends('partials.main')


@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }


        .heading-text {
            margin-bottom: 2rem;
            font-size: 2rem;
            text-align: center;
        }

        .heading-text span {
            font-weight: 100;
        }

        ul {
            list-style: none;
        }

        /* Responsive image gallery rules begin*/

        .image-gallery {
            text-align: center;
        }

        .image-gallery>li {
            /* fallback */
            display: inline-block;
            width: 350px;
            margin: 0 5px 10px 5px;
            /* end fallback */
            position: relative;
            cursor: pointer;
        }

        @supports (display: flex) {
            .image-gallery {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .image-gallery>li {
                flex-basis: 350px;
                /*width: 350px;*/
                margin: 0;
            }

            .image-gallery::after {
                content: "";
                flex-basis: 350px;
            }
        }

        .image-gallery li img {
            object-fit: cover;
            max-width: 100%;
            height: auto;
            vertical-align: middle;
            border-radius: 5px;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(57, 57, 57, 0.502);
            top: 0;
            left: 0;
            transform: scale(0);
            transition: all 0.2s 0.1s ease-in-out;
            border-radius: 5px;
            /* center overlay text */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* hover */
        .image-gallery li:hover .overlay {
            transform: scale(1);
        }
    </style>

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

    <div class="main-banner-gallery" id="top">
    </div>
    <section style="margin-top: -15px !important" class="section" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Notre gallery</h6>
                        <h2>Toutes nos images exclusives</h2>
                    </div>
                </div>
            </div>
            <ul class="image-gallery">
                <li>
                    <img src="/gallery/1.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>
                <li>
                    <img src="/gallery/2.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>

                <li>
                    <img src="/gallery/3.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>
                <li>
                    <img src="/gallery/4.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>

                <li>
                    <img src="/gallery/5.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>
                <li>
                    <img src="/gallery/9.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>
                <li>
                    <img src="/gallery/6.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>

                <li>
                    <img src="/gallery/7.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>
                <li>
                    <img src="/gallery/8.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>


                <li>
                    <img src="/gallery/10.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>

                <li>
                    <img src="/gallery/11.jpeg" alt="" />
                    <div class="overlay"><span>Image title</span></div>
                </li>
            </ul>
        </div>
    </section>
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
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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

    <script></script>
@endsection
