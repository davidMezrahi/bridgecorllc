@extends('layout.main')

@push('title')
    <title>IT Staffing Companies | IT Engineering Services - Bridgecor LLC</title>
@endpush

@push('canonical')
    <link rel="canonical" href="https://bridgecorllc.com/">
@endpush

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .hero-wrapper {
            background-image: linear-gradient(180deg, rgba(0, 0, 0, .90) 0%, rgba(0, 0, 0, .90) 100%), url("https://bridgecorllc.com/wp-content/uploads/2024/01/hero-bg.jpg") !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 10rem 3rem 1.5rem 10rem;
            height: 80dvh;
            position: relative;
        }

        .hero-txt-wrapper * {
            color: #fff;
            font-weight: bold;
            margin: 0;
            text-align: left;
        }

        .hero-txt-wrapper {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            gap: 2rem;
        }

        .hero-txt-wrapper h1 {
            font-family: "Oswald", Sans-serif;
            font-weight: 600;
            font-size: clamp(2rem, -0.8rem + 6.4vw, 3rem);
        }

        .hero-txt-wrapper span {
            color: #32beff;
        }

        .divider {
            width: 100px;
            height: 3px;
            background: #32beff;
        }

        .form-header-txt * {
            color: #fff;
            padding: 0 2rem;
        }

        .form-header-txt {
            background-image: url("https://bridgecorllc.com/wp-content/uploads/2024/01/bg.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            max-width: 100%;
            position: relative;
            z-index: 1;
            padding: 1rem 0;
            padding-bottom: 3rem;
        }

        .form-body {
            background: #181818;
            padding: 2rem;
            position: relative;
            z-index: 0;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            top: -12rem;
        }

        .hero-form-wrpper {
            margin: auto;
            width: 476px;
            height: 726px;
        }

        .hero-form-control {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .hero-form-control input {
            height: 4rem;
            width: 100%;
            margin: .5rem 0;
            background: #e6e6e6;
        }

        .hero-form-control input:focus-visible {
            border: none;
        }

        input#first-name {
            width: 50%;
        }

        input#last-name {
            width: 50%;
        }

        .btn-form button {
            background: #111e7e;
            color: #fff;
            font-weight: bold;
            border: none;
            height: 3rem;
            width: 100%;
            margin-top: 10px;
            cursor: pointer;
        }

        .hero-img {
            position: absolute;
            right: 0;
            bottom: 0;
            max-width: 100%;
            z-index: 100;
        }

        .ceo {
            position: absolute;
            right: 21%;
            bottom: 0;
            color: #fff;
            font-size: clamp(1.75rem, -0.7903rem + 3.2258vw, 3rem);
            font-weight: bold;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img:first-child {
            border-radius: 50%;
        }

        .info-wrapper {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .reviews {
            background-image: url("../../../wp-content/uploads/2024/01/Mask-group-20.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 5rem 0;
            padding-bottom: 10rem;
        }

        .reviews h2 {
            font-family: "Oswald", Sans-serif;
            font-weight: 600;
            text-align: center;
            font-size: clamp(1.625rem, -0.0156rem + 5.4688vw, 3.375rem);
        }

        .tes-wrapper {
            background: #ffffff;
            box-shadow: -20px 20px 40px #d4d4d4,
                20px -20px 40px #ffffff;
            border: 1px solid #333;
            padding: 1rem;
            margin: 5rem 0;
            width: 336px;
        }

        .tes-body::-webkit-scrollbar-track {
            background: #ffffff;
            width: 6px;
        }

        .tes-body::-webkit-scrollbar {
            background: #ffffff;
            width: 6px;
        }

        .tes-body::-webkit-scrollbar-thumb {
            background: #111e7e;
            width: 5px;
            border-radius: 10px;
        }


        .tes-head-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tes-body {
            height: 150px;
            overflow: auto;
            margin: 1rem 0;
        }

        .tes-body p {
            line-height: 1.7rem;
        }

        .text-center {
            text-align: center;
        }

        .video-wrapper {
            background: #e5e5e5;
            padding: 5rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .banner {
            position: absolute;
            top: -8rem;
        }

        .video-wrapper video {
            background: #e5e5e5;
            width: 940px;
            max-width: 100%;
            /* height: auto; */
        }

        .alert-success {
            color: #fff;
            font-size: 20px;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        div#message-2 {
            color: #fff;
            margin-left: 1rem;
            font-weight: 600;
        }

        @media (max-width: 1520px) {
            .hero-img {
                width: 250px;
            }

            .hero-wrapper {
                padding: 3rem 1.5rem;
                height: 100dvh;
            }

            .form-header-txt {
                margin-top: 2rem;
            }
        }

        @media (max-width:1260px) {
            .hero-wrapper {
                height: 100%;
            }
        }

        @media (max-width: 992.98px) {
            .hero-wrapper {
                align-items: center;
                padding: 3rem 1.5rem;
                height: 100%;
            }

            .hero-img {
                width: 150px;
            }

            .ceo {
                right: 40%;
            }

            .form-header-txt {
                margin-top: 2rem;
            }


            .hero-wrapper {
                height: 100%;
            }

            .rev-img img {
                width: 150px;
            }

        }
    </style>
@endpush

@section('main-section')
    <div id="tm-main" class="tm-main uk-section uk-section-default" uk-height-viewport="expand: true">

        <section class="hero-wrapper">
            <img src="{{ asset('/wp-content/uploads/2024/01/chacha.png') }}" alt="hero-img" class="hero-img">
            <h2 class="ceo">Steven Thompson <br /> CEO Bridgecor LLC</h2>
            <div class="hero-txt-wrapper">
                <h1> <span>Find Your Dream Candidate</span> <br />
                    Build Your Dream Team</h1>
                <h2>Bridgecor LLC</h2>
                <div class="divider"></div>
                <h4>Empowering careers and businesses</h4>
                <h5>Discover exceptional talent for your company or <br /> land your ideal job with our seamless platform.
                    <br>
                    Join us
                    and redefine success together!
                </h5>

                <div class="rev-img">
                    <a href="https://www.facebook.com/Bridgecorllc-115061103954266" target="_blank"><img
                            src="{{ asset('/wp-content/uploads/2024/01/fb-new2.png') }}" alt="image"
                            style="margin:1rem 0;"></a>
                    <a href="#"><img src="{{ asset('/wp-content/uploads/2024/01/google-new2.png') }}"
                            alt="image"></a>
                </div>
            </div>
            <div class="hero-form-wrpper">
                <form method="POST" id="contact-form">
                    @csrf
                    <div class="form-header-txt">
                        <h3>Ready to take your career or business to new heights?</h3>
                        <p>Let's connect! Reach out to BridgecorLLC today and let us be your bridge to success. We're here
                            to help you thrive in the ever-evolving world of work.</p>
                    </div>

                    <div class="alert-success uk-hidden" id="message-3"></div>

                    <div class="form-body">
                        <div class="hero-form-control">
                            <input type="text" id="name" name="name" placeholder="&nbsp;&nbsp;Full Name">
                        </div>
                        <div class="hero-form-control">
                            <input type="email" id="email" name="email" placeholder="&nbsp;&nbsp;Email Address">
                        </div>
                        <div class="hero-form-control">
                            <input type="text" id="phone" name="phone" placeholder="&nbsp;&nbsp;Phone Number">
                        </div>
                        <div class="btn-form">
                            <button type="submit" id="connectBtn">CONNECT WITH US</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="reviews">
            <h2 class="text-center">
                OUR REVIEWS
            </h2>
            <div class="divider text-center" style="margin: auto;"></div>
            <p class="text-center" style="display:flex; align-items:center; justify-content:center; gap:.5rem;">EXCELLENT
                <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image" max-width="100%"> REVIEWS ON
                <img src="{{ asset('/wp-content/uploads/2024/01/google-1.webp') }}" alt="image" width="100px">
            </p>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="tes-wrapper">
                            <div class="tes-head-wrapper">
                                <div class="info-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/testimonial.png') }}" alt="image"
                                        max-width="100%">
                                    <div>
                                        <div class="tes-name">Luis Zaragoza</div>
                                        <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image"
                                            max-width="100%">
                                    </div>
                                </div>
                                <div class="rev-google-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/rev-google.webp') }}" alt="image">
                                </div>
                            </div>

                            <div class="tes-body">
                                <p>Steven was a delight to work with at Bridgecor LLC. He assisted me in obtaining a new
                                    employment that more than doubles my salary and provides me with a lot more balanced
                                    work life. Provided sound advice throughout the application process, which contributed
                                    to my eventual success. Steven was exceptionally helpful, and I cannot recommend him or
                                    Bridgecor enough!</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tes-wrapper">
                            <div class="tes-head-wrapper">
                                <div class="info-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/testimonial2.jpeg') }}" alt="image"
                                        width="40px">
                                    <div>
                                        <div class="tes-name">Dr James L Moss</div>
                                        <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image"
                                            max-width="100%">
                                    </div>
                                </div>
                                <div class="rev-google-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/rev-google.webp') }}" alt="image">
                                </div>
                            </div>

                            <div class="tes-body">
                                <p>I have worked with the recruiters at Bridgecor for some time and they continuously show
                                    an aptitude for aesthetics and understanding of clients that makes them stand out.
                                    Paying close attention to what is being said during consultation sessions and have been
                                    spot on capturing the essence of our requests. In other words, not just providing
                                    candidate that looks good on paper but capturing the candidate that has been a good fit
                                    for our culture and organization. Bridgecor has serviced us well.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tes-wrapper">
                            <div class="tes-head-wrapper">
                                <div class="info-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/testimonial3.png') }}" alt="image"
                                        width="40px">
                                    <div>
                                        <div class="tes-name">Charles Raglin</div>
                                        <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image"
                                            max-width="100%">
                                    </div>
                                </div>
                                <div class="rev-google-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/rev-google.webp') }}" alt="image">
                                </div>
                            </div>

                            <div class="tes-body">
                                <p>Working with Bridgecor LLC has been an absolute game-changer for our business. Their IT
                                    staff augmentation services provided us with top-tier talent that seamlessly integrated
                                    with our team. The professionalism and expertise demonstrated by their consultants have
                                    significantly boosted our project outcomes. Bridgecor LLC's human resource solutions
                                    have also streamlined our hiring processes, saving us time and resources. We couldn't be
                                    happier with the results and highly recommend their services to any organization looking
                                    to enhance their IT capabilities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tes-wrapper">
                            <div class="tes-head-wrapper">
                                <div class="info-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/testimonial4.jpeg') }}"
                                        alt="image" width="40px">
                                    <div>
                                        <div class="tes-name">Prof Geist Ernest Keo</div>
                                        <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image"
                                            max-width="100%">
                                    </div>
                                </div>
                                <div class="rev-google-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/rev-google.webp') }}" alt="image">
                                </div>
                            </div>

                            <div class="tes-body">
                                <p>As a recent graduate, I was feeling overwhelmed by the daunting task of finding a job
                                    that matched my skills and aspirations. That's when I discovered BridgecorLLC. Their
                                    team of experts truly understood my needs and guided me through the entire process with
                                    professionalism and care. Thanks to their tailored job matches, I landed my dream role
                                    at a company that aligns perfectly with my career goals. BridgecorLLC is an invaluable
                                    resource for anyone seeking their next professional opportunity.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tes-wrapper">
                            <div class="tes-head-wrapper">
                                <div class="info-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/testimonial5.jpeg') }}"
                                        alt="image" width="40px">
                                    <div>
                                        <div class="tes-name">Don Kesner</div>
                                        <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image"
                                            max-width="100%">
                                    </div>
                                </div>
                                <div class="rev-google-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/rev-google.webp') }}" alt="image">
                                </div>
                            </div>

                            <div class="tes-body">
                                <p>Changing careers can be a nerve-wracking experience, but BridgecorLLC made the transition
                                    seamless for me. Their in-depth industry knowledge and extensive network of employers
                                    allowed them to present me with opportunities that I would never have found on my own.
                                    The team at BridgecorLLC took the time to understand my unique background and
                                    aspirations, resulting in a perfect job match that has reignited my passion for work. I
                                    can't thank them enough for their dedication and expertise.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tes-wrapper">
                            <div class="tes-head-wrapper">
                                <div class="info-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/testimonial6.jpeg') }}"
                                        alt="image" width="40px">
                                    <div>
                                        <div class="tes-name">Lorraine Lal-Smith</div>
                                        <img src="{{ asset('/wp-content/uploads/2024/01/star.webp') }}" alt="image"
                                            max-width="100%">
                                    </div>
                                </div>
                                <div class="rev-google-wrapper">
                                    <img src="{{ asset('/wp-content/uploads/2024/01/rev-google.webp') }}" alt="image">
                                </div>
                            </div>

                            <div class="tes-body">
                                <p>As an executive seeking a new challenge, I had high expectations when it came to finding
                                    a reputable job placement service. BridgecorLLC exceeded those expectations at every
                                    turn. Their commitment to discretion and confidentiality, coupled with their deep
                                    understanding of the executive job market, made the entire process effortless. The
                                    opportunities they presented were tailored to my specific goals and aspirations, and
                                    their guidance throughout the negotiation process was invaluable. I cannot recommend
                                    BridgecorLLC highly enough to any professional seeking their next career move.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section>

        <section class="video-wrapper">

            <div class="banner">
                <img src="{{ asset('/wp-content/uploads/2024/01/banner.png') }}" alt="banner">
            </div>

            <video controls poster="{{ asset('/wp-content/uploads/2024/01/poster.jpg') }}">
                <source src="{{ asset('/wp-content/uploads/2024/01/hero.mp4') }}" type="video/mp4">
            </video>
        </section>

        <div class="uk-container">

            <div class="uk-grid" uk-grid="">
                <div class="uk-width-expand@m">


                    <div data-elementor-type="wp-page" data-elementor-id="7048" class="elementor elementor-7048"
                        data-elementor-settings="{&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                        data-elementor-post-type="page">

                        {{-- <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-71de28c elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-height-default elementor-section-items-middle"
                            style="height: 100%;" data-id="71de28c" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4684f4a"
                                    data-id="4684f4a" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3f27b48 elementor-widget__width-inherit ob-has-background-overlay elementor-widget elementor-widget-video"
                                            data-id="3f27b48" data-element_type="widget"
                                            data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="video.default">
                                            <div class="elementor-widget-container">
                                                <div class="e-hosted-video elementor-wrapper elementor-open-inline">
                                                    <video class="elementor-video"
                                                        src="wp-content/uploads/2024/01/a16edf24-3fb8-4f11-af76-d5b92ef6cf212.mp4"
                                                        autoplay loop muted controlslist="nodownload"></video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> --}}

                        <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-2766d93 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                            data-id="2766d93" data-element_type="section" id="home-2"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-04f7bb0"
                                    data-id="04f7bb0" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-130c402 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="130c402" data-element_type="section"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-efce674"
                                                    data-id="efce674" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-a355941 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-text-editor"
                                                            data-id="a355941" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:1000,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_postman_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>At Bridgecor LLC, we understand that the heart of
                                                                    every successful organization lies in its
                                                                    people. As your dedicated talent acquisition
                                                                    firm, we are committed to being your exclusive
                                                                    partner in discovering highly qualified,
                                                                    dependable, and diverse talent. Our mission is
                                                                    simple: to provide you with recruitment
                                                                    solutions that not only meet but exceed your
                                                                    expectations, ensuring 100% customer
                                                                    satisfaction.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d0f4aa5"
                                                    data-id="d0f4aa5" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-f96be4a ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                                            data-id="f96be4a" data-element_type="widget"
                                                            data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    We’re a Talent Acquisition and IT Recruitment
                                                                    Firm</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-6c62434 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="6c62434" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#we-telent') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-704f096 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="704f096" data-element_type="section" id="we-telent"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-01359ee"
                                                    data-id="01359ee" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-a0c46d4 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                                            data-id="a0c46d4" data-element_type="widget"
                                                            data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Discovering Top Talent, Swiftly and Effectively
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f30b2a9"
                                                    data-id="f30b2a9" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-67b00f3 ob-harakiri-inherit elementor-invisible ob-has-background-overlay elementor-widget elementor-widget-text-editor"
                                                            data-id="67b00f3" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:1000,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_postman_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>At the heart of Bridgecor LLC is our commitment
                                                                    to understanding your organization&#8217;s
                                                                    aspirations and challenges. We believe in going
                                                                    beyond conventional recruitment, offering
                                                                    personalized permanent placement solutions that
                                                                    empower you to thrive in today&#8217;s
                                                                    competitive landscape.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-54dd7b3 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="54dd7b3" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#we-telent-') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-a13cd5a elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                            data-id="a13cd5a" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ba69682"
                                    data-id="ba69682" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-856d3f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="856d3f3" data-element_type="section" id="we-telent-"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-89c7eb8"
                                                    data-id="89c7eb8" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-65d7801 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-text-editor"
                                                            data-id="65d7801" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:3000,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_postman_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Bridgecor is your one-stop solution for all your
                                                                    staffing needs, spanning various industries.
                                                                    From IT and cybersecurity to design, web
                                                                    development, database administration, and
                                                                    software engineering, we have a vast pool of
                                                                    skilled professionals ready to contribute to
                                                                    your success.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a8e0ea"
                                                    data-id="6a8e0ea" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-7cdee76 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                                            data-id="7cdee76" data-element_type="widget"
                                                            data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Diverse Expertise Across Industries
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-2e918bb ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="2e918bb" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#home-3') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-ae42307 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="ae42307" data-element_type="section" id="home-3"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-66404be"
                                                    data-id="66404be" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-bec6e21 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                                            data-id="bec6e21" data-element_type="widget"
                                                            data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    Unlocking Potential Across Industries</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5506853"
                                                    data-id="5506853" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-30e2473 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-text-editor"
                                                            data-id="30e2473" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:3000,&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_postman_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>With our exclusive talent acquisition services,
                                                                    we unlock potential across a spectrum of
                                                                    industries. Whether you&#8217;re in finance,
                                                                    healthcare, manufacturing, or technology,
                                                                    Bridgecor ensures that your team is composed of
                                                                    the best and brightest minds. We&#8217;re not
                                                                    just recruiters; we&#8217;re partners invested
                                                                    in your success.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-886b6fd ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="886b6fd" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#home-four') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-552375b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="552375b" data-element_type="section" id="home-four"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5b0c5b5"
                                                    data-id="5b0c5b5" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-4ecc080 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="4ecc080" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    National Network </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    National Network </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Targeted specialized searches of
                                                                                    candidate for your selection
                                                                                    using our time-tested system and
                                                                                    experienced consultants. Our
                                                                                    Staff Augmentation Services
                                                                                    enhance this process, ensuring
                                                                                    that you have access to a pool
                                                                                    of qualified candidate
                                                                                    perfectly suited to your
                                                                                    requirements.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-51abf17 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="51abf17" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Personalized Services </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Personalized Services </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Every candidate receives a
                                                                                    customized individual action
                                                                                    plan and personalized
                                                                                    introductions to prospective
                                                                                    employers. </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ae6bd7"
                                                    data-id="1ae6bd7" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-33b4782 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="33b4782" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Career Placement </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Career Placement </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    candidate are our best asset
                                                                                    and our goal is to place them in
                                                                                    positions aimed to elevate their
                                                                                    careers and lifestyles.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-644d9bf elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="644d9bf" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Corroborating Services </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Corroborating Services </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Combined comprehensive research
                                                                                    and years of experience and
                                                                                    knowledge we offer both
                                                                                    organizations and job-seekers
                                                                                    unparalleled services.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0796c21"
                                                    data-id="0796c21" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-22d25b8 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="22d25b8" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Customer Excellence </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Customer Excellence </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Consistently delivering
                                                                                    excellent customer services –
                                                                                    delivering a stronger, more
                                                                                    cohesive, and higher-performing
                                                                                    employee search experience.


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1152e67 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="1152e67" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Engineering Diversified </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Engineering Diversified </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Bridgecor provides IT
                                                                                    Engineering Services through
                                                                                    candidate sourcing, always
                                                                                    prioritizing diversity in
                                                                                    engineering. Our objective is to
                                                                                    link skilled minority candidate
                                                                                    with top-tier companies and
                                                                                    organizations.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-5fbb205 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="5fbb205" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#home-5') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-14fcf9a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="14fcf9a" data-element_type="section" id="home-5"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4734803"
                                    data-id="4734803" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2eb1bb9 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-text-editor"
                                            data-id="2eb1bb9" data-element_type="widget"
                                            data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_postman_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p><strong> Our goal is to be your exclusive talent acquisition firm
                                                        by discovering highly-qualified, dependable and diverse
                                                        talent quickly, and with 100% customer
                                                        satisfaction.  </strong></p>
                                            </div>
                                        </div>
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-933d7b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="933d7b6" data-element_type="section"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-625785d"
                                                    data-id="625785d" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-39c97f9 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="39c97f9" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Experience </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Experience </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    With over 75 years of combined
                                                                                    experience of recruiting, human
                                                                                    resource, and leadership
                                                                                    counseling, Bridgecor provides
                                                                                    its clients and candidate with
                                                                                    the professional services and
                                                                                    solutions they should expect and
                                                                                    deserve from a technical search
                                                                                    firm.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-01a49f7"
                                                    data-id="01a49f7" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-784127f elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="784127f" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Bridging </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Bridging </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    We are doing more than helping
                                                                                    you find a job – We’re bridging
                                                                                    your expert skills to covet
                                                                                    positions where you will thrive.


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2160375"
                                                    data-id="2160375" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-567c510 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="567c510" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Diversity </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Diversity </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Diversity recruitment is vital
                                                                                    for organizations that want to
                                                                                    compete to have a strong
                                                                                    talented workforce in today’s
                                                                                    market. Our organization thrives
                                                                                    on the reliability in conducting
                                                                                    expeditious searches and
                                                                                    providing recruitment solutions
                                                                                    that exceeds the needs of your
                                                                                    business.



                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-95db10d ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="95db10d" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#home-six') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-84eb9a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="84eb9a8" data-element_type="section" id="home-six"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55c4b88"
                                                    data-id="55c4b88" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-2cf3704 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="2cf3704" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Recruiting Services </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Recruiting Services </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Connect with top talent that can
                                                                                    transform your business. Our
                                                                                    discipline-specific recruiters
                                                                                    use their experience and proven
                                                                                    strategies to find qualified
                                                                                    candidate and help managers
                                                                                    make the right hiring decisions.
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d69d2ef elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="d69d2ef" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Resume Services </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Resume Services </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Recruiters Rank Professionally
                                                                                    Written Resume 60% Higher Than
                                                                                    Those Written By Job Seekers
                                                                                    Alone. (Source: Forbes) So, We
                                                                                    Offer Several Options to Meet
                                                                                    the Needs of Job Seekers – From
                                                                                    Writing the Recruiter-Friendly
                                                                                    Resume to Review the
                                                                                    Professional, Executive, or
                                                                                    Entry Level Resumes.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6c2e328"
                                                    data-id="6c2e328" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-c23ac55 elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="c23ac55" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    HR Consulting </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    HR Consulting </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Gain a competitive advantage by
                                                                                    fine-tuning your organization’s
                                                                                    compensation, culture and
                                                                                    leadership approach. Our
                                                                                    services help you ensure that
                                                                                    your people practices align with
                                                                                    your business goals for maximum
                                                                                    success. </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-95b341b elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="95b341b" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Career Advancement </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Career Advancement </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    If you are an experienced
                                                                                    professional, Bridgecor can help
                                                                                    you find a position where your
                                                                                    skills are valued.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f13ddf2"
                                                    data-id="f13ddf2" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-bb7836c elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="bb7836c" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Talent Acquisition </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Talent Acquisition </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    Manage the entire talent
                                                                                    acquisition lifecycle — from
                                                                                    outreach to onboarding. Experts
                                                                                    in assessing your company’s
                                                                                    recruitment needs and creating
                                                                                    effective recruitment strategies
                                                                                    and processes.

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-36cc4bc elementor-flip-box--effect-zoom-out ob-has-background-overlay elementor-widget elementor-widget-flip-box"
                                                            data-id="36cc4bc" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="flip-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-flip-box" tabindex="0">
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__front">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">

                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Career Counseling </h3>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-flip-box__layer elementor-flip-box__back">
                                                                        <div class="elementor-flip-box__layer__overlay">
                                                                            <div class="elementor-flip-box__layer__inner">
                                                                                <h3
                                                                                    class="elementor-flip-box__layer__title">
                                                                                    Career Counseling </h3>

                                                                                <div
                                                                                    class="elementor-flip-box__layer__description">
                                                                                    At Bridgecor, We Are Experts in
                                                                                    Assisting Job-Seekers Find New
                                                                                    Careers Nationwide. Our Resume
                                                                                    Services and Career Counseling
                                                                                    for Job-Seekers Land More
                                                                                    Interviews and Get Hired Faster!

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-1f57a4e ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="1f57a4e" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ url('#home-8') }}">
                                                    <img decoding="async" width="55" height="29"
                                                        src="{{ asset('/wp-content/uploads/2024/01/big-arrow-down.svg') }}"
                                                        class="attachment-large size-large wp-image-7248" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-8a9b005 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="8a9b005" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-924d42f"
                                    data-id="924d42f" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-3f29392 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="3f29392" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3c2f3fe"
                                    data-id="3c2f3fe" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9a04c71 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="9a04c71" data-element_type="section" id="home-8"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;laptop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bbba458"
                                    data-id="bbba458" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section
                                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-a6da194 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="a6da194" data-element_type="section" id="home-seven"
                                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7a1bb8f"
                                                    data-id="7a1bb8f" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-ef51ab2 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                                            data-id="ef51ab2" data-element_type="widget"
                                                            data-settings="{&quot;_ob_use_harakiri&quot;:&quot;yes&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_harakiri_text_clip&quot;:&quot;none&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    NEWSLETTER</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-184f52a"
                                                    data-id="184f52a" data-element_type="column"
                                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;,&quot;premium_particles_zindex&quot;:0,&quot;premium_particles_responsive&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-31dcb8b ob-has-background-overlay elementor-widget elementor-widget-shortcode"
                                                            data-id="31dcb8b" data-element_type="widget"
                                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                            data-widget_type="shortcode.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-shortcode">
                                                                    <div class="newsletter-center">
                                                                        <div class="wpforms-container wpforms-container-full subscriber"
                                                                            id="wpforms-4896">
                                                                            <form id="wpforms-form-4896"
                                                                                class="wpforms-validate wpforms-form js-form-newsletter"
                                                                                method="post"
                                                                                enctype="multipart/form-data"
                                                                                action="{{ route('newsletter.subscribe') }}">
                                                                                @csrf
                                                                                <div class="wpforms-field-container">
                                                                                    <div id="wpforms-4896-field_2-container"
                                                                                        class="wpforms-field wpforms-field-name"
                                                                                        data-field-id="2">
                                                                                        <input type="text"
                                                                                            id="wpforms-4896-field_2"
                                                                                            class="wpforms-field-medium"
                                                                                            name="wpforms[fields][2]"
                                                                                            placeholder="Your Name">
                                                                                    </div>
                                                                                    <div id="wpforms-4896-field_1-container"
                                                                                        class="wpforms-field wpforms-field-email"
                                                                                        data-field-id="1">
                                                                                        <input type="email"
                                                                                            id="wpforms-4896-field_1"
                                                                                            class="wpforms-field-medium"
                                                                                            name="wpforms[fields][1]"
                                                                                            placeholder="Your e-mail">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="wpforms-field wpforms-field-hp">
                                                                                    <label for="wpforms-4896-field-hp"
                                                                                        class="wpforms-field-label">Comment</label>
                                                                                    <input type="text"
                                                                                        name="wpforms[hp]"
                                                                                        id="wpforms-4896-field-hp"
                                                                                        class="wpforms-field-medium">
                                                                                </div>
                                                                                <div class="wpforms-submit-container">
                                                                                    <input type="hidden"
                                                                                        name="wpforms[id]" value="4896">
                                                                                    <input type="hidden"
                                                                                        name="wpforms[author]"
                                                                                        value="1">
                                                                                    <input type="hidden"
                                                                                        name="wpforms[post_id]"
                                                                                        value="7048">
                                                                                    <button type="button"
                                                                                        name="wpforms[submit]"
                                                                                        class="wpforms-submit"
                                                                                        id="wpforms-submit-4896"
                                                                                        value="wpforms-submit"
                                                                                        aria-live="assertive"
                                                                                        data-alt-text="Subscribing..."
                                                                                        data-submit-text="Subscribe">Subscribe</button>
                                                                                </div>
                                                                            </form>
                                                                            <div class="message uk-margin uk-hidden"
                                                                                id="message-2"></div>

                                                                        </div> <!-- .wpforms-container -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>


            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contact-form');
            const form = document.querySelector('.js-form-newsletter');
            const emailInput = document.getElementById('wpforms-4896-field_1');
            const nameInput = document.getElementById('wpforms-4896-field_2');
            const messageElement = document.getElementById('message-2');
            const connectElement = document.getElementById('message-3');
            const connectBtn = document.getElementById('connectBtn');
            const subscribeBtn = document.getElementById('wpforms-submit-4896');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();

                if (!email) {
                    showMessage('error', 'Please enter an email address.');
                    return;
                } else if (!name) {
                    showMessage('error', 'Please enter a Name.');
                } else if (!phone) {
                    showMessage('error', 'Please enter a Phone Number.');
                }


                connectBtn.style = "opacity: .5";
                connectBtn.disabled = true;
                connectBtn.textContent = "Sending...";

                axios.post('/contact/submit', {
                        name: name,
                        email: email,
                        phone: phone
                    })
                    .then(function(response) {
                        if (response.data.success) {
                            messageShow('success', response.data.message);

                            connectBtn.disabled = false;
                            connectBtn.style = "opacity: 1";
                            connectBtn.textContent = "CONNECT WITH US";
                            contactForm.reset();
                        } else {
                            messageShow('error', response.data.message);
                        }
                    })
                    .catch(function(error) {
                        messageShow('error', 'Failed to send. Please try again later.');
                    });
            });

            subscribeBtn.addEventListener('click', function() {
                const email = emailInput.value.trim();
                const name = nameInput.value.trim();

                if (!email) {
                    showMessage('error', 'Please enter an email address.');
                    return;
                }

                axios.post('/subscribe', {
                        email: email,
                        name: name
                    })
                    .then(function(response) {
                        if (response.data.success) {
                            showMessage('success', response.data.message);
                        } else {
                            showMessage('error', response.data.message);
                        }
                    })
                    .catch(function(error) {
                        showMessage('error', 'Failed to subscribe. Please try again later.');
                    });
            });

            function messageShow(type, message) {
                connectElement.textContent = message;
                connectElement.classList.remove('uk-hidden');
            }

            function showMessage(type, message) {
                messageElement.textContent = message;
                messageElement.classList.remove('uk-hidden');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            centeredSlides: true,
            spaceBetween: 30,
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>
@endsection
