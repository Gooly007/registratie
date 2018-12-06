<!-- Extend the layout -->
@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Help')

@section('header')

@endsection

<!-- Content of page -->
@section('content')
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                    <div class="ibox-title">
                            <h5>{{ __('Hulp Pagina') }} - &nbsp;
                                <small>{{ __('Selecteer een van de tabulator onderaan om meer te weten over de opties en mogelijkheden') }}</small>
                            </h5>

                        </div>


                   <div class="ibox-content">
                        <div class="tabs-container">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#uitloggen" role="tab" aria-controls="uitloggen" aria-selected="true">Uitloggen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#registreren" role="tab" aria-controls="registreren" aria-selected="false">Registreren</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#gegevens" role="tab" aria-controls="gegevens" aria-selected="false">Gegevens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bewerk" role="tab" aria-controls="bewerk" aria-selected="false">Bewerk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tijduit" role="tab" aria-controls="tijduit" aria-selected="false">Tijd uit</a>
                                </li>
                        </ul>




                    <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="uitloggen" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="panel-body">
                                            <strong>Opties voor Uitloggen</strong>
                                            <p>Op alle paginas zijn 2 opties altijd beschikbaar om uit te loggen. Voor het uitloggen, "logoff", kan je op een van de twee
                                                rood aangegeven locaties, zie plaatje onderaan, clicken.</p>
                                            <img src="images/uitloggen.jpg">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="registreren" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="panel-body">
                                        <strong>Nieuw bezoeker registreren</strong>
                                        <p>Plaatje 1: click op rood aangegeven optie om een nieuw bezoeker te registreren.<br>
                                        Plaatje 2: De rood aangegeven velden zijn verplicht. Indien een van de verplichte velden niet is ingevuld,
                                    het registreren zal niet voltooien en je krijgt een melding welke veld(en) nog ingevuld moet(en) worden.</p>
                                        <p>< Plaatje 1 ><br><img src="images/registreren.jpg"></p>
                                        <p>< Plaatje 2 ><br><img src="images/registreren2.jpg"></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gegevens" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="panel-body">
                                        <strong>Gegevens van actieve bezoekers bekijken.</strong>
                                        <p>Registratie gevens kan ten allertijde bekeken worden. Ga op de pagina 'Overzicht'.
                                            Alle actieve registraties zijn te zien. Selecteer de bezoeker (plaatje 1) wie zijn/haar gegevens wil oproepen.
                                        Daarin zie je de ingevoerd gegevens van de bezoeker. (plaatje 2)</p>
                                        <p>< Plaatje 1 ><br><img src="images/gegevens.jpg"></p>
                                        <p>< Plaatje 2 ><br><img src="images/gegevens1.jpg"></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bewerk" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="panel-body">
                                        <strong>Gegevens toevoegen van actieve bezoeker.</strong>
                                        <p><i>Bij de registratie alle verplichte velden kunnen niet meer worden aangepast.</i><br>
                                            Indien 'kenteken' en of 'bijzonderheden' (Plaatje 2) is of zijn niet ingevuld, kan je 'bewerken' (plaatje 1) alsnog gebruiken.
                                            Na de nog in te vullen velden zijn bewerkt, kan deze niet meer aangepast worden.
                                        </p>
                                        <p>< Plaatje 1 ><br><img src="images/bewerk.jpg"></p>
                                        <p>< Plaatje 2 ><br><img src="images/bewerk2.jpg"></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tijduit" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="panel-body">
                                        <strong>Tijd uit wanneer bezoeker locatie verlaat.</strong>
                                        <p>Wanneer actieve bezoeker locatie verlaat, moet je pasje terug nemen en 'Overzicht' bij de naam van de bezoker op 'Tijd uit' (plaatje 1)
                                            clicken.<br>
                                            Je krijgt een notificatie (plaatje 2) om te vragen dat je zeker bent van je keuze.<br>
                                            Als je op "Bewerk" clickt, wordt je terug gestuurd naar Overzicht pagina en de registratie van de bezoeker zal niet meer
                                            in lijst voorkomen.
                                        </p>
                                        <p>< Plaatje 1 ><img src="images/tijduit.jpg"></p>
                                        <p>< Plaatje 2 ><img src="images/tijduit1.jpg"></p>
                                    </div>
                                </div>


                        </div>

                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
@endsection
