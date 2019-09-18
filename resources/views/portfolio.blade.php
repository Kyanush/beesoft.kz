@extends('layouts.site')

@section('title',       "Портфолио компании")
@section('description', 'Создание, разработка, интернет-магазина под ключ специалистами нашего агентства гарантирует Вам надежность и вполне привлекательные цены. Вы не останетесь обманутыми и Ваши деньги, не пойдут на')
@section('keywords',    'интернет, магазина, магазин, Алматы, именно, компании, Создание, агентства, агентство, только, магазины, Интернет, магазинов, сайта, разработки, создать, полностью, нашего, современные, нашей')

@section('content')


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1>
                            <span class="turquoise">Портфолио компании</span>
                        </h1>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="/site/images/mobile.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


    <div class="slider-1" id="portfolio">
        <div class="container">
            <div class="row item">
                <div class="col-lg-6">
                    <p>
                    <img class="logo" src="/site/images/otzuv/onepoint.PNG" />
                    </p>
                    <p><a href="https://onepoint.kz/" target="_blank">OnePoint.kz</a> интернет-магазин электроники</p>

                </div>
                <div class="col-lg-6">
                    <img  class="screenshot" src="/site/images/portfolio/onepoint.PNG"/>
                </div>
            </div>

            <div class="row item">
                <div class="col-lg-6">
                    <img  class="screenshot" src="/site/images/portfolio/mihome.PNG"/>
                </div>
                <div class="col-lg-6">
                    <p>
                        <img class="logo" src="/site/images/otzuv/mihome.png" />
                    </p>
                    <p><a href="https://MiHome.kz/" target="_blank">MiHome.kz</a> интернет-магазин электроники</p>
                </div>
            </div>

            <div class="row item">
                <div class="col-lg-6">
                    <p>
                        <img class="logo" src="/site/images/portfolio/shopx-logo.png" />
                    </p>
                    <p><a href="https://ShopX.kz/" target="_blank">ShopX.kz</a> интернет-магазин электроники</p>
                </div>
                <div class="col-lg-6">
                    <img  class="screenshot" src="/site/images/portfolio/shopx.PNG"/>
                </div>
            </div>

            <div class="row item">
                <div class="col-lg-6">
                    <img  class="screenshot" src="/site/images/portfolio/simax.PNG"/>
                </div>
                <div class="col-lg-6">
                    <p>
                        <img class="logo" src="/site/images/portfolio/simax-logo.png" />
                    </p>
                    <p>CRM система</p>
                </div>
            </div>

            <div class="row item">
                <div class="col-lg-6">
                    <p>
                        <img class="logo" src="/site/images/portfolio/ecokids-logo.png" />
                    </p>
                    <p>Интернет-магазин детских товаров в Казахстане <a href="https://EcoKids.kz/" target="_blank">EcoKids.kz</a></p>
                </div>
                <div class="col-lg-6">
                    <img  class="screenshot" src="/site/images/portfolio/ecokids.png"/>
                </div>
            </div>

        </div>
    </div>

@endsection
