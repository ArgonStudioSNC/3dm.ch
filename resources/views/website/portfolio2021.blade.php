@extends('layouts.website')

@section('content')
<style>
    #home-fullscreen video {
        top: auto!important;
        bottom: 0!important;
        transform: translate(calc(-50% + 8px), 0)!important;

        @media (max-aspect-ratio: 10/7) {
            width: auto!important;
            height: 100vh!important;
        }
    }
    #home-fullscreen::after {
        background-position-y: bottom!important;
    }

    .portfolio-bordered .legend, .portfolio-home .legend {
        color: #3D5D6B!important;
    }
</style>

<div id='splashscreen'>
    <div class="my-flex-logo d-flex justify-content-center align-items-center d-none">
        <img src="{{ asset('/storage/icons/3dm-logo-with-undertitle.svg') }}" alt="[Logo de 3DM]">
    </div>
</div>

@include('shared.navigation', ['text' => 'En savoir plus', 'route' => route('www.about')])

<div id='parallax-mirror-container' class='d-none d-sm-block'></div>

<!-- COVER FULLSCREEN @Tablette and @Desktop -->
<div id='home-fullscreen' data-img="{{ URL::asset('/storage/renders/20210126/196_Thun_BB_Ext@2560.jpg') }}" class="d-none d-sm-flex justify-content-center">
    @php
    $browser = new WhichBrowser\Parser(getallheaders());
    @endphp
    @if ($browser->isType('desktop'))
    <video playsinline autoplay muted loop id="home-fullscreen-video">
        <source src="{{ asset('/storage/videos/196_Thun_BB_Video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    @endif

    <div class='down-arrow d-flex justify-content-center'>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156 89.4">
            <defs><style>.a{fill:white;}.b{fill:var(--theme-blue);}</style></defs>
            <g>
                <polygon class="a" points="137.5 0 156 89.4 0 89.4 18.4 0 137.5 0"/>
                <polygon class="b" points="120.7 37.1 114 28.2 78 55.1 42.1 28.2 35.4 37.1 78 69 78 69 78 69 120.7 37.1"/>
            </g>
        </svg>
    </div>
</div>

<div id='portfolio' class="d-none bg-white">
    <div style="height:1px;"></div>
    <!-- COVER @Mobile -->
    <div id='home-mobile' class='portfolio-home d-sm-none'>
        <div class="d-flex">
            <picture>
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/196_Thun_BB_Ext@640.jpg') }}" alt='Rendu extérieur du projet Comadur-Areal à Thun, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend' style="background-color: var(--light-brown);">
            <h1>Comadur-Areal</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Thun, CH</h2> {{--Compléter le lieu--}}
            <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : Dorfkern Ipsach --> {{--Compléter le nom du projet--}}
    <div id='dorfkern-ipsach' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/156_Ipsach_WR_Int@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/156_Ipsach_WR_Int@640.jpg') }}" alt='Rendu intérieur du projet Dorfkern à Ipsach, projet réalisé par ARGE Wahliruefli und Rollimarchini'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/156_Ipsach_WR_Ext@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/156_Ipsach_WR_Ext@640.jpg') }}" alt='Rendu extérieur du projet Dorfkern à Ipsach, projet réalisé par ARGE Wahliruefli und Rollimarchini'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Dorfkern Ipsach</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ipsach, CH</h2> {{--Compléter le lieu--}}
            <h2>ARGE Wahliruefli und Rollimarchini</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : ALTE LANDI  --> {{--Compléter le nom du projet--}}
    <div id='alte-landi' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/storage/renders/20210126/191_Alt_Landi_Baeriswyl@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu intérieur de Alte Landi, projet réalisé par Baeriswyl Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/191_Alt_Landi_Baeriswyl@640.jpg') }}" alt='Rendu intérieur de Alte Landi, projet réalisé par Baeriswyl Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
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
                <source srcset="{{ asset('/storage/renders/20210126/172_Lac-Noir_Epure_Ext@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/172_Lac-Noir_Epure_Ext@640.jpg') }}" alt='Rendu extérieur de la salle de sport triple, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/172_Lac-Noir_Epure_Int@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/172_Lac-Noir_Epure_Int@640.jpg') }}" alt='Rendu intérieur de la salle de sport triple, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
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
            <div class="parallax-window d-none d-sm-block" style="min-height:60vh;" data-speed=0.7>
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/storage/renders/20210126/181_EMS-Vex_Ateliers-du-Passage@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Rendu intérieur de l'EMS Saint-Sylve, projet réalisé par Les ateliers du passage SÀRL"> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/181_EMS-Vex_Ateliers-du-Passage@640.jpg') }}" alt="Rendu intérieur de l'EMS Saint-Sylve, projet réalisé par Les ateliers du passage SÀRL"> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>EMS Saint-Sylve</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Vex, CH</h2> {{--Compléter le lieu--}}
                <h2>Les ateliers du passage SÀRL</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : ALLEE-/ BRUEHL-/ MATTENSTRASSE --> {{--Compléter le nom du projet--}}
    <div id='allee-bruehl-mattenstrasse' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/155_Mattenstrasse_BB_Ext@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/155_Mattenstrasse_BB_Ext@640.jpg') }}" alt='Rendu extérieur du projet Allee-/ Brühl-/ Mattenstrasse à Bienne, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/155_Mattenstrasse_BB_Int@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/155_Mattenstrasse_BB_Int@640.jpg') }}" alt='Rendu intérieur du projet Allee-/ Brühl-/ Mattenstrasse à Bienne, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Allee-/ Brühl-/ Mattenstrasse</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Bienne, CH</h2> {{--Compléter le lieu--}}
            <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : COMADUR-AREAL	--> {{--Compléter le nom du projet--}}
    <div id='comadur-areal' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/storage/renders/20210126/196_Thun_BB_Int@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Rendu intérieur du projet Comadur-Areal à Thun, projet réalisé par Bart & Buchhofer Architekten AG"> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/196_Thun_BB_Int@640.jpg') }}" alt="Rendu intérieur du projet Comadur-Areal à Thun, projet réalisé par Bart & Buchhofer Architekten AG"> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Comadur-Areal</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Thun, CH</h2> {{--Compléter le lieu--}}
                <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : BLUEFACTORY --> {{--Compléter le nom du projet--}}
    <div id='bluefactory' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P4@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P4@640.jpg') }}" alt='Rendu de Blufactory à Fribourg, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P6@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P6@640.jpg') }}" alt='Rendu de Blufactory à Fribourg, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P5@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P5@640.jpg') }}" alt='Rendu de Blufactory à Fribourg, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P2@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/119_Bluefactory_BBA_P2@640.jpg') }}" alt='Rendu de Blufactory à Fribourg, projet réalisé par BBA Archipole SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
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
            <div class="parallax-window d-none d-sm-block" data-position-y="bottom" style="min-height:85vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/storage/renders/20210126/178_Versoix_BBH@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur des logements Pré-Colomb à Versoix, projet réalisé par BBH Architectes Sàrl'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/178_Versoix_BBH@640.jpg') }}" alt='Rendu extérieur des logements Pré-Colomb à Versoix, projet réalisé par BBH Architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend' style="color: var(--white); background-color: #3D5D6B;"> {{--Compléter la couleur de la vignette--}}
                <h1>Logements Pré-Colomb</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Versoix, CH</h2> {{--Compléter le lieu--}}
                <h2>BBH Architectes Sàrl</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : BÂTIMENT DE LA POSTE --> {{--Compléter le nom du projet--}}
    <div id='poste-martigny' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_Int_3@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_Int_3@640.jpg') }}" alt='Rendu du bâtiment de la Poste à Martigny, projet réalisé par dvarchitectes & associés SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_EXT@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_EXT@640.jpg') }}" alt='Rendu du bâtiment de la Poste à Martigny, projet réalisé par dvarchitectes & associés SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_Int_2@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_Int_2@640.jpg') }}" alt='Rendu du bâtiment de la Poste à Martigny, projet réalisé par dvarchitectes & associés SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_Int_1@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/194_Martigny_dvarchitectes_Int_1@640.jpg') }}" alt='Rendu du bâtiment de la Poste à Martigny, projet réalisé par dvarchitectes & associés SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Bâtiment de la Poste</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Martigny, CH</h2> {{--Compléter le lieu--}}
            <h2>dvarchitectes & associés SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : BANQUE RAIFFEISEN  --> {{--Compléter le nom du projet--}}
    <div id='banque-raiffeisen' class='portfolio-fullwidth' style="background-color: #3D5D6B;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/storage/renders/20210126/133_Raiffeisen_Epure@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu intérieur de la banque Raiffeisen à Assens, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/133_Raiffeisen_Epure@640.jpg') }}" alt='Rendu intérieur de la banque Raiffeisen à Assens, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
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
                <source srcset="{{ asset('/storage/renders/20210126/198_Oiken_Epure_Int_1@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/198_Oiken_Epure_Int_1@640.jpg') }}" alt='Rendu intérieur 1 du centre technique et logistique de Sierre, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/storage/renders/20210126/198_Oiken_Epure_Int_2@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/198_Oiken_Epure_Int_2@640.jpg') }}" alt='Rendu intérieur 2 du centre technique et logistique de Sierre, projet réalisé par Epure Architecture et Urbanisme SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
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
            <div class="parallax-window d-none d-sm-block" style="min-height:90vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/storage/renders/20210126/123_Unionsgasse_KV@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur à la Unionsgasse 18 à Bienne, projet réalisé par Kistler Vogt Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/storage/renders/20210126/123_Unionsgasse_KV@640.jpg') }}" alt='Rendu extérieur à la Unionsgasse 18 à Bienne, projet réalisé par Kistler Vogt Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
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
