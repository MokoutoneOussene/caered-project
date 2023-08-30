@extends('layouts.main')

@section('contant')
    @include('require.caroussel')

    <!---expertise--->
    <section class="expertise mt-3">
        <div class="area_of_expertise">
            <div class="simpleParallax">
                <img src="{{ asset('assets/img/logo_caered.png') }}" class="cover-parallax" alt="image">
            </div>
            <div class="title_and_video">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="video_box text-center">
                                <a href="https://www.youtube.com/watch?v=U0VsCQEAAMM" class="lightbox-image"><i
                                        class="icon-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6">
                            <div class="title_all_box style_one text-end">
                                <div class="title_sections">
                                    <h2>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h2>
                                    <p>
                                        est une association à but non lucratif, non confessionnel, apolitique,
                                        non syndical et sans discrimination aucune.
                                    </p>
                                </div>
                                <div class="theme_btn">
                                    <a href="#" class="theme-btn one">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expertise">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                            <div class="step_number">
                                <h1>01.</h1>
                            </div>
                            <h2 class="title"><a href="#">Bureau exécutif</a>
                            </h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                            <div class="step_number">
                                <h1>02.</h1>
                            </div>
                            <h2 class="title">
                                <a href="#">Conseil scientifique</a>
                            </h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                            <div class="step_number">
                                <h1>03.</h1>
                            </div>
                            <h2 class="title">
                                <a href="#">Commissaires aux comptes</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---expertise-end--->

    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============-->

    <!---contact-us--->
    <div class="container">
        <h2 class="text-center mb-3">Contactez-nous</h2>
        <div class="row">
            <div class="col-lg-5 col-md-12 form_inner">
                <div class="form_content">
                    <form class="contact-form" method="post" action="">
                        <p>
                            <label> Votre nom<br />
                                <input type="text" name="name" value="" size="60"
                                    placeholder="Entrer votre nom" />
                                <br />
                            </label>
                        </p>
                        <p><label> Votre email<br />
                                <input type="email" name="email" value="" size="60"
                                    placeholder="Entrer votre Email" />
                                <br />
                            </label>
                        </p>
                        <p>
                            <label> Objet <br />
                                <input type="text" name="subject" value="" size="60"
                                    placeholder="Entrer l'objet" />
                                <br />
                            </label>
                        </p>
                        <p>
                            <label> Votre message<br />
                                <textarea name="message" cols="60" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                    placeholder="Entrer votre Message"></textarea>
                                <br />
                            </label>
                        </p>
                        <p><input type="submit" value="Envoyer" /></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 about_company_inner">
                <div class="abt_content">
                    <div class="logo text-center mb-4">
                        <img src="{{ asset('assets/img/logo_caered.png') }}" alt="img" class="company_logo_modal w-25">
                    </div>
                    <div class="text">
                        <h2>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h2>
                        <p>
                            est une association à but non lucratif, non confessionnel, apolitique,
                            non syndical et sans discrimination aucune.
                        </p>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
