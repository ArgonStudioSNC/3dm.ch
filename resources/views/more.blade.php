@extends('layouts.website')

@section('page-title', 'En savoir plus - ')

@section('content')

@include('shared.navigation', ['text' => 'Portfolio', 'route' => route('www.portfolio')])

<div id='more'>
    <section id='vision' class="jumbotron jumbotron-fluid" style="background-color:var(--light-brown);">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Vision</h1>
                </div>
                <div class="col-sm-8">
                    <div class="row my-lead">
                        <div class="col">
                            <p>3DM est une entreprise jeune et créative spécialisée dans la réalisation d'images et de media pour la visualisation architecturale. Notre expérience dans le domaine de l'architecture, nous permet de comprendre les enjeux de vos projets et de les communiquer efficacement. Durant tout le processus d'élaboration, nous plaçons une attention particulière à l’expression du concept, de la représentation de son atmosphère à sa narration, jusque dans ses moindres détails.</p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <h2>Champs d'activité</h2>
                            <p>Nous sommes principalement actifs dans la création d'images de concours d'architecture, mais également présents pour la présentation de projets et la promotion immobilière. L'architecture se tient toujours au cœur de nos réalisations.</p>
                        </div>
                        <div class="col">
                            <h2>Lumière & Atmosphère</h2>
                            <p>D'une nuit sans nuages à une fin d'après-midi de septembre, le caractère d'une intervention s’appréhende différemment. Une lumière et une atmosphère choisies minutieusement permettent de révéler et de souligner les qualités architecturales et spatiales de chaque projet.</p>
                        </div>
                        <div class="col">
                            <h2>Contexte & Identité</h2>
                            <p>L'expression du caractère d'un projet se fait également dans le rapport que ce dernier entretient avec son environnement. Il est plus aisé d'appréhender l'impact d'une intervention sur son contexte proche et élargi avec une vue d'ensemble.</p>
                        </div>
                        <div class="col">
                            <h2>Narration</h2>
                            <p>Par le cadrage et l'utilisation de personnages, nous nous efforçons de donner vie à vos projets. À travers l'illustration de certaines fonctions du bâtiment, il devient plus facile de se projeter dans l'espace et ainsi de valoriser ses qualités.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id='clients' class="jumbotron jumbotron-fluid" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Clients</h1>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Ad'A architecture Sàrl</p>
                            <p>Atba architecture + énergie SA</p>
                            <p>Atelier 78 Sàrl</p>
                            <p>Bart & Buchhofer Architekten AG</p>
                            <p>BBH Architectes Sàrl</p>
                            <p>Boegli Kramp Architekten AG</p>
                            <p>Bricks AG</p>
                            <p>Bunq SA</p>
                            <p>Chappuis Architectes SA</p>
                            <p>Deschenaux Follonier</p>
                            <p>Dietziker Architekten GmbH</p>
                            <p>Dupasquier Rebetez Architectes</p>
                            <p>Esposito + Javet</p>
                            <p>Epure Architecture et Urbanisme SA</p>
                        </div>
                        <div class="col-md-6">
                            <p>IPAS architectes SA</p>
                            <p>Itten + Brechbühl SA</p>
                            <p>IUB Engineering AG | CFF SA</p>
                            <p>Kistler Vogt Architekten AG</p>
                            <p>LVPH Architectes Sàrl</p>
                            <p>Meno architectes Sàrl</p>
                            <p>Marques AG</p>
                            <p>Maillard Immobilier SA</p>
                            <p>Pierre Gianoli Architectes</p>
                            <p>Previmm Sàrl</p>
                            <p>RBRC architectes Sàrl</p>
                            <p>Rollimarchini Architekten AG</p>
                            <p>Wahlirüefli Architekten und Raumplaner AG</p>
                            <p>WEL Consulting Sàrl</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id='team' class="jumbotron jumbotron-fluid" style="background-color:var(--light-brown);">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Team</h1>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col">
                            <h2>Nathan Boder</h2>
                            <p>Fondateur & directeur</p>
                            <p>1990 Né à Bienne</p>
                            <p>2010 - 2013 Bachelor of Arts in Architecture HES, Fribourg</p>
                            <p>2014 Service civil au sein du service d'urbanisme et d'architecture, Fribourg</p>
                            <p>2015 Architecte chez Kistler Vogt Architectes</p>
                            <p>> 2015 Directeur chez 3DM</p>
                            <p>> 2018 Chargé de cours en expression informatique à la Haute école d'ingénieurie et d'architecture Fribourg</p>
                            <p>> 2019 Co-directeur chez Argon Studio</p>
                            <p>> 2019 Membre de la CPS Jura bernois - Seeland (Commission pour la protection des sites et du paysage)</p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <h2>Michela Parrini</h2>
                            <p>Collaboratrice en visualisations architecturales</p>
                        </div>
                        <div class="col">
                            <h2>Lucien Bösiger</h2>
                            <p>Stagiaire en visualisations architecturales</p>
                        </div>
                        <div class="col">
                            <h2>Aline Dauwalder</h2>
                            <p>Stagiaire en visualisations architecturales</p>
                        </div>
                        <div class="col">
                            <h2>Loïc Charrière</h2>
                            <p>Développement informatique</p>
                        </div>
                        <div class="col">
                            <h2>Entreprises partenaires</h2>
                            <p>Argon Studio | Réalité augmentée et virtuelle</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('/media/3dm-bureau.gif') }}" alt="[Image de l'équipe 3DM]">
                </div>
            </div>
        </div>
    </section>

    <section id='contact' class="jumbotron jumbotron-fluid" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Contact</h1>
                </div>
                <div class="col-sm-8">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <h2>Bureau</h2>
                            <p>3DM<br>Rue du Contrôle 28<br>2503 Biel/Bienne</p>
                        </div>
                        <div class="col">
                            <h2>Réseaux sociaux</h2>
                            <p>
                                <a href="https://www.facebook.com/www.3dm.ch/" target="_blank">Facebook <i class="fab fa-facebook"></i></a><br>
                                <a href="https://www.instagram.com/3dm_visuals/" target="_blank">Instagram <i class="fab fa-instagram"></i></a><br>
                                <a href="https://www.linkedin.com/company/3dm-visualisations-architecturales/" target="_blank">Linkedin <i class="fab fa-linkedin"></i></a>
                            </p>
                        </div>
                        <div class="col">
                            <h2>Contact</h2>
                                <p>
                                    <a href="mailto:contact@3dm.ch" target="_top">contact@3dm.ch</a><br>
                                    <a href="tel:+41323232503">+41 (0)32 323 25 03</a>
                                </p>
                        </div>
                        <div class="col">
                            <h2>Revue de presse</h2>
                            <p>
                                TEC21 (10.01.19) : <a href="https://www.espazium.ch/werkhof-lugano" target="_blank">Siège de la voirie DSU, Lugano <i class="far fa-file-alt"></i></a><br>
                                RJB (31.08.18) : <a href="https://www.rjb.ch/rjb/Actualite/Region/20180831-Plateau-de-Diesse-une-ecole-nommee-Equisetum.html" target="_blank">Centre scolaire, Prêles <i class="far fa-file-alt"></i></a><br>
                                Ticinonline (24.05.18) : <a href="https://www.tio.ch/ticino/attualita/1260947/primo-premio-al-progetto--aria--per-la-scuola-di-viganello" target="_blank">Centre scolaire, Lugano <i class="far fa-file-alt"></i></a><br>
                                Tracés (27.02.17) : <a href="https://www.espazium.ch/agrandissement-du-btiment-scolaire-du-sacrcoeur--estavayerlelac" target="_blank">Sacré-coeur, Estavayer <i class="far fa-file-alt"></i></a><br>
                                Le Nouvelliste (24.12.16) : <a href="https://www.lenouvelliste.ch/articles/valais/valais-central/trois-batiments-un-seul-but-616418" target="_blank">Centre scolaire, Ardon <i class="far fa-file-alt"></i></a><br>
                                La Liberté (3.11.16) : <a href="https://www.lenouvelliste.ch/articles/valais/valais-central/trois-batiments-un-seul-but-616418" target="_blank">Sacré-coeur, Estavayer <i class="far fa-file-alt"></i></a><br>
                                Der Bund (25.11.15) : <a href="https://www.derbund.ch/bern/stadt/via-felsenau-oder-die-quadratur-des-kreises/story/29261249" target="_blank">Via Felsenau, Berne <i class="far fa-file-alt"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="jumbotron jumbotron-fluid" style="background-color:var(--light-brown);"></footer>
</div>

@endsection
