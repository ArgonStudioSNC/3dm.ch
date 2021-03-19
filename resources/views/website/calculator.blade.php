@extends('layouts.calculator')

@section('page-title', 'Calculator - ')

@section('content')
<div id=fullpage>
    <div id=slide-1 class="section theme-1 grid-container fluid">
        <div class="grid-y grid-frame grid-padding-y">
            <div class="cell">
                <div class="grid-x">
                    <div class="cell small-10">
                        <h2 class="underlined">Une image 100% Swiss made&nbsp;?</h2>
                        <h4 class="subheader">C’est clair&nbsp;! 3DM est une entreprise biennoise spécialisée dans la visualisation pour les concours d’architecture.</h4>
                    </div>
                </div>
            </div>
            <div class="cell auto my-logo">
                <img src="{{ asset('storage/icons/3dm-logo-short.svg') }}" alt='[3DM logo]'>
            </div>
        </div>
    </div>
    <div id=slide-2 class="section theme-3 grid-container full" style="background-image: url({{ asset('/storage/calculator/196_Thun_BB_Ext@1280.jpg') }});">
        <h4>Comadur-Areal<br>Bart & Buchhofer Architekten</h4>
    </div>
    <div id=slide-3 class="section theme-2 grid-container fluid">
        <div class="grid-x grid-padding-y">
            <div class="cell small-10">
                <h2>Nos tarifs sont transparents, maîtrisés, et dégressifs.</h2>
            </div>
        </div>
    </div>
    <div id=slide-4 class="section theme-1 grid-container fluid">
        <div class="grid-x grid-padding-y">
            <div class="cell small-10">
                <h2>Le style a son importance.</h2>
            </div>
        </div>
        <div class="carousel embla">
            <div class="embla__container">
                <div class="embla__slide">
                    <div class="title">
                        <h4 class="subheader">Réaliste</h4>
                        Inspiré du photoréalisme.
                    </div>
                    <img src="{{ asset('storage/calculator/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='[Image de rendu]'>
                </div>
                <div class="embla__slide">
                    <div class="title">
                        <h4 class="subheader">Illustration</h4>
                        Aplats de teintes et textures.
                    </div>
                    <img src="{{ asset('storage/calculator/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='[Image de rendu]'>
                </div>
                <div class="embla__slide">
                    <div class="title">
                        <h4 class="subheader">Maquette</h4>
                        Papiers et cartons virtuels
                    </div>
                    <img src="{{ asset('storage/calculator/render-allebruhlmattenstresse-bienne-exterieur-bartbuchhoferarchitektenag-2019@640.jpg') }}" alt='[Image de rendu]'>
                </div>
            </div>
        </div>
    </div>
    <div id=slide-5 class="section theme-2 grid-container fluid">
        <div class="grid-y grid-frame grid-padding-y align-justify">
            <div class="cell">
                <div class="grid-x">
                    <div class="cell small-10">
                        <h2>Tu veux connaître nos tarifs&nbsp;?</h2>
                    </div>
                </div>
            </div>
            <div class="cell">
                <label class="select-container">
                    <select id="select-style">
                        <option value="" disabled selected hidden>Style</option>
                        <option value="realistic">Réaliste</option>
                        <option value="illustration">Illustration</option>
                        <option value="model">Maquette</option>
                    </select>
                </label>
                <label class="select-container">
                    <select id="select-quantity">
                        <option value="" disabled selected hidden>Quantité</option>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </label>
                <h2 class="text-center total">
                    <span id="output-total">CHF 0.00</span>
                </h2>
            </div>
            <div class="cell">
                <div class="grid-x align-right">
                    <div class="cell small-9 text-right">
                        Les prix indiqués sont hors TVA et sont non contractuels
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=slide-6 class="section theme-1 grid-container fluid">
        <div class="grid-x grid-padding-y">
            <div class="cell small-10">
                <h2 class="underlined">C’est parti pour ton concours&nbsp;?</h2>
                <h4 class="subheader">Contacte-nous pour connaître nos disponibilités.</h4>
            </div>
        </div>
        <div class="button-group hollow stacked">
            <button class="button" onclick="fullpage_api.moveSectionDown();">Formulaire</button>
            <a href="tel:+41323232503" class="button">+41 (0)32 323 25 03</a>
            <a href="mailto:contact@3dm.ch" class="button">contact@3dm.ch</a>
        </div>
    </div>
    <div id=slide-7 class="section theme-2 grid-container fluid">
        <div class="grid-y grid-padding-y align-middle">
            <div class="cell">
                <div class="grid-x">
                    <h2 class="cell small-10">Qui&nbsp;? Quoi&nbsp;? Comment&nbsp;?</h2>
                </div>
            </div>
            <div class="cell">
                <form id=offer-form method="POST" action="javascript:void(0)">
                    @csrf
                    <label class="select-container">
                        <select name='courtesy'>
                            <option value="" disabled selected hidden>Titre</option>
                            <option value="missus">Mme</option>
                            <option value="miss">Mlle</option>
                            <option value="mister">M.</option>
                        </select>
                    </label>
                    <label class="input-container">
                        <input name='name' type="text" placeholder="Prénom & Nom" required/>
                    </label>
                    <label class="input-container">
                        <input name='company' type="text" placeholder="Entreprise" required/>
                    </label>
                    <label class="input-container">
                        <input name='email' type="email" placeholder="E-mail" required/>
                    </label>
                    <label class="input-container">
                        <input name='competition_name' type="text" placeholder="Nom du concours" required/>
                    </label>
                    <label class="input-container">
                        <input name='due_date' type="text" onfocus="(this.type='date')" placeholder="Date de rendu officiel" required/>
                    </label>
                    <label class="select-container">
                        <select id=offer-form-style name='style' required>
                            <option value="" disabled selected hidden>Style</option>
                            <option value="realistic">Réaliste</option>
                            <option value="illustration">Illustration</option>
                            <option value="model">Maquette</option>
                        </select>
                    </label>
                    <label class="input-container">
                        <input id=offer-form-quantity name='nb_renders' type="number" placeholder="Nombre d'images" required/>
                    </label>
                </form>
            </div>
            <div class="cell">
                <div class="grid-x align-center">
                    <button id=submit type="submit" form="offer-form" class="button cell">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
    <div id=slide-8 class="section theme-2 grid-container fluid">
        <div class="grid-x grid-padding-y">
            <div class="cell small-10">
                <h2 class="underlined">On se réjouit de collaborer avec toi&nbsp;!</h2>
                <div class="coworker"><h4 class="subheader">Nathan Boder</h4>Architecte HES</div>
                <div class="coworker"><h4 class="subheader">Michela Parrini</h4>Architetto UniFI</div>
                <div class="coworker"><h4 class="subheader">Aline Dauwalder</h4>Architecte HES</div>
                <div class="coworker"><h4 class="subheader">Loïc Charrière</h4>Ingénieur Informaticien HES</div>
            </div>
        </div>
    </div>
    <div id=slide-9 class="section theme-3" style="background-image: url({{ asset('/storage/calculator/render-centre-scolaire-vernets-exterieur-bbharchitectes-2018@1280.jpg') }});background-position-x: right -100px;">
        <h4>Centre scolaire des Vernets<br>BBH Architectes</h4>
    </div>
    <div id=slide-10 class="section theme-1 grid-container fluid">
        <div class="grid-y grid-padding-y">
            <div class="cell">
                <div class="grid-x">
                    <div class="cell small-10">
                        <h2 class="underlined">Envie d’en voir plus&nbsp;?</h2>
                    </div>
                </div>
                <h4 class="subheader">Consulte nos différentes réseaux pour te faire une meilleure idée de nos compétences.</h4>
            </div>
        </div>
        <div class="button-group hollow stacked">
            <a href="https://www.instagram.com/3dm_visuals/" target="_blank" class="button">Instagram</a>
            <a href="https://www.linkedin.com/company/3dm-visualisations-architecturales/" target="_blank" class="button">Linkedin</a>
            <a href="https://www.facebook.com/www.3dm.ch/" target="_blank" class="button">Facebook</a>
            <a href="https://3dm.ch/" target="_blank" class="button">Site web</a>
        </div>
    </div>
</div>

<div id=my-fp-nav>
    <div class="grid-container fluid">
        <button id=slide-up onclick="fullpage_api.moveSectionUp();" disabled>
            <svg class="chevron chevron--up" viewBox="0 0 20.75 14.05"><use href="{{ Storage::url('icons/vector.svg#chevron') }}" /></svg>
        </button>
        <button id=slide-down onclick="fullpage_api.moveSectionDown();">
            <svg class="chevron chevron--down" viewBox="0 0 20.75 14.05"><use href="{{ Storage::url('icons/vector.svg#chevron') }}" /></svg>
        </button>
    </div>
</div>
@endsection
