<div id='parallax-mirror-container' class='d-none d-sm-block'></div>

<div id='portfolio' class="appear-on-load">
    <div class='my-fix'></div>
    <!-- COVER @Mobile -->
    <div id='home-mobile' class='portfolio d-sm-none'>
        <div class="d-flex">
            <picture>
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-communaux-ambilly-construction-thonex-exterieur-ittenbrechbuhlsa-2018@640.jpg') }}" alt='Rendu extérieur du communaux d Ambilly de Thônex, projet architectural réalisé par Itten Brechbühl SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend' style="background-color: #ECDDE0;">
            <h1>Communaux d’Ambilly</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Thônex, CH</h2> {{--Compléter le lieu--}}
            <h2>Itten Brechbühl SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    <!-- COVER FULLSCREEN @Tablette and @Desktop -->
    <div id='home-fullscreen' class="fullscreen-img d-none d-sm-block">
        <div class='down-arrow d-flex justify-content-center'>
            <img src="{{ asset('/media/branding/3dm-down-arrow.svg') }}" alt='[Down arrow]'>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : ECOLE DE NEIRIVUE --> {{--Compléter le nom du projet--}}
    <div id='ecole-neirivue' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-frontal-bbharchitectes-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-frontal-bbharchitectes-2019@640.jpg') }}" alt='Rendu frontal de la nouvelle école de Neirivue, projet réalisé par BBH Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-place-bbharchitectes-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-construction-nouvelle-ecole-neirivue-place-bbharchitectes-2019@640.jpg') }}" alt='Rendu de la place de la nouvelle école de Neirivue, projet réalisé par BBH Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Construction d'une nouvelle école</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Neirivue, CH</h2> {{--Compléter le lieu--}}
            <h2>BBH Architectes</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : CENTRE SPORT MACOLIN  --> {{--Compléter le nom du projet--}}
    <div id='centre-sport-macolin' class='portfolio-fullwidth' style="background-color: #9CAAB5;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-national-sport-macolin-exterieur-kistlervogtpartenairesarchitectessa-2019@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur du centre de sport national de Macolin, projet réalisé par BBH Architectes'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-national-sport-macolin-exterieur-kistlervogtpartenairesarchitectessa-2019@640.jpg') }}" alt='Rendu extérieur du centre de sport national de Macolin, projet réalisé par BBH Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #9CAAB5;"> {{--Compléter la couleur de la vignette--}}
                <h1>Centre national de sport</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Macolin, CH</h2> {{--Compléter le lieu--}}
                <h2>Kistler Vogt Partenaires Architectes SA</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : Mattenstrasse --> {{--Compléter le nom du projet--}}
    <div id='mattenstrasse' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='Rendu extérieur d Allee-/ Brühl-/ Mattenstrasse à Bienne, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-interieur-bartbuchhoferarchitektenag-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-allebruhlmattenstresse-bienne-interieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='Rendu intérieur d Allee-/ Brühl-/ Mattenstrasse à Bienne, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Allee-/ Brühl-/ Mattenstrasse</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Bienne, CH</h2> {{--Compléter le lieu--}}
            <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : CENTRE SCOLAIRE MARLY	--> {{--Compléter le nom du projet--}}
    <div id='centre scolaire marly' class='portfolio-fullwidth' style="background-color: #E2C0B3;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-scolaire-chateau-d-eau-marly-exterieur-bbharchitectes-2019@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur du centre scolaire château d’eau de Marly, projet réalisé par BBH Architectes'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-scolaire-chateau-d-eau-marly-exterieur-bbharchitectes-2019@640.jpg') }}" alt='Rendu extérieur du centre scolaire château d’eau de Marly, projet réalisé par BBH Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #E2C0B3;"> {{--Compléter la couleur de la vignette--}}
                <h1>Centre scolaire château d’eau</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Marly, CH</h2> {{--Compléter le lieu--}}
                <h2>BBH Architectes</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : ALLSCHWIL --> {{--Compléter le nom du projet--}}
    <div id='allschwil' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p1-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p1-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu du point de vue 1 intérieur du projet Wegmatten à Allschwil , projet réalisé par LVPH Architectes Sàrl + Bricks'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p1-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p1-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu du point de vue 1 extérieur du projet Wegmatten à Allschwil, projet réalisé par LVPH Architectes Sàrl + Bricks'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p2-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-interieur-p2-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu du point de vue 2 intérieur du projet Wegmatten à Allschwil, projet réalisé par LVPH Architectes Sàrl + Bricks'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p2-lvpharchitectessarlbricks-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-wegmatten-allschwil-exterieur-p2-lvpharchitectessarlbricks-2019@640.jpg') }}" alt='Rendu du point de vue 2 extérieur du projet Wegmatten à Allschwil, projet réalisé par LVPH Architectes Sàrl + Bricks'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Wegmatten</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Allschwil, CH</h2> {{--Compléter le lieu--}}
            <h2>LVPH Architectes Sàrl + Bricks</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : CENTRE SCOLAIRE VERNETS  --> {{--Compléter le nom du projet--}}
    <div id='centre scolaire vernets' class='portfolio-fullwidth' style="background-color: #E9CA90;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y="bottom" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-scolaire-vernets-exterieur-bbharchitectes-2018@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur du centre scolaire des Vernets à Genève, projet réalisé par BBH Architectes'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-scolaire-vernets-exterieur-bbharchitectes-2018@640.jpg') }}" alt='Rendu extérieur du centre scolaire des Vernets à Genève , projet réalisé par BBH Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #E9CA90;"> {{--Compléter la couleur de la vignette--}}
                <h1>Centre scolaire des Vernets</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Genève, CH</h2> {{--Compléter le lieu--}}
                <h2>BBH Architectes</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : HES-SO VALAIS --> {{--Compléter le nom du projet--}}
    <div id='hes-so valais' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-he-so-valais-sion-exterieur-chappuisarchitectessa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-he-so-valais-sion-exterieur-chappuisarchitectessa-2019@640.jpg') }}" alt='Rendu extérieur de la haute école spécialisée de Suisse occidentale à Sion, projet réalisé par Chappuis Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-he-so-valais-sion-interieur-chappuisarchitectessa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-he-so-valais-sion-interieur-chappuisarchitectessa-2019@640.jpg') }}" alt='Rendu intérieur de la haute école spécialisée de Suisse occidentale à Sion , projet réalisé par Chappuis Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>HES-SO Valais</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Sion, CH</h2> {{--Compléter le lieu--}}
            <h2>Chappuis Architectes SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : ZIEGELEIPLATZ  --> {{--Compléter le nom du projet--}}
    <div id='ziegeleiplatz' class='portfolio-fullwidth' style="background-color: #CCBABC;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-ziegeleiplatz-steffisburg-bartbuchhoferarchitektenag-2017@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu de nuit de la Ziegeleiplatz à Steffisburg , projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-ziegeleiplatz-steffisburg-bartbuchhoferarchitektenag-2017@640.jpg') }}" alt='Rendu de nuit de la Ziegeleiplatz à Steffisburg , projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #CCBABC;"> {{--Compléter la couleur de la vignette--}}
                <h1>Ziegeleiplatz</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Steffisburg, CH</h2> {{--Compléter le lieu--}}
                <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : LES HUTINS --> {{--Compléter le nom du projet--}}
    <div id='les hutins' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p2-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p2-2019@640.jpg') }}" alt='Rendu extérieur du point de vue 2 des Hutins à Confignon, projet réalisé par Bunq Architectes SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p1-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-les-huttins-confignon-bunqarchitectes-exterieur-p1-2019@640.jpg') }}" alt='Rendu extérieur du point de vue 1 des Hutins à Confignon , projet réalisé par Bunq Architectes SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Les Hutins</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Confignon, CH</h2> {{--Compléter le lieu--}}
            <h2>Bunq Architectes SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : SACRE-COEUR  --> {{--Compléter le nom du projet--}}
    <div id='sacre-coeur' class='portfolio-fullwidth' style="background-color: #B18584;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y='bottom' style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-nouvelle-sacre-coeur-estavayer-le-lac-bartbuchhoferarchitekten-2016@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur de la nouvelle école du Sacré-Cœur à Estavayer-le-Lac , projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-nouvelle-sacre-coeur-estavayer-le-lac-bartbuchhoferarchitekten-2016@640.jpg') }}" alt='Rendu extérieur de la nouvelle école du Sacré-Cœur à Estavayer-le-Lac , projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #B18584;"> {{--Compléter la couleur de la vignette--}}
                <h1>Nouvelle école du Sacré-Cœur</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Estavayer-le-Lac, CH</h2> {{--Compléter le lieu--}}
                <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : GARE CFF --> {{--Compléter le nom du projet--}}
    <div id='gare cff' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-iubengineeringsa-2019@640.jpg') }}" alt='Rendu extérieur du point de vue 1 de la gare de Bex, projet réalisé par CFF SA + IUB Engineering SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-p2-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-p2-iubengineeringsa-2019@640.jpg') }}" alt='Rendu extérieur du point de vue 2 de la gare de Bex, projet réalisé par CFF SA + IUB Engineering SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-p3-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-p3-iubengineeringsa-2019@640.jpg') }}" alt='Rendu extérieur du point de vue 3 de la gare de Bex, projet réalisé par CFF SA + IUB Engineering SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-gare-cff-bex-p4-iubengineeringsa-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-gare-cff-bex-p4-iubengineeringsa-2019@640.jpg') }}" alt='Rendu extérieur du point de vue 4 de la gare de Bex, projet réalisé par CFF SA + IUB Engineering SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Gare CFF</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Bex, CH</h2> {{--Compléter le lieu--}}
            <h2>CFF SA + IUB Engineering SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : MEP COLOVRAY  --> {{--Compléter le nom du projet--}}
    <div id='mep colovray' class='portfolio-fullwidth' style="background-color: #C4CCD1;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-mep-colovray-nyon-bunqarchitectessa-2019@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu intérieur du complexe multisports et parc des sports de Colovray à Nyon, projet réalisé par Bunq Architectes SA'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-mep-colovray-nyon-bunqarchitectessa-2019@640.jpg') }}" alt='Rendu intérieur du complexe multisports et parc des sports de Colovray à Nyon, projet réalisé par Bunq Architectes SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #C4CCD1;"> {{--Compléter la couleur de la vignette--}}
                <h1>MEP Colovray</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Nyon, CH</h2> {{--Compléter le lieu--}}
                <h2>Bunq Architectes SA</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : AMPHIPOLE --> {{--Compléter le nom du projet--}}
    <div id='amphipole' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-amphipole-unil-lausanne-exterieur-bartbuchhoferarchitektenag-2016@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-amphipole-unil-lausanne-exterieur-bartbuchhoferarchitektenag-2016@640.jpg') }}" alt='Rendu extérieur de l Amphipôle de l université de Lausanne, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-amphipole-unil-lausanne-interieur-bartbuchhoferarchitektenag-2016@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-amphipole-unil-lausanne-interieur-bartbuchhoferarchitektenag-2016@640.jpg') }}" alt='Rendu intérieur de l Amphipôle de l université de Lausanne, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Amphipôle - UNIL</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Lausanne, CH</h2> {{--Compléter le lieu--}}
            <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : SIVIRIEZ  --> {{--Compléter le nom du projet--}}
    <div id='siviriez' class='portfolio-fullwidth' style="background-color: #EFE3CE;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y="bottom" data-speed="1" style="min-height:60vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-etablissement-medico-social-siviriez-rollimarchiniarchitectessarl-2018@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur de l établissement médico-social de Siviriez, projet réalisé par Rollimarchini architectes Sàrl'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-etablissement-medico-social-siviriez-rollimarchiniarchitectessarl-2018@640.jpg') }}" alt='Rendu extérieur de l établissement médico-social de Siviriez, projet réalisé par Rollimarchini architectes Sàrl'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #EFE3CE;"> {{--Compléter la couleur de la vignette--}}
                <h1>Etablissement médico-social</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Siviriez, CH</h2> {{--Compléter le lieu--}}
                <h2>Rollimarchini architectes Sàrl</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : AMBASSADE SUISSE --> {{--Compléter le nom du projet--}}
    <div id='ambassade suisse' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-embassade-suisse-chine-exterieur-chappuisarchitectessa-2018@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-embassade-suisse-chine-exterieur-chappuisarchitectessa-2018@640.jpg') }}" alt='Rendu extérieur de l embassade de Suisse à Beijing en Chine, projet réalisé par Chappuis Architectes SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-embassade-suisse-chine-interieur-chappuisarchitectessa-2018@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-embassade-suisse-chine-interieur-chappuisarchitectessa-2018@640.jpg') }}" alt='Rendu extérieur de l embassade de Suisse à Beijing en Chine, projet réalisé par Chappuis Architectes SA'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Embassade de Suisse</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Beijing, China</h2> {{--Compléter le lieu--}}
            <h2>Chappuis Architectes SA</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : CHAMPSEC  --> {{--Compléter le nom du projet--}}
    <div id='champsec' class='portfolio-fullwidth' style="background-color: #DAB394;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y="bottom" style="min-height:75vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-centre-scolaire-champsec-sion-bartbuchhoferarchitektenag-2018@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur du centre scolaire de Champsec à Sion, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-centre-scolaire-champsec-sion-bartbuchhoferarchitektenag-2018@640.jpg') }}" alt='Rendu extérieur du centre scolaire de Champsec à Sion, projet réalisé par Bart & Buchhofer Architekten AG'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #DAB394;"> {{--Compléter la couleur de la vignette--}}
                <h1>Centre scolaire de Champsec</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Sion, CH</h2> {{--Compléter le lieu--}}
                <h2>Bart & Buchhofer Architekten AG</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : PASSERELLE --> {{--Compléter le nom du projet--}}
    <div id='passerelle' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-passerelle-mobilite-douce-crissier-jour-mangeatwahlenarchitectes-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-passerelle-mobilite-douce-crissier-jour-mangeatwahlenarchitectes-2019@640.jpg') }}" alt='Rendu de jour de la passerelle mobilité douce à Crissier, projet réalisé par Mangeat Wahlen Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/render-passerelle-mobilite-douce-crissier-nuit-mangeatwahlenarchitectes-2019@1280.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/render-passerelle-mobilite-douce-crissier-nuit-mangeatwahlenarchitectes-2019@640.jpg') }}" alt='Rendu de nuit de la passerelle mobilité douce à Crissier, projet réalisé par Mangeat Wahlen Architectes'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: var(--light-brown);">
            <h1>Passerelle mobilité douce</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Crissier, CH</h2> {{--Compléter le lieu--}}
            <h2>Mangeat Wahlen Architectes</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : RUE DU MILIEU  --> {{--Compléter le nom du projet--}}
    <div id='rue du milieu' class='portfolio-fullwidth' style="background-color: #E5E4AE;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-pos-y="bottom" style="min-height:85vh;">
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/render-rue-du-milieu-bienne-bartbuchhoferarchitectessa-previmm-2018@2560.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img onLoad="setParallaxRatio(this)" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='Rendu extérieur de la Rue du Milieu à Bienne, projet réalisé par Bart & Buchhofer Architectes SA + Previmm'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-rue-du-milieu-bienne-bartbuchhoferarchitectessa-previmm-2018@640.jpg') }}" alt='Rendu extérieur de la Rue du Milieu à Bienne, projet réalisé par Bart & Buchhofer Architectes SA + Previmm'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #E5E4AE;"> {{--Compléter la couleur de la vignette--}}
                <h1>Rue du Milieu</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Bienne, CH</h2> {{--Compléter le lieu--}}
                <h2>Bart & Buchhofer Architectes SA + Previmm</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>
</div>
