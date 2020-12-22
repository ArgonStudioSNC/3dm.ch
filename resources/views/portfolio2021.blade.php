@extends('layouts.website')

@section('content')

<div id='splashscreen'>
    <div class="my-flex-logo d-flex justify-content-center align-items-center d-none">
        <img src="{{ asset('/media/branding/3dm-logo-grand.svg') }}" alt="[Logo de 3DM]">
    </div>
</div>

@include('shared.navigation', ['text' => 'En savoir plus', 'route' => route('www.about')])

<div id='parallax-mirror-container' class='d-none d-sm-block'></div>

<!-- COVER FULLSCREEN @Tablette and @Desktop -->
<div id='home-fullscreen' class="d-none d-sm-flex justify-content-center">
    @php
    $browser = new WhichBrowser\Parser(getallheaders());
    @endphp
    @if ($browser->isType('desktop'))
    <video playsinline autoplay muted loop id="home-fullscreen-video">
        <source src="{{ asset('/media/video-dorfkern-ipsach@2k.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    @endif

    <div class='down-arrow d-flex justify-content-center'>
        <img src="{{ asset('/media/branding/3dm-down-arrow.svg') }}" alt='[Down arrow]'>
    </div>
</div>

<script>
var x = window.matchMedia("(min-width: 576px)");

<!-- load large background image first -->
var newImg = new Image;
var styleElem = document.head.appendChild(document.createElement("style"));
newImg.onload = function() {
    styleElem.innerHTML = "#home-fullscreen:after {background-image:url("+newImg.src+");}";
    $('#home-fullscreen').addClass('ready');
}

function loadBackground(x){
    if(x.matches){
        newImg.src = "{{ URL::asset('/media/renders/render-dorfkern-ipsach-ipsach-rollimarchiniarchitectessarl-2019@2560.jpg') }}";
    }
}
loadBackground(x);
x.addListener(loadBackground);
</script>

<div id='portfolio' class="d-none bg-white">
    <div style="height:1px;"></div>
    <!-- COVER @Mobile -->
    <div id='home-mobile' class='portfolio d-sm-none'>
        <div class="d-flex">
            <picture>
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-dorfkern-ipsach-ipsach-rollimarchiniarchitectessarl-2019@640.jpg') }}" alt='Rendu du projet Dorfkern de Ipsach, projet architectural réalisé par ARGE Wahliruefli und Rollimarchini'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend' style="background-color: #ECDDE0;">
            <h1>Dorfkern Ipsach</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ipsach, CH</h2> {{--Compléter le lieu--}}
            <h2>ARGE Wahliruefli und Rollimarchini</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    <script>
    function updateFlex(elem){
        elem.parentElement.style.flex = elem.naturalWidth / elem.naturalHeight;
    }

    function setParallaxRatio(elem){
        if (elem.naturalWidth != 1){
            elem.removeAttribute('onLoad');
            $(elem.closest('.parallax-window')).parallax({
                aspectRatio: elem.naturalWidth / elem.naturalHeight,
                mirrorSelector: "#parallax-mirror-container",
                zIndex: "5",
                overScrollFix: true
            })
        }
    }
    </script>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : COMADUR-AREAL --> {{--Compléter le nom du projet--}}
    <div id='comadur-areal' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-frontal-bbharchitectes-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-frontal-bbharchitectes-2019@640.jpg') }}" alt='Rendu extérieur de la Comadur Areal, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-place-bbharchitectes-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-place-bbharchitectes-2019@640.jpg') }}" alt='Rendu intérieur de la Comadur Areal, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Comadur-Areal</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Thun, CH</h2> {{--Compléter le lieu--}}
            <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : ALTE LANDI  --> {{--Compléter le nom du projet--}}
    <div id='alte-landi' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-national-sport-macolin-exterieur-kistlervogtpartenairesarchitectessa-2019@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu intérieur de Alte Landi, projet réalisé par Baeriswyl Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-national-sport-macolin-exterieur-kistlervogtpartenairesarchitectessa-2019@640.jpg') }}" alt='Rendu intérieur de Alte Landi, projet réalisé par Baeriswyl Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Alte Landi</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Alterswill, CH</h2> {{--Compléter le lieu--}}
                <h2>Baeriswyl Architekten AG</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : SALLE DE SPORT TRIPLE --> {{--Compléter le nom du projet--}}
    <div id='salle-de-sport-triple' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='Rendu extérieur de la salle de sport triple, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-interieur-bartbuchhoferarchitektenag-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-interieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='Rendu intérieur de la salle de sport triple, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Salle de sport triple</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Schwarzsee, CH</h2> {{--Compléter le lieu--}}
            <h2>Epure Architecture et Urbanisme SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : EMS SAINT-SYLVE	--> {{--Compléter le nom du projet--}}
    <div id='ems-saint-sylve-1' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-scolaire-chateau-d-eau-marly-exterieur-bbharchitectes-2019@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Rendu intérieur de l'EMS Saint-Sylve, projet réalisé par Les ateliers du passage SÀRL"> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-scolaire-chateau-d-eau-marly-exterieur-bbharchitectes-2019@640.jpg') }}" alt="Rendu intérieur de l'EMS Saint-Sylve, projet réalisé par Les ateliers du passage SÀRL"> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>EMS Saint-Sylve</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Vex, CH</h2> {{--Compléter le lieu--}}
                <h2>Les ateliers du passage SÀRL</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : BLUEFACTORY --> {{--Compléter le nom du projet--}}
    <div id='bluefactory' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p1-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p1-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu de Blufactory, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p1-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p1-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu de Blufactory, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p2-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p2-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu de Blufactory, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p2-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p2-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu de Blufactory, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Bluefactory</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Fribourg, CH</h2> {{--Compléter le lieu--}}
            <h2>BBA Archipole SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : LOGEMENTS PRÉ-COLOMB  --> {{--Compléter le nom du projet--}}
    <div id='logements-pre-colomb' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y="bottom" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-scolaire-vernets-exterieur-bbharchitectes-2018@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur des logements Pré-Colomb à Versoix, projet réalisé par BBH Architectes Sàrl'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-scolaire-vernets-exterieur-bbharchitectes-2018@640.jpg') }}" alt='Rendu extérieur des logements Pré-Colomb à Versoix, projet réalisé par BBH Architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Logements Pré-Colomb</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Versoix, CH</h2> {{--Compléter le lieu--}}
                <h2>BBH Architectes Sàrl</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : COLLÈGE DE L'OUEST --> {{--Compléter le nom du projet--}}
    <div id='college-de-l-ouest' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-he-so-valais-sion-exterieur-chappuisarchitectessa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-he-so-valais-sion-exterieur-chappuisarchitectessa-2019@640.jpg') }}" alt="Rendu extérieur 1 du collège de l'ouest à Montreux, projet réalisé par Epure Architecture et Urbanisme SA"> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-he-so-valais-sion-interieur-chappuisarchitectessa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-he-so-valais-sion-interieur-chappuisarchitectessa-2019@640.jpg') }}" alt="Rendu extérieur 2 du collège de l'ouest à Montreux, projet réalisé par Epure Architecture et Urbanisme SA"> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Collège de l'Ouest</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Montreux, CH</h2> {{--Compléter le lieu--}}
            <h2>Epure Architecture et Urbanisme SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : WESTSIDE BRUENNEN  --> {{--Compléter le nom du projet--}}
    <div id='westside-bruennen' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-ziegeleiplatz-steffisburg-bartbuchhoferarchitektenag-2017@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu intérieur de Westside Brünnen, projet réalisé par LVPH Architectes Sàrl'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-ziegeleiplatz-steffisburg-bartbuchhoferarchitektenag-2017@640.jpg') }}" alt='Rendu intérieur de Westside Brünnen, projet réalisé par LVPH Architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Westside Brünnen</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Berne, CH</h2> {{--Compléter le lieu--}}
                <h2>LVPH Architectes Sàrl</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : BATIMENT DE LA GARE TPF --> {{--Compléter le nom du projet--}}
    <div id='batiment-gare-tpf' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-iubengineeringsa-2019@640.jpg') }}" alt='Rendu 1 du Bâtiment de la gare TPF de Montbovon, projet réalisé par RBCH architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-p2-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-p2-iubengineeringsa-2019@640.jpg') }}" alt='Rendu 2 du Bâtiment de la gare TPF de Montbovon, projet réalisé par RBCH architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-p3-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-p3-iubengineeringsa-2019@640.jpg') }}" alt='Rendu 3 du Bâtiment de la gare TPF de Montbovon, projet réalisé par RBCH architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-p4-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-p4-iubengineeringsa-2019@640.jpg') }}" alt='Rendu 4 du Bâtiment de la gare TPF de Montbovon, projet réalisé par RBCH architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Bâtiment de la gare TPF</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Montbovon, CH</h2> {{--Compléter le lieu--}}
            <h2>RBCH architectes Sàrl</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : EMS SAINT-SYLVE --> {{--Compléter le nom du projet--}}
    <div id='ems-saint-sylve-2' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y='bottom' style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-nouvelle-sacre-coeur-estavayer-le-lac-bartbuchhoferarchitekten-2016@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Rendu intérieur de l'EMS Saint-Sylve à Vex, projet réalisé par DT-TECH-architecture SA"> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-nouvelle-sacre-coeur-estavayer-le-lac-bartbuchhoferarchitekten-2016@640.jpg') }}" alt="Rendu intérieur de l'EMS Saint-Sylve à Vex, projet réalisé par DT-TECH-architecture SA"> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>EMS Saint-Sylve</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Vex, CH</h2> {{--Compléter le lieu--}}
                <h2>DT-TECH-architecture SA</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : DORFKERN IPSACH --> {{--Compléter le nom du projet--}}
    <div id='dorfkern-ipsach' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p2-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p2-2019@640.jpg') }}" alt='Rendu intérieur de Dorfkern Ipsach, projet réalisé par ARGE Wahliruefli und Rollimarchini'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p1-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p1-2019@640.jpg') }}" alt='Rendu extérieur de Dorfkern Ipsach, projet réalisé par ARGE Wahliruefli und Rollimarchini'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Dorfkern Ipsach</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ipsach, CH</h2> {{--Compléter le lieu--}}
            <h2>ARGE Wahliruefli und Rollimarchini</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : BANQUE RAIFFEISEN  --> {{--Compléter le nom du projet--}}
    <div id='banque-raiffeisen' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-mep-colovray-nyon-bunqarchitectessa-2019@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu intérieur de la banque Raiffeisen à Assens, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-mep-colovray-nyon-bunqarchitectessa-2019@640.jpg') }}" alt='Rendu intérieur de la banque Raiffeisen à Assens, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Banque Raiffeisen </h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Assens, CH</h2> {{--Compléter le lieu--}}
                <h2>Epure Architecture et Urbanisme SA</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : CENTRE TECHNIQUE ET LOGISTIQUE --> {{--Compléter le nom du projet--}}
    <div id='centre-technique-et-logistique' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-amphipole-unil-lausanne-exterieur-bartbuchhoferarchitektenag-2016@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-amphipole-unil-lausanne-exterieur-bartbuchhoferarchitektenag-2016@640.jpg') }}" alt='Rendu intérieur 1 du centre technique et logistique de Sierre, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-amphipole-unil-lausanne-interieur-bartbuchhoferarchitektenag-2016@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-amphipole-unil-lausanne-interieur-bartbuchhoferarchitektenag-2016@640.jpg') }}" alt='Rendu intérieur 2 du centre technique et logistique de Sierre, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Centre technique et logistique</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Sierre, CH</h2> {{--Compléter le lieu--}}
            <h2>Epure Architecture et Urbanisme SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : UNIONSGASSE 18  --> {{--Compléter le nom du projet--}}
    <div id='unionsgasse-18' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y="bottom" data-speed="1" style="min-height:60vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-etablissement-medico-social-siviriez-rollimarchiniarchitectessarl-2018@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur à la Unionsgasse 18 à Bienne, projet réalisé par Kistler Vogt Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-etablissement-medico-social-siviriez-rollimarchiniarchitectessarl-2018@640.jpg') }}" alt='Rendu extérieur à la Unionsgasse 18 à Bienne, projet réalisé par Kistler Vogt Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Unionsgasse 18</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Bienne, CH</h2> {{--Compléter le lieu--}}
                <h2>Kistler Vogt Architekten AG</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

</div>

@endsection
