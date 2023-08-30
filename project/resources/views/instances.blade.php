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
                                Instances & Organes
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Instances et organes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <div id="content" class="site-content ">

        <section class="project_all filt_style_two filter_enabled">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fliter_group" style="text-align:center!important;">
                            <ul class="project_filter dark clearfix">
                                <li data-filter="*" class="current">Voir tous</li>
                                <li data-filter=".project_category-coaching" class="img-fluid">Le bureau exécutif</li>
                                <li data-filter=".project_category-human-resources" class="img-fluid">Le conseil
                                    scientifique et d’orientation</li>
                                <li data-filter=".project_category-leadership" class="img-fluid">Les commissaires aux
                                    comptes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project_container clearfix">
                    <div class="row clearfix">
                        <div
                            class="project-wrapper grid-item col-lg-12 col-md-12 col-sm-12 col-xs-12 project_category-coaching">
                            <div class="project_box style_three clearfix">
                                <div class="content_inner">
                                    <div><a href="#">Le bureau exécutif</a></div>
                                    <p class="short_desc">
                                        Le bureau exécutif est l’organe d’exécution et d’administration du CAERED
                                    </p>
                                    <p class="mt-2">
                                        Il comprend quatorze (14) membres, élus en Assemblée Générale pour un
                                        mandat de cinq (05) ans, renouvelable une seule fois.
                                    </p>
                                    <a href="#" class="read_more"> Voir plus <span
                                            class="icon-right-arrow-long"></span></a>
                                    <div class="share_me">
                                        <div class="share_socail">
                                            <div class="title">Suivre</div>
                                            <button class="m_icon" title="facebook" data-sharer="facebook"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-facebook"></i>
                                            </button>
                                            <button class="m_icon" title="twitter" data-sharer="twitter"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                            <button class="m_icon" title="whatsapp" data-sharer="whatsapp"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-whatsapp"></i>
                                            </button>
                                            <button class="m_icon" title="telegram" data-sharer="telegram"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/" data-to="+44555-03564">
                                                <i class="fa fa-telegram"></i>
                                            </button>
                                            <button class="m_icon" title="skype" data-sharer="skype"
                                                data-url="https://caered.org/"
                                                data-title="Complex Dismissal for a Small Company">
                                                <i class="fa fa-skype"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img loading="lazy" width="370" height="247"
                                        src="{{ asset('assets/img/WhatsApp Image 2023-08-2fg.jpeg') }}" class="wp-post-image"
                                        alt="img">
                                    <a href="project-details.html" class="pro-link"></a>
                                    <div class="overlay"> </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="project-wrapper grid-item col-lg-12 col-md-12 col-sm-12 col-xs-12  project_category-human-resources">
                            <div class="project_box style_three clearfix">
                                <div class="content_inner">
                                    <div><a href="#">Le conseil scientifique et d’orientation</a></div>
                                    <p class="short_desc">
                                        Le C.S.O est composé de quatre (04) membres. Il est présidé par un Président élu en
                                        leur sein.
                                    </p>
                                    <p>
                                        Les membres du C.S.O sont naturellement cooptés par le CAERED
                                    </p>
                                    <p>
                                        Les membres du C.S.O sont élus pour un mandat de cinq (05) ans, renouvelable une
                                        seule fois.
                                    </p>
                                    <a href="#" class="read_more"> Voir plus <span
                                            class="icon-right-arrow-long"></span></a>
                                    <div class="share_me">
                                        <div class="share_socail">
                                            <div class="title">Suivre</div>
                                            <button class="m_icon" title="facebook" data-sharer="facebook"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-facebook"></i>
                                            </button>
                                            <button class="m_icon" title="twitter" data-sharer="twitter"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                            <button class="m_icon" title="whatsapp" data-sharer="whatsapp"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-whatsapp"></i>
                                            </button>
                                            <button class="m_icon" title="telegram" data-sharer="telegram"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/" data-to="+44555-03564">
                                                <i class="fa fa-telegram"></i>
                                            </button>
                                            <button class="m_icon" title="skype" data-sharer="skype"
                                                data-url="https://caered.org/"
                                                data-title="Complex Dismissal for a Small Company">
                                                <i class="fa fa-skype"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img width="370" height="247" src="{{asset('assets/img/Image23fdctg.jpg')}}"
                                        class="wp-post-image" alt="img">
                                    <a href="#" class="pro-link"></a>
                                    <div class="overlay"> </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="project-wrapper grid-item    col-lg-12 col-md-12 col-sm-12 col-xs-12  project_category-leadership">
                            <div class="project_box style_three clearfix">
                                <div class="content_inner">
                                    <div><a href="#">Les commissaires aux comptes</a></div>
                                    <p class="short_desc">
                                        Le contrôle de la gestion du C.A.E.R.E.D est confié à deux (02) commissaire
                                        aux comptes, désignés, à cet effet, par l’Assemblée Générale pour un
                                        mandat de cinq (05) ans, renouvelable une seule fois.
                                    </p>
                                    <p>
                                        Les commissaires aux comptes assurent la vérification et le contrôle annuels des
                                        comptes.
                                    </p>
                                    <a href="project-details.html" class="read_more"> Voir plus <span
                                            class="icon-right-arrow-long"></span></a>
                                    <div class="share_me">
                                        <div class="share_socail">
                                            <div class="title">Suivre</div>
                                            <button class="m_icon" title="facebook" data-sharer="facebook"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-facebook"></i>
                                            </button>
                                            <button class="m_icon" title="twitter" data-sharer="twitter"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                            <button class="m_icon" title="whatsapp" data-sharer="whatsapp"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/">
                                                <i class="fa fa-whatsapp"></i>
                                            </button>
                                            <button class="m_icon" title="telegram" data-sharer="telegram"
                                                data-title="Complex Dismissal for a Small Company"
                                                data-url="https://caered.org/" data-to="+44555-03564">
                                                <i class="fa fa-telegram"></i>
                                            </button>
                                            <button class="m_icon" title="skype" data-sharer="skype"
                                                data-url="https://caered.org/"
                                                data-title="Complex Dismissal for a Small Company">
                                                <i class="fa fa-skype"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img width="370" height="246" src="{{asset('assets/img/2023-08-23 àtfg 15.00.49.jpg')}}"
                                        class="wp-post-image" alt="img">
                                    <a href="project-details.html" class="pro-link"></a>
                                    <div class="overlay"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
        </section>
        <!---newsteller--->
        @include('require.newsletter')
        <!---newsteller end--->
    </div>
@endsection
