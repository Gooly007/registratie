<!-- Extend the layout -->
@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Visitor')

@section('header')

@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ __('Overview') }} - &nbsp;
                            <small>{{ __('Edit selected visitor') }}</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <form action="/home" method="get" class="form-horizontal">
                        @csrf
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Lastname') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->lastname }}</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Firstname') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->firstname }}</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('ID') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->sedula }}</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Plate Number') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->platenumber }}</div>
                        </div><div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Reason for visit') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->reason }}</div>
                        </div><div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Person') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->person }}</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Particularities') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->particularities }}</div>
                        </div><div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Badge #') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->badge }}</div>
                        </div><div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Date') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->date }}</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Time In') }}</label>
                            <div class="col-sm-10">{{ $bezoekers->timein }}</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">{{ __('Go Home') }}</button>
                                </div>
                            </div>

                        @include ('layouts.errors')

                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection

@section('scripts')
<!-- Script -->
@endsection
