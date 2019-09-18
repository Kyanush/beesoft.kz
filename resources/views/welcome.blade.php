@extends('layouts.site')

@section('title',       env('APP_NAME') . " | Разработка мобильных приложений и web сайтов в Алматы")
@section('description', '')
@section('keywords',    '')

@section('content')


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1><span class="turquoise">Разработка мобильных приложений,</span> порталов, интернет магазины и других сложных интернет-проектов.</h1>
                        <p class="p-large">
                            Мы создаем и развиваем только эффективные
                            интернет-магазины, которые действительно продают, используя комплексный подход к вашему бизнесу.
                        </p>
                        <!--
                        <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a>
                        --->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="/site/images/header-teamwork.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


@if(false)
<!-- Services -->
<div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Business Growth Services</h2>
                <p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card">
                    <img class="card-image" src="/site/images/services-icon-1.svg" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">Market Analysis</h4>
                        <p>Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="card-image" src="/site/images/services-icon-2.svg" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">Opportunity Scan</h4>
                        <p>Once the market analysis process is completed our staff will search for opportunities that are in reach</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="card-image" src="/site/images/services-icon-3.svg" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">Action Plan</h4>
                        <p>With all the information in place you will be presented with an action plan that your company needs to follow</p>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->
@endif

<!-- Details 1 -->
<div class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Разработка интернет магазина</h2>
                    <p>

                        Мы создаем и развиваем только эффективные
                        интернет-магазины, которые действительно продают, используя комплексный подход к вашему бизнесу.
                    </p>
                    <a class="btn-solid-reg" href="/internet-magazin">
                        Посмотреть
                    </a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="/site/images/shop-admin/1.PNG" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="/site/images/crm/1.PNG" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Разработка CRM</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Консультирование по CRM системам</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Разработку CRM-системы на заказ</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Разработку мобильного CRM-решения</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Доработку, кастомизацию и редизайн имеющихся у вас CRM-решений</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Интеграцию и внедрение CRM</div>
                        </li>
                    </ul>
                    <!--
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                    --->
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 2 -->

<!-- Details Lightboxes -->
<!-- Details Lightbox 1 -->
<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="/site/images/details-lightbox-1.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Design And Plan</h3>
                <hr>
                <h5>Core feature</h5>
                <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">User administration</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 1 -->

<!-- Details Lightbox 2 -->
<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="/site/images/details-lightbox-2.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Search To Optimize</h3>
                <hr>
                <h5>Core feature</h5>
                <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">User administration</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 2 -->
<!-- end of details lightboxes -->


<!-- Pricing -->
<div id="pricing" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Цены</h2>
                <p class="p-heading p-large">
                    Наша веб-студия предлагает своим клиентам три решения для эффективных продаж в интернете. Решения подходят как начинающим так и опытным предпринимателям.
                </p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Сайты</div>
                        <div class="card-subtitle">Landing page и.д.</div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <span class="currency">тг</span><span class="value">100 000</span>
                            <div class="frequency">от</div>
                        </div>
                        <hr class="cell-divide-hr">
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Удобная админпанель</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Адаптивный дизайн</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">SEO оптимизация</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Техническая поддержка сайта</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#request">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->



                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Интернет магазин</div>
                        <div class="card-subtitle">Интернет магазин</div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <span class="currency">тг</span><span class="value">250 000</span>
                            <div class="frequency">от</div>
                        </div>
                        <hr class="cell-divide-hr">
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Удобная админпанель</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Адаптивный дизайн</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">SEO оптимизация</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Техническая поддержка сайта</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#request">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Разработка мобильных приложений</div>
                        <div class="card-subtitle">Интернет магазин</div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <span class="currency">тг</span><span class="value">300 000</span>
                            <div class="frequency">от</div>
                        </div>
                        <hr class="cell-divide-hr">
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Технология Reack native</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Для Android, IOS</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#request">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Бизнес предложения</div>
                        <div class="card-subtitle">CRM, Бизнес предложения </div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <span class="currency">тг</span><span class="value">500 000</span>
                            <div class="frequency">от</div>
                        </div>
                        <hr class="cell-divide-hr">
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Удобная админпанель</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Адаптивный дизайн</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">SEO оптимизация</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Техническая поддержка сайта</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Технология Laravel, Vue js</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#request">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->

@if(false)
<!-- Request -->
<div id="request" class="form-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Fill The Following Form To Request A Meeting</h2>
                    <p>Evolo is one of the easiest and feature packed marketing automation apps in the market. Discover what it can do for your business organization right away.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Automate your marketing</strong> activities and get results today</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Interact with all your</strong> targeted customers at a personal level</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Convince them to buy</strong> your company's awesome products</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Save precious time</strong> and invest it where you need it the most</div>
                        </li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Request Form -->
                <div class="form-container">
                    <form id="requestForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="rname" name="rname" required>
                            <label class="label-control" for="rname">Full name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="remail" name="remail" required>
                            <label class="label-control" for="remail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                            <label class="label-control" for="rphone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="rselect" required>
                                <option class="select-option" value="" disabled selected>Interested in...</option>
                                <option class="select-option" value="Personal Loan">Starter</option>
                                <option class="select-option" value="Car Loan">Medium</option>
                                <option class="select-option" value="House Loan">Complete</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">REQUEST</button>
                        </div>
                        <div class="form-message">
                            <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of form-container -->
                <!-- end of request form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-1 -->
<!-- end of request -->


<!-- Video -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Check Out The Video</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Video Preview -->
                <div class="image-container">
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                            <img class="img-fluid" src="/site/images/video-frame.svg" alt="alternative">
                            <span class="video-play-button">
                                    <span></span>
                                </span>
                        </a>
                    </div> <!-- end of video-wrapper -->
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

                <p>This video will show you a case study for one of our <strong>Major Customers</strong> and will help you understand why your startup needs Evolo in this highly competitive market</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of video -->
@endif

<!-- Testimonials -->
<div class="slider-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="/site/images/testimonials-2-men-talking.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <h2>Отзывы</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/site/images/otzuv/onepoint.png" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">
                                            Сотрудники проявили высокий профессионализм, оперативную реакцию на все возникшие требования в ходе реализации проекта, отзывчивость, активность в решении поставленных задач.
                                        </p>
                                        <p class="testimonial-author">ТОО "OnePoint.kz" интернет-магазин</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="/site/images/otzuv/mihome.png" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">
                                            Выражаю высокую благодарность Вашему коллективу за профессиональное выполнение своих обязанностей.
                                        </p>
                                        <p class="testimonial-author">ТОО "MiHome.kz" интернет-магазин</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->


                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-2 -->
<!-- end of testimonials -->


<!-- About -->
<div id="about" class="basic-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Команда</h2>
                <!--
                <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets</p>
                -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="/site/images/team-member-2.svg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large">
                        <strong>Жексенкулов Куаныш</strong>
                    </p>
                    <p class="job-title">Технический директор</p>
                    <span class="social-icons">
                            <span class="fa-stack">
                                <a target="_blank" href="https://www.instagram.com/zheksenkulov_kuanysh/">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="/site/images/team-member-2.svg" alt="alternative">
                    </div> <!-- end of image-wrapper -->
                    <p class="p-large"><strong>Жандос Айдосов</strong></p>
                    <p class="job-title">Программист</p>
                    <span class="social-icons" style="display: none">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="/site/images/team-member-2.svg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large"><strong>Александр Петров</strong></p>
                    <p class="job-title">Верстальщик</p>
                    <span class="social-icons" style="display: none">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="/site/images/team-member-4.svg" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large"><strong>Камила Мендес</strong></p>
                    <p class="job-title">Дизайнер</p>
                    <span class="social-icons" style="display: none">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-4 -->
<!-- end of about -->




<!-- Customers -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Технология</h5>

                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/laravel.png" title="Laravel">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/vue.png" title="Vue JS">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/react.png" title="React JS">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/bitrix.jpg" title="1C Bitrix">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/angular.png" title="Angular">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/node.png" title="Node JS">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img width="125" class="img-responsive" src="/site/images/tech/ReactNative.png" title="Node JS">
                                </div>
                            </div>
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of swiper container -->
                </div> <!-- end of slider-container -->
                <!-- end of image slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of customers -->


<!-- Contact -->
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Контакты</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">Время работы: 09.00-19.00</li>
                    <li><i class="fas fa-map-marker-alt"></i>Казахстан, г.Алматы</li>
                    <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:+77089619225">+7 708 961 92 25</a></li>
                    <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:zheksenkulov.kuanysh@gmail.com">zheksenkulov.kuanysh@gmail.com</a></li>
                </ul>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">

            <div class="col-lg-12">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5aba090c514fc53525978abc0c82ee009eed5e8b3b46b36543f3d08ee4d98981&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>

            <!---
            <div class="col-lg-6">
                <div class="map-responsive">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5aba090c514fc53525978abc0c82ee009eed5e8b3b46b36543f3d08ee4d98981&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6">

                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="name" required>
                        <label class="label-control" for="name">name</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="phone" required>
                        <label class="label-control" for="phone">Телефон</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">
                            Отправить
                        </button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>


            </div>
            ---->

        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->

@endsection
