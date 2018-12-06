<!-- Extend the layout -->
@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Help')

@section('header')
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a class="nav-link active" data-togle="tab" href="#tab-1">Uitloggen</a></li>
                        <li><a class="nav-link" data-togle="tab" href="#tab-2">Registreren</a></li>
                        <li><a class="nav-link" data-togle="tab" href="#tab-3">Gegevens</a></li>
                        <li><a class="nav-link" data-togle="tab" href="#tab-4">Bewerk</a></li>
                        <li><a class="nav-link" data-togle="tab" href="#tab-5">Tijd Uit</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="table-responsive">
                                    <div role="tabpanel" id="tab-1" class="tab-pane active">
                                            <div class="panel-body">

                                                <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                                    existence in this spot, which was created for the bliss of souls like mine.</p>

                                                    <img src="images/uitloggen.jpg">
                                            </div>
                                    </div>
                                    <div role="tabpanel" id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                                <img src="images/registreren.jpg"><br>
                                                <img src="images/registreren2.jpg"><br>
                                            </div>
                                        </div>
                                    <div role="tabpanel" id="tab-3" class="tab-pane">
                                        <div class="panel-body">
                                                <img src="images/gegevens.jpg"><br>
                                                <img src="images/gegevens1.jpg"><br>
                                            </div>
                                        </div>
                                    <div role="tabpanel" id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                                <img src="images/bewerk.jpg"><br>
                                                <img src="images/bewerk1.jpg"><br>
                                                <img src="images/bewerk2.jpg"><br>
                                            </div>
                                        </div>
                                    <div role="tabpanel" id="tab-5" class="tab-pane">
                                        <div class="panel-body">
                                                <img src="images/tijduit.jpg"><br>
                                                <img src="images/tijduit1.jpg"><br>
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
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection
