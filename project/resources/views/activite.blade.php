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
                                Nos activités
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li class="active">Nos activités</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----page header----->

    <section class="blog-section">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row gutter_35px">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="title_sections three">
                            <div class="before_title">Les activités du CAERED</div>
                            <h4>Nous decouvrir en plus</h4>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_25"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blog_post_section  three_column news_wrapper_grid style_five">
                        <div class="grid_show_case grid_layout clearfix">
                            <div class="grid_box _card">
                                <div class="news_box style_five">
                                    <div class="content_box">
                                        <ul>
                                            <li>
                                                <div class="comments">
                                                    <i class="icon-text"></i>
                                                    <a href="blog-single.html" class="Comments are Closed">Post Comment</a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><span class="fa fa-clock-o"></span>October 6, 2023</a>
                                            </li>
                                        </ul>
                                        <h2 class="title"><a href="blog-single.html" rel="bookmark">Policies &amp;
                                                Procedures for Startups</a></h2>
                                        <p class="short_desc">How well this mistaken ideas off denouncing pleasure &amp;
                                            praisings will give you complete.</p>
                                        <a href="blog-single.html" class="link__go">Read more<i
                                                class="icon-right-arrow-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_box _card">
                                <div class="news_box style_five">
                                    <div class="content_box">
                                        <ul>
                                            <li>
                                                <div class="comments">
                                                    <i class="icon-text"></i>
                                                    <a href="blog-single.html" class="Comments are Closed">Post Comment</a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><span class="fa fa-clock-o"></span>October 8, 2023</a>
                                            </li>
                                        </ul>
                                        <h2 class="title"><a href="blog-single.html" rel="bookmark">Workplace problems in
                                                your business?</a></h2>
                                        <p class="short_desc">Banter! Could “workplace banter” cause problems in your
                                            business? The short answer? Yes.</p>
                                        <a href="blog-single.html" class="link__go">Read more<i
                                                class="icon-right-arrow-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_box _card">
                                <div class="news_box style_five">
                                    <div class="content_box">
                                        <ul>
                                            <li>
                                                <div class="comments">
                                                    <i class="icon-text"></i>
                                                    <a href="blog-single.html" class="Comments are Closed">Post Comment</a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><span class="fa fa-clock-o"></span>October 8, 2023</a>
                                            </li>
                                        </ul>
                                        <h2 class="title"><a href="blog-single.html" rel="bookmark">How to Handle Your Good
                                                Employee</a></h2>
                                        <p class="short_desc">How well this mistaken ideas off denouncing pleasure &amp;
                                            praisings will give you complete.</p>
                                        <a href="#" class="link__go">Read more<i
                                                class="icon-right-arrow-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_60"></div>
        <!--===============spacing==============-->
    </section>

    <!---newsteller--->
    @include('require.newsletter')
    <!---newsteller end--->
@endsection
