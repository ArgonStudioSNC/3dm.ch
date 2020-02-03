<div id='parallax-mirror-container' class='d-none d-sm-block'></div>

<div id='portfolio'>
    <!-- COVER @Mobile -->
    <div id='home-mobile' class='portfolio d-sm-none'>
        <div class="d-flex">
            <picture>
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/render-ipsach-wahliruefli-2019@640x.jpg') }}" alt='TODO'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend' style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    <!-- COVER FULLSCREEN @Tablette and @Desktop -->
    <div id='home-fullscreen' class="fullscreen-img d-none d-sm-block">
        <div class='down-arrow d-flex justify-content-center'>
            <img src="{{ asset('/media/branding/3dm-down-arrow.svg') }}" alt='[Down arrow]'>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/140_Neirivue_BBH_Photoshop_Frontal_V4.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/140_Neirivue_BBH_Photoshop_Frontal_V4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/140_Neirivue_BBH_Photoshop_Place_V4.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/140_Neirivue_BBH_Photoshop_Place_V4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.33" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/146_Macolin_KV_Photoshop_Ext_v4.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/146_Macolin_KV_Photoshop_Ext_v4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/155_Mattenstrasse_BB_Exterieur_final_v2.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/155_Mattenstrasse_BB_Exterieur_final_v2.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/155_Mattenstrasse_BB_Interieur_final_v2_sans.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/155_Mattenstrasse_BB_Interieur_final_v2_sans.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.11" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/141_Marly_BBH_Photoshop_v4.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/141_Marly_BBH_Photoshop_v4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/137_Allschwill_Bricks_P4_v1.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/137_Allschwill_Bricks_P4_v1.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/137_Allschwill_Bricks_P1_v3.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/137_Allschwill_Bricks_P1_v3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/137_Allschwill_Bricks_P7_v2.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/137_Allschwill_Bricks_P7_v2.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/137_Allschwill_Bricks_P5_v4.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/137_Allschwill_Bricks_P5_v4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.33" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/105_Vernets_BBH_Ext_v3.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/105_Vernets_BBH_Ext_v3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/120_HES-SO_Chappuis_Ext_P7_v4.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/120_HES-SO_Chappuis_Ext_P7_v4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/120_HES-SO_Chappuis_Int_P7_v3.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/120_HES-SO_Chappuis_Int_P7_v3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.61" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/Ziegeleiplatz_P1_V5.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/Ziegeleiplatz_P1_V5.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/112_Confignon_Bunq_Ext_P2_v7.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/112_Confignon_Bunq_Ext_P2_v7.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/112_Confignon_Bunq_Ext_P1_v5.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/112_Confignon_Bunq_Ext_P1_v5.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.66" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/Centre_scolaire_Ardon_fullhd.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/Centre_scolaire_Ardon_fullhd.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/89_CFF_Gare de Bex_P1_v4.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/89_CFF_Gare de Bex_P1_v4.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/89_CFF_Gare de Bex_P3_v3.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/89_CFF_Gare de Bex_P3_v3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.45" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/139_MEP_Colovray_Bunq_Interieur_v3.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/139_MEP_Colovray_Bunq_Interieur_v3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/Amphipole_vue ext_V5.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/Amphipole_vue ext_V5.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/Amphipole_vue int_V8.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/Amphipole_vue int_V8.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="2.5" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/Siviriez_Exterieur_v8_Persos.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/Siviriez_Exterieur_v8_Persos.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/Ambassade_Suisse_Exterieure_Rendu final_V3.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/Ambassade_Suisse_Exterieure_Rendu final_V3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/Ambassade_Suisse_Interieure_Rendu final_V3.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/Ambassade_Suisse_Interieure_Rendu final_V3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.33" style="min-height:75vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/96_Champsec_Sion_BBH_Photoshop_v6.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/96_Champsec_Sion_BBH_Photoshop_v6.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>

    {{--ÉLÉMENT STATIQUE MULTI-COLONNES--}}
    <!-- BORDERED : NOM DU PROJET --> {{--Compléter le nom du projet--}}
    <div id='projet-1' class='portfolio-bordered'> {{--Donner un id au projet--}}
        <div class="d-flex flex-wrap flex-column flex-sm-row">
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/152_Crissier_MW_Final_P1 Day_v3.jpg') }}" media="(min-width: 1200px)"/> {{--Compléter le chemin source @1280x--}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/152_Crissier_MW_Final_P1 Day_v3.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <picture class="flex-child">
                <source srcset="{{ asset('/media/renders/152_Crissier_MW_Finales_P1 Night_v2.jpg') }}" media="(min-width: 1200px)"/> {{-- Compléter le chemin source @1280x --}}
                <img class="img-fluid" onLoad="updateFlex(this)" src="{{ asset('/media/renders/152_Crissier_MW_Finales_P1 Night_v2.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
        </div>
        <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
            <h1>Titre</h1> {{--Compléter le titre--}}
            <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
            <h2>Bureau</h2> {{--Compléter le bureau--}}
        </div>
    </div>

    {{--ÉLÉMENT PARALLAX PLEIN ÉCRAN--}}
    <!-- PARALLAX : NOM DU PROJET  --> {{--Compléter le nom du projet--}}
    <div id='projet-2' class='portfolio-fullwidth' style="background-color: #A4B2BF;"> {{--Donner un id au projet et compléter la couleur de fond--}}
        <div class="fullwidth-container">
            <div class="parallax-window d-none d-sm-block" data-parallax data-mirror-selector="#parallax-mirror-container" data-z-index="5" data-aspect-ratio="1.43" style="min-height:85vh;"> {{--Compléter le ratio de l'image--}}
                <div class="parallax-slider">
                    <picture>
                        <source srcset="{{ asset('/media/renders/109_Rue_du_Milieu_BB_App1_psd_v1.jpg') }}" media="(min-width: 576px)"/> {{--Compléter le chemin source @2560x--}}
                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt='text alt'> {{--Compléter le texte alternatif--}}
                    </picture>
                </div>
            </div>
            <picture class="d-sm-none">
                <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(min-width: 576px)"/>
                <img class="img-fluid" src="{{ asset('/media/renders/109_Rue_du_Milieu_BB_App1_psd_v1.jpg') }}" alt='text alt'> {{--Compléter le chemin source @640x et texte alternatif--}}
            </picture>
            <div class='legend'style="background-color: #A4B2BF;"> {{--Compléter la couleur de la vignette--}}
                <h1>Titre</h1> {{--Compléter le titre--}}
                <h2 style="font-style:italic;">Ville, CH</h2> {{--Compléter le lieu--}}
                <h2>Bureau</h2> {{--Compléter le bureau--}}
            </div>
        </div>
    </div>
</div>
