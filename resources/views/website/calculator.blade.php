@extends('layouts.calculator')

@section('page-title', 'Calculator - ')

@section('content')
<div id=fullpage>
    <div class="section theme-1">
        <div class="grid-container fluid">
            <h2>Une image 100% Swiss made ?</h2>
            <h4 class="subheader">C’est clair! 3DM est une entreprise biennoise spécialisée dans la visualisation pour les concours d’architecture.</h4>
        </div>
    </div>
    <div class="section theme-3" style="background-image: url({{ asset('/storage/renders/20210126/196_Thun_BB_Ext@1280.jpg') }});">
        <h4>Comadur-Areal<br>Bart & Buchhofer Architekten</h4>
    </div>
    <div class="section theme-2">
        <div class="grid-container fluid">
            <h2>Nos tarifs sont transparents, maîtrisés, et dégressifs.</h2>
        </div>
    </div>
    <div class="section theme-1">
        <div class="grid-container fluid">
            <h2>Le style a son importance.</h2>

            Réaliste Inspiré du photoréalisme.

            Illustration Aplats de teintes et textures.

            Maquette Papiers et cartons virtuels
        </div>
    </div>
    <div class="section theme-2">
        <div class="grid-container fluid">
            <h2>Tu veux connaître nos tarifs ?</h2>

            Style

            Quantité

            Les prix indiqués sont hors TVA et sont non contractuels
        </div>
    </div>
    <div class="section theme-1">
        <div class="grid-container fluid">
            <h2>C’est parti pour ton concours ?</h2>
            <h4 class="subheader">Contacte-nous pour connaître nos disponibilités.</h4>

            Formulaire

            +41 (0)32 323 25 03

            contact@3dm.ch
        </div>
    </div>
    <div class="section theme-2">
        <div class="grid-container fluid">
            <h2>Qui ? Quoi ? Comment ?</h2>

            Titre
            Prénom & Nom
            Entreprise
            E-mail
            Nom du concours
            Date de rendu officiel
            Style
            Nombre d'images

            Envoyer
        </div>
    </div>
    <div class="section theme-2">
        <div class="grid-container fluid">
            <h2>On se réjouit de collaborer avec toi !</h2>
            <div class="line"></div>

            Nathan Boder Architecte HES
            Michela Parrini Architetto UniFI
            Aline Dauwalder Architecte HES
            Loïc Charrière Ingénieur Informaticien HES
        </div>
    </div>
    <div class="section theme-3" style="background: url({{ asset('/storage/renders/render-centre-scolaire-vernets-exterieur-bbharchitectes-2018@1280.jpg') }}) center right -100px;">
        <h4>Centre scolaire des Vernets<br>BBH Architectes</h4>
    </div>
    <div class="section theme-1">
        <div class="grid-container fluid">
            <h2>Envie d’en voir plus ?</h2>
            <h4 class="subheader">Consulte nos différentes réseaux pour te faire une meilleure idée de nos compétences.</h4>

            Instagram
            Linkedin
            Facebook
            Site web
        </div>
    </div>
</div>
@endsection
