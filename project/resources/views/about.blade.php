@extends('layouts.main')

@section('contant')
    <!----page header----->

    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <img src="{{ asset('assets/img/about-us.jpeg') }}" alt="bg_image" class="cover-parallax">
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                Qui sommes-nous ?
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Qui sommes-nous ?</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <div id="content" class="site-content ">
        <!---about--->

        <section class="about-section">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 ">
                        <div class="about_content position-relative z_99">
                            <div class="title_all_box style_one text-left  dark_color">
                                <div class="title_sections">
                                    <div class="before_title">Nous sommes</div>
                                </div>
                            </div>

                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                            <div class="description_box">
                                <p class="mb-2">
                                    Le Centre Africain d’Etudes et de Recherche en Economie du Développement
                                    (CAERED) est une association à but non lucratif, non confessionnel, apolitique,
                                    non syndical et sans discri-mination aucune.
                                </p>
                                <p class="mb-2">
                                    Il s’agit d’un organisme indépendant de re-cherche, d’études, d’analyses et de réflexion
                                    et un laboratoire d’idées.
                                </p>
                                <p>
                                    A cet effet, il réunit autour d’une personnalité morale, des personnes physiques et
                                    morales de bonne volonté qui parta-gent sa vision et désirent contribuer, proposer ou
                                    apporter des réponses précises et/ou effectives aux sujets relatifs aux politiques
                                    économiques en Afrique en général et au Burkina Faso en particulier.
                                </p>
                            </div>

                            <!--===============spacing==============-->
                            <div class="pd_bottom_25"></div>
                            <!--===============spacing==============-->

                            <div class="extra_content download_docs dark_color">
                                <div class="download_box_content">
                                    <a href="#" download>Download our latest presentation <i
                                            class="icon-download-symbol"></i>
                                    </a>
                                </div>
                            </div>

                            <!--===============spacing==============-->
                            <div class="pd_bottom_10"></div>
                            <!--===============spacing==============-->

                            <div class="theme_btn_all color_one">
                                <a href="#" target="_blank" rel="nofollow" class="theme-btn five">Contactez nous<i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="image_boxes style_two">
                            <div class="image one">
                                <img src="{{asset('assets/img/img_video.jpg')}}" class="img-fluid" alt="image">
                            </div>
                            <div class="image two">
                                <img src="{{asset('assets/img/img_video2.jpg')}}" class="img-fluid" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_10"></div>
            <!--===============spacing==============-->
        </section>
        <!---about end--->

        <section class="about_us_section" id="about">
            <!--===============spacing==============-->
            <div class="pd_top_10"></div>
            <!--===============spacing==============-->
            <div class="container pd_zero">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="title_all_box style_one dark_color">
                            <div class="title_sections left">
                                <div class="before_title"> Objectifs </div>
                                <p>
                                    L’objectif général du CAERED est de contribuer en termes de recherche, d’études et de
                                    réflexion à apporter des réponses aux problématiques de développement.
                                </p>
                                <p class="mb-2">
                                    De façon spécifique, le CAERED vise à :
                                </p>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                        <div class="process_box style_one dark_color">
                            <div class="process_box_outer">
                                <div class="icon">
                                    <span class=" icon-line-chart"></span>
                                    <div class="number"> 01 </div>
                                </div>
                                <div class="content_box">
                                    <p>
                                        Constituer un cadre de réflexion indépendant pour participer au débat public national
                                        et africain sur les questions de développement économique et social ;
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="process_box style_one dark_color">
                            <div class="process_box_outer">
                                <div class="icon">
                                    <span class=" icon-line-chart"></span>
                                    <div class="number"> 02 </div>
                                </div>
                                <div class="content_box">
                                    <p>
                                        Conduire des recherches et des études sur les politiques économiques mises en oeuvre ;
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="process_box style_one dark_color">
                            <div class="process_box_outer">
                                <div class="icon">
                                    <span class=" icon-line-chart"></span>
                                    <div class="number"> 03 </div>
                                </div>
                                <div class="content_box">
                                    <p>
                                        Promouvoir la recherche, les études, les ré-flexions sur les politiques économiques ;
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="process_box style_one dark_color">
                            <div class="process_box_outer">
                                <div class="icon">
                                    <span class=" icon-line-chart"></span>
                                    <div class="number"> 03 </div>
                                </div>
                                <div class="content_box">
                                    <p>
                                        Renforcer les capacités des administrations pu-bliques centrales et privées sur les politiques économiques et sociales ;
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->

                        <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->
                    </div>
                    <div class="col-xl-6 col-lg-12">

                        <div class="service_wrapper">
                            <div class="move_image_absolute">
                                <img src="{{asset('assets/img/WhatsApp-Image 2023-08.jpeg')}}" class="class-fluid" alt="image" />
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service_box style_one dark_color">
                                        <div class="service_content">
                                            <div class="image ">
                                                <img src="{{asset('assets/images/service-illu-1.png')}}" class="img-fluid"
                                                    alt="Service Image" />
                                            </div>
                                            <div class="content_inner">
                                                <p>
                                                    Sensibiliser et faire le plaidoyer pour une mise oeuvre de politiques économiques favorable au bien-être des populations ;
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!--===============spacing==============-->
                                    <div class="pd_top_100"></div>
                                    <div class="pd_top_100 d_md_none"></div>
                                    <!--===============spacing==============-->
                                    <div class="service_box style_one dark_color last">
                                        <div class="service_content">
                                            <div class="image ">
                                                <img src="assets/images/service-illu-1.png" class="img-fluid"
                                                    alt="Service Image" />
                                            </div>
                                            <div class="content_inner">
                                                <p>
                                                    contribuer et participer aux réflexions sur les problématiques de développement économique et sociale .
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_80"></div>
            <!--===============spacing==============-->
        </section>

        <!---tab---->
        <section class="tab-section bg_op_1" style="background-image:url(assets/images/tab-sec-bg.jpg);">
            <!--===============spacing==============-->
            <div class="pd_top_100"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row">
                    <div class="tabs_all_box  tabs_all_box_start type_one">
                        <div class="tab_over_all_box">
                            <div class="tabs_header clearfix">
                                <ul class="showcase_tabs_btns nav-pills nav clearfix">
                                    <li class="nav-item">
                                        <a class="s_tab_btn nav-link">01. Gouvernance économique des entreprises et
                                            politique</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="s_tab_btn nav-link">02. Environnement énergie et changement
                                            clima-tique</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="s_tab_btn nav-link">03. Sécurité, défense et développement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="s_tab_btn nav-link">04. Capital humain (éducation, santé, pro-tection
                                            sociale, etc.)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="s_tab_btn nav-link">05. Croissance, pauvreté et inégalité</a>
                                    </li>
                                </ul>
                                <div class="toll_free">
                                    <a href="tel:+22625395526"> <i class="icon-phone-call"></i>Appeler pour une
                                        Consultation</a>
                                </div>
                            </div>
                            <div class="s_tab_wrapper">
                                <div class="s_tabs_content">
                                    <div class="s_tab fade active-tab show" id="tabtabone">
                                        <div class="tab_content one"
                                            style="background-image:url(assets/img/about-us.jpg)">
                                            <div class="content_image">

                                                <h2>Domaine d’intervention</h2>

                                                <p>
                                                    Domaine de compétences ou services : <br>
                                                    Sept (07) principaux axes de recherche constituent les domaines
                                                    d’intervention du CAERED :
                                                </p>

                                                <a href="#" rel="nofollow" class="rd_more">Voir plus <i
                                                        class="icon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_90"></div>
            <!--===============spacing==============-->
        </section>
        <!---tab-end--->
        <!---team--->
        <section class="team-section">
            <!--===============spacing==============-->
            <div class="pd_top_80"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title_all_box style_one  dark_color">
                            <div class="title_sections">
                                <div class="before_title"> Membres </div>
                                <h2>Equipe pluri-disciplinaire</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="description_box">
                            <p class="mb-2">
                                Le CAERED est composé de membres actifs, tous bénévoles et de membres d’honneur.
                            </p>
                            <p>
                                Les membres sont des personnes physiques ou morales.
                            </p>
                            <!--===============spacing==============-->
                            <div class="mr_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="team_box style_one">
                            <div class="team_box_outer">
                                <div class="member_image">
                                    <img src="assets/images/team/team-1.jpg" alt="team image" />
                                </div>
                                <div class="about_member">
                                    <div class="share_media">
                                        <ul class="first">
                                            <li class="text">Suivre</li>
                                            <li><i class="fa fa-share-alt"></i></li>
                                        </ul>
                                        <ul>
                                            <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                                            <li><a href="#"> <i class="fa fa-facebook"> </i></a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"> </i></a></li>
                                            <li><a href="#"> <i class="fa fa-skype"> </i></a></li>
                                            <li><a href="#"> <i class="fa fa-instagram"> </i></a></li>
                                        </ul>
                                    </div>
                                    <div class="authour_details">
                                        <span>Director </span>
                                        <h6>Amelia Margaret</h6>
                                        <div class="button_view">
                                            <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View
                                                Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="team_box style_one">
                            <div class="team_box_outer">
                                <div class="member_image">
                                    <img src="assets/images/team/team-2.jpg" alt="team image" />
                                </div>
                                <div class="about_member">
                                    <div class="share_media">
                                        <ul class="first">
                                            <li class="text">Suivre</li>
                                            <li><i class="fa fa-share-alt"></i></li>
                                        </ul>
                                        <ul>
                                            <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                                            <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                                            <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                                            <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="authour_details">
                                        <span>Team Leader </span>
                                        <h6>Andrew Cameron</h6>
                                        <div class="button_view">
                                            <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View
                                                Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="team_box style_one">
                            <div class="team_box_outer">
                                <div class="member_image">
                                    <img src="assets/images/team/team-3.png" alt="team image" />
                                </div>
                                <div class="about_member">
                                    <div class="share_media">
                                        <ul class="first">
                                            <li class="text">Suivre</li>
                                            <li><i class="fa fa-share-alt"></i></li>
                                        </ul>
                                        <ul>
                                            <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                                            <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                                            <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                                            <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="authour_details">
                                        <span>Manager </span>
                                        <h6>Sofia Charlotte</h6>
                                        <div class="button_view">
                                            <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View
                                                Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_60"></div>
            <!--===============spacing==============-->
        </section>
        <!---team-end--->
        <!---newsteller--->
        @include('require.newsletter')
        <!---newsteller end--->
    </div>
@endsection
