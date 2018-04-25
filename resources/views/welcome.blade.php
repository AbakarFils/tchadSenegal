<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>Tchad Dakar</title>

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
    <link  type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/pricing.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <style>
        @foreach($sliders as $key=>$slider)
        .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item
        {
            background: url({{ asset('uploads/slider/'.$slider->image) }});
            background-size: cover;
        }
        @endforeach
    </style>

    <script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.flexslider.min.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(24.909439, 91.833800),
                zoom: 16,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(24.909439, 91.833800),
                title:"Mamma's Kitchen Restaurant"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>
<body data-spy="scroll" data-target="#template-navbar">

<!--== 4. Navigation ==-->
<nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img id="logo" src="images/" class="logo img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Accueil</a></li>
                <li><a href="#pricing">Tourisme</a></li>
                <li><a href="#great-place-to-enjoy">Visa</a></li>
                <li><a href="#indicateurs">Investir Au Tchad</a></li>
                <li><a href="#autre">autres idees</a></li>

                <li><a href="#featured-dish">Formalités</a></li>
                <li><a href="#reserve">reservation</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <!--== Chartes ==-->
        @include('frontend.mdlCharte')
        <!--== Indicateurs ==-->

    </div><!-- /.row -->
</nav>

<!--== 5. Header ==-->
<section id="header-slider" class="owl-carousel">
    @foreach($sliders as $key=>$slider)
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">{{ $slider->title }}</h1>
                    <p class="header-sub-title">{{ $slider->sub_title }}</p>
                </div> <!-- /.header-content -->
            </div>
        </div>
    @endforeach
</section>
<br class="clearfix">
<br class="clearfix">
<br class="clearfix">
<section id="about" class="about">
    <h3>Mr. Salah Mahmoud Ousmane</h3>
    <h4>Consul honoraire du Tchad au Sénégal</h4>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-4 section-bg about-bg dis-table-cell">
                </div>
                <div class="col-xs-12 col-sm-8 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title"> Mot du consul</h2>
                        <p class="section-content-para">
                            Cher(e)s Compatriotes,
                            Chers Ami(e)s du Tchad,
                            Chers internautes<br>
                            Permettez-moi de souhaiter, à chacune et chacun d’entre vous, la bienvenue sur ce site du Consulat du Tchad au Sénégal. Vous pouvez y trouver un certain nombre d’informations touristiques, économiques et culturelles pour organiser votre séjour au Sénégal. En ma qualité de Consul Honoraire, je vous rappelle aussi mon rôle de représentation de notre pays auprès des autorités sénégalaises, des collectivités territoriales et locales. Je suis donc chargé :
                        <br>
                          <ul>
                            <li> d’assurer la protection de nos ressortissants,</li>
                            <li> d’apporter assistance et conseils aux Tchadiens en difficultés ;</li>
                            <li> de la délivrance des actes administratifs ( Visas, Légalisation de signature, Certificat de vie, Certificats de bonne moralité, certificat de nationalité, etc. ),</li>
                            <li>de renseigner les touristes sur la concrétisation de leurs voyages,</li>
                            <li> d’aider les entrepreneurs dans leurs projets d’investissements au Tchad. </li>
                            <li>Depuis sa création en 2009, les relations entre le Tchad et le Sénégal ont connu un développement rapide. </li>
                            <li>La coopération en matière de l’Enseignement Supérieur et de la Recherche s’est intensifiée entre les deux parties, matérialisée par un Accord de Coopération signé le 07 mars 2014 à Dakar, les échanges des chercheurs, enseignant et professeurs se sont multipliés</li>
                        </ul>
                        </p>

                        <p class="section-content-para">
                            Vous trouverez sur ce site des renseignements pratiques sur les formalités et procédures consulaires ainsi que des informations actualisées sur la protection consulaire. Nous voulons apporter notre contribution à travers ces informations à la sauvegarde de leurs droits légitimes conformément à la loi. Le Consulat Honoraire du Tchad au Sénégal continuera à faire progresser les relations d'amitié entre le Tchad et le Sénégal. Je vous souhaite une excellente visite sur notre site. N'hésitez pas à nous faire part de vos remarques et suggestions.
                        </p>
                    </div> <!-- /.section-content -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.wrapper -->
</section> <!-- /#about -->


<!--==  7. Afordable Pricing  ==-->
<section id="pricing" class="pricing">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">
                                <h2 class="pricing-title">Les lieux Touristique du Beau Pays  Le Tchad</h2>
                                <ul id="filter-list" class="clearfix">
                                    <li class="filter" data-filter="all">Tous</li>
                                    <li class="filter" data-filter=".breakfast">Parc de Zakouma</li>
                                    <li class="filter" data-filter=".special">Lac Ounianga</li>
                                    <li class="filter" data-filter=".desert">Desert</li>
                                    <li class="filter" data-filter=".dinner">Guelta D'archei</li>
                                </ul><!-- @end #filter-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul id="menu-pricing" class="menu-price">
                        <li class="item dinner">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/1.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>

                        <li class="item breakfast">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/4.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item desert">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/5.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item breakfast special">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/7.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item breakfast">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/8.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item dinner special">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/archei.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item desert">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/13.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item dinner">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/9.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                        <li class="item desert special">

                            <a href="#">
                                <img src="{{asset('frontend/images/tourisme/16.jpg')}}" class="img-responsive" alt="Food" >
                                <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                </div>
                            </a>

                            <h2 class="white"></h2>
                        </li>
                    </ul>

                    <!-- <div class="text-center">
                            <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                    </div> -->

                </div>
            </div>
        </div>

    </div>
</section>


<!--== 8. Great Place to enjoy ==-->
<section id="great-place-to-enjoy" class="great-place-to-enjoy">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_black.png">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title">Profiter des Lieux Merveilleux</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#great-place-to-enjoy -->



<!--==  9. Our Beer  ==-->
<section id="beer" class="beer">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_color.png">
    <div class="container-fluid">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

            </div>

            <div class="col-xs-12 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <h2 class="section-content-title">Le Tchad</h2>
                    <div class="section-description">
                        <strong>Relief</strong>
                        <br>
                        <p class="section-content-para">
                            Le relief du Tchad est comparable à une cuvette bordée par deux couronnes de montagnes et de plateau : au Nord avec le massif de Tibesti ( 3415 m au volcan de l’Emi Koussi) et à l’Est par le plateau gréseux de l’Ouaddaï (1360m) s’abaissant vers le Sud-Ouest. La zone la plus basse est occupée par le Lac Tchad, réceptacle final de vastes plaines d’inondation des fleuves Chari et Logone.
                        </p>
                        <strong>Histoire</strong>
                        <br>
                        <p class="section-content-para">
                            L’histoire du Tchad remonte au Xe siècle, lorsque les Sao s’établissent au sud du Lac Tchad. Ces Sao, aujourd’hui disparus, sont ls ancêtres de plusieurs populations de la région tchadienne parmi lesquelles les Kotokos, peuple important de chasseurs et de pêcheurs. De nombreuses pièces de terre cuite et de bronze fabriquées par les Sao et représentant des êtres humains et des animaux ont été retrouvées au sud du Lac Tchad.  La fondation  de capitale, N’djaména (ex Fort-Lamy), future capitale du Tchad, et le rétablissement de la paix dans le royaume de Baguirmi et dans le royaume voisin du Ouaddaï mirent un terme aux luttes. Il faut attendre 1913 pour que le Tchad soit entièrement constitué. En 1940, Félix Eboué, gouverneur du Tchad, décide le ralliement du pays à la France libre. C’est du Tchad que pourra partir le Général Leclerc, et les soldats tchadiens seront à Paris pour la Libération. Proclamé République le 28 novembre 1958, le Tchad accède à la souveraineté internationale le 11 août 1960. Depuis cette date, le pays connaît une évolution institutionnelle et politique. Des années de dictature et de parti unique ont empêché l’éclosion de toute culture démocratique et de pluralisme politique.
                        </p>
                        <strong>Geographie</strong>
                        <br>
                        <p class="section-content-para">
                            Trait d’union entre le Maghreb et l’Afrique noire, carrefour des caravanes transsahariennes et berceau des civilisations nomades, ce pays cristallise en lui les contrastes entre le désert du Nord et la savane du Sud, les ascétiques traditions musulmanes et les rites animistes ou chrétiens élaborés, les populations nomades vivant au rythme de leur chameau et au gré de pâturages, et les agriculteurs sédentaires s’employant à domestiquer la terre et à lui donner un visage humain. Le Tchad est un pays d’Afrique centrale qui s’étend sur un territoire d’une superficie de 1.284.000 km2, 560 km2 sont à vocation agricole. Vingtième pays au monde par sa superficie, le Tchad est le cinquième pays le plus grand pays d’Afrique après le Soudan, l’Algérie, la République Démocratique du Congo et la Libye.
                            Climat
                        </p>
                        <strong>Climat</strong>
                        <br>
                        <p class="section-content-para">
                            Le climat est un climat tropical humide au sud (zone soudanienne la plus arrosée et la plus peuplée), offrant un paysage de savane arborée et de forêt plus clairsemée à l’approche des villages en raison de la coupe abusive du bois. Le climat de la zone centrale est de type sahélien caractérisé par une steppe épineuse, fortement marqué par une saison sèche plus longue que la saison des pluies. Le Nord, soumis à un climat saharien désertique aux paysages contrastés, représente la moitié de la superficie du pays. L’harmattan, un vent continental sec et chaud, est porteur de vents en provenance de l’Est et du Nord-Ouest du Sahara. La mousson, équatoriale, humide et fraîche avec des vents du Sud-Ouest, rythme saison sèche et saison des pluies. Le territoire compte 600 000 hectares de forêts classées et 400 000 hectares de parcs nationaux. Les deux parcs les plus importants offrant le plus de variétés d’espèces sont le célèbre parc national de Zakouma dans le Salamat et celui de Manda dans la préfecture de Sarh.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--== 10. Our Breakfast Menu ==-->
<section id="breakfast" class="breakfast">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title">Demande  de visas  </h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#breakfast -->



<!--== 11. Our Bread ==-->
<section id="bread" class="bread">
    @include('frontend.visa')
</section>




<!--== 12. Our Featured Dishes Menu ==-->
<section id="featured-dish" class="featured-dish">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_black.png">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title"> Formalites Disponibles</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#featured-dish -->




<!--== 13. Menu List ==-->
<section id="menu-list" class="menu-list">
    <div class="container">
        <div class="row menu">
            <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                <div class="row">
                    @foreach($formalites as $formalite)
                    <div class="col-md-3 col-sm-6 col-xs-12">

                        <div class="row">
                            <div class="menu-catagory">
                                <h3>{{$formalite->libelle}}</h3>
                            </div>
                        </div>
                        <hr/>
                      @foreach($formalite->MesPieces as $piece)
                        <div class="row">
                            <div class="menu-item">
                                <p class="menu-about">{{$piece->libelle}}</p>
                            </div>
                        </div>

                        @endforeach
                     </div>
                     @endforeach
                </div>
                    <div id="moreMenuContent"></div>
                    <div class="text-center">
                        <a id="loadMenuContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                    </div>
                </div>
            </div>
        </div>

</section>



<!--== 14. Have a look to our dishes ==-->

<section id="have-a-look" class="have-a-look hidden-xs">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_color.png">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="menu-gallery" style="width: 50%; float:left;">
                    <div class="flexslider-container">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="images/menu-gallery/menu1.png" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu2.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu3.png" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu4.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu5.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu6.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu7.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu8.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu9.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu10.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu11.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                    <h2 class="section-title">Avoir une belle Vue</h2>
                </div>


            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.wrapper -->
</section>




<!--== 15. Reserve A Table! ==-->
<section id="reserve" class="reserve">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_black.png">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h3 class="section-title">Faites Une Demande</h3>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#reserve -->



<section class="reservation">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend/images/icons/reserve_color.png') }}">
    <div class="wrapper">
        <div class="container-fluid">
            <div class=" section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="name" id="name"
                                               placeholder="  &#xf007;  Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control reserve-form empty iconified" id="email"  placeholder="  &#xf1d8;  e-mail">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="  &#xf095;  Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  We're listening"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                        <span><i class="fa fa-check-circle-o"></i></span>
                                        Faites votre  reservation
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-2 hidden-sm hidden-xs"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="opening-time">
                            <h3 class="opening-time-title">Heures</h3>
                            <p>Lun à ven: 8:30  - 18:00 </p>

                            <div class="launch">
                                <h4>Matin</h4>
                                <p>Lun à ven: 8:00  - 13:30 </p>
                            </div>

                            <div class="dinner">
                                <h4>Soir</h4>
                                <p>Lun à ven: 14:00  - 18:00 </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<section id="contact" class="contact">
    <div class="container-fluid color-bg">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell">
                <h3 class="section-title">Contacter</h3>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <p>Consulat Tchad à Dakar</p>
                    <p>+221 33 824 50 17</p>
                    <p>mabakar@gmail.com </p>
                </div>
            </div>
        </div>
        <div class="social-media">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="center-block">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twit"></a></li>
                        <li><a href="#" class="g-plus"></a></li>
                        <li><a href="#" class="link"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div id="map-canvas"></div>
    </div>
</div>

<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <form class="contact-form" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <textarea name="message" type="text" class="form-control" id="message" rows="6" required="required" placeholder="  Message"></textarea>
                            <input name="phone" type="text" class="form-control" id="subject" required="required" placeholder="  Phone">
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Envoyer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.mdlIndicateur')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="copyright text-center">
                    <p>
                        &copy; Copyright, 2018 <a href="#">Consulat du Tchad au sénégal</a> Réalisé par <a href="http://gitup/abakarfils.com"  target="_blank">Abakar@fils</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('frontend/js/jquery-2.1.1.min.js') }}"></script>

<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
{!!Toastr::message()!!}

</body>
</html>

