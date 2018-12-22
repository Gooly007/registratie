<!-- Extend the layout -->
@extends('layouts.app')

<!-- Assign page title -->
@section('title', 'Registreer')

@section('header')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

<!-- Content of page -->
@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ __('Visitor Registration') }} - &nbsp;
                            <small>{{ __('New registration') }}</small>
                        </h5>
                    </div>

                    <div class="ibox-content">
                        <form action="{{ action('BezoekersController@store') }}" method="post" class="form-horizontal">
                        @csrf

                            @include('layouts.errors')

                        <input type="hidden" name="username" value="{{ Auth::user()->username }}">
                        <input type="hidden" name="timein" value="{{ Carbon\Carbon::now(-3)->format('H:i') }}">
                        <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Lastname') }}</label>
                            <div class="col-sm-10"><input type="text" name="lastname" value="{{ old('lastname') }}" required> </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Firstname') }}</label>
                            <div class="col-sm-10"><input type="text" name="firstname" value="{{ old('firstname') }}" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('ID') }}</label>
                            <div class="col-sm-10"><input type="text" name="sedula" value="{{ old('sedula') }}" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Badge #') }}</label>
                            <div class="col-sm-10"><input type="text" name="badge" value="{{ old('badge') }}" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Plate Number') }}</label>
                            <div class="col-sm-10"><input type="text" name="platenumber" value="{{ old('platenumber') }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Reason for visit') }}</label>
                            <div class="col-sm-10"><input type="text" name="reason" value="{{ old('reason') }}" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Person or Department') }}</label>
                            <div class="col-sm-10"><input type="text" name="person" value="{{ old('person') }}" required></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Particularities') }}</label>
                            <div class="col-sm-10"><input type="text" name="particularities" value="{{ old('particularities') }}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Property access') }}</label>
                            <div class="col-sm-10"><input type="checkbox" name="propertyaccess" value="1"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Date') }}</label>
                            <div class="col-sm-10"><p class="form-control-static">{{ date('d-m-Y') }}</p></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Time In') }}</label>
                            <div class="col-sm-10"><p class="form-control-static">{{ Carbon\Carbon::now(-3)->format('H:i') }}</p></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
