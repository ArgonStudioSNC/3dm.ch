@extends('layouts.website')

@section('page-title', 'En savoir plus - ')

@section('navigation')
<nav id='navigation' class='custom-navbar d-flex flex-row align-items-center' role='navigation'>
    <a class="navbar-logo" href="{{ route('www.portfolio') }}">
        <img src="{{ asset('/img/3dm-logo-navigation.svg') }}" alt='3dm-logo'>
    </a>
    <a class='navbar-menu' href="{{ route('www.portfolio') }}">
        Portfolio
    </a>
</nav>
@endsection

@section('content')
<div id='more'>
    <div id='vision' class="jumbotron jumbotron-fluid" style="background-color:var(--bg-brown);">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Vision</h1>
                </div>
                <div class="col-sm-9">
                    <div class="row lead">
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
    </div>

    <div id='clients' class="jumbotron jumbotron-fluid" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Clients</h1>
                </div>
                <div class="col-sm-9">
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
    </div>

    <div id='team' class="jumbotron jumbotron-fluid" style="background-color:var(--bg-brown);">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Team</h1>
                </div>
                <div class="col-sm-9">
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
                    <img class="img-fluid" src="{{ asset('/img/140_Neirivue_BBH_Photoshop_Frontal_V4.jpg') }}" alt='3dm-logo'>
                </div>
            </div>
        </div>
    </div>

    <div id='contact' class="jumbotron jumbotron-fluid" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Contact</h1>
                </div>
                <div class="col-sm-9">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <h2>Bureau</h2>
                            <p>3DM<br>Rue du Contrôle 28<br>2503 Biel/Bienne</p>
                        </div>
                        <div class="col">
                            <h2>Réseaux sociaux</h2>
                            <p>Facebook<br>Instagram<br>Linkedin </p>
                        </div>
                        <div class="col">
                            <h2>Contact</h2>
                            <p>contact@3dm.ch<br>+41 (0)32 323 25 03</p>
                        </div>
                        <div class="col">
                            <h2>Revue de presse</h2>
                            <p>TEC21 (10.01.19) : Siège de la voirie DSU, Lugano<br>RJB (31.08.18) : Centre scolaire, Prêles<br>Ticinonline (24.05.18) : Centre scolaire, Lugano<br>Tracés (27.02.17) : Sacré-coeur, Estavayer<br>Le Nouvelliste (24.12.16) : Centre scolaire, Ardon<br>La Liberté (3.11.16) : Sacré-coeur, Estavayer<br>Der Bund (25.11.15) : Via Felsenau, Berne </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
