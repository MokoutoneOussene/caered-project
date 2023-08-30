<div class="header_area" id="header_contents">
    <div class="top_bar style_one">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="top_inner">
                        <div class="left_side common_css">
                            <div class="contntent address">
                                <i class="icon-placeholder"></i>
                                <div class="text">
                                    <small>Adresse</small>
                                    <span>Ouagadougou secteur 30 04 BP 8938 Ouagadougou 04</span>
                                </div>
                            </div>
                            <div class="contntent email">
                                <i class="icon-email"></i>
                                <div class="text">
                                    <small>Email</small>
                                    <a href="mailto:info@caered.org">info@caered.org</a>
                                </div>
                            </div>
                        </div>
                        <div class="right_side common_css">
                            <div class="contntent phone">
                                <i class="icon-phone-call"></i>
                                <div class="text">
                                    <small>Téléphone</small>
                                    <a href="tel:+22625395526">(+226) 25 39 55 26</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header header_default style_one get_sticky_header">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                    <div class="header_logo_box">
                        <a href="#" class="logo navbar-brand">
                            <img src="{{ asset('assets/img/logo_caered.png') }}" alt="Creote Elementor"
                                class="logo_default" style="width: 50%;">
                            <img src="{{ asset('assets/img/logo_caered.png') }}" alt="Creote Elementor"
                                class="logo__sticky" style="width: 50%;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                    <div class="navbar_togglers hamburger_menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="header_content_collapse">
                        <div class="header_menu_box">
                            <div class="navigation_menu">
                                <ul id="myNavbar" class="navbar_nav">
                                    <li class="menu-item  menu-item-has-children position-static">
                                        <a href="{{route('home')}}" class="dropdown-toggle nav-link">
                                            <span>Accueil</span>
                                        </a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item">
                                        <a href="{{route('about')}}" class="dropdown-toggle nav-link"><span>Qui sommes-nous?</span></a>
                                        <ul class="dropdown-menu width_60_percentage">
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-6 m_column">
                                                        <h5>Nos objectifs</h5>
                                                        <div class="list_item_box style_one">
                                                            <div class="card" style="width: 18rem;">
                                                                <img src="{{asset('assets/img/img_0001.jpeg')}}" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        L’objectif général du C.A.E.R.E.D est de contribuer en termes de recherche,
                                                                        d’études et de réflexion à apporter des réponses aux problématiques de
                                                                        déve-loppement.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 m_column">
                                                        <h5>Domaine d’intervention</h5>
                                                        <div class="list_item_box style_one">
                                                            <div class="card" style="width: 18rem;">
                                                                <img src="{{asset('assets/img/img_0002.jpg')}}" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        Domaine de compétences ou services : Sept (07) principaux axes de recherche
                                                                        constituent les domaines d’intervention du C.A.E.R.E.D :
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="{{route('activite')}}" class="dropdown-toggle nav-link">
                                            <span>Activités</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="dropdown-toggle nav-link">
                                            <span>Expertises</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="{{route('instances')}}" class="dropdown-toggle nav-link">
                                            <span>Instances et organes</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="{{route('contact')}}" class="dropdown-toggle nav-link">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_right_content">
                            <ul>
                                <li>
                                    <button type="button" class="search-toggler"><i class="icon-search"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="contact-toggler"><i class="icon-user"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
