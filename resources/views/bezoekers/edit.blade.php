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
                        <form action="/home/{{ $bezoekers->id }}" method="post" class="form-horizontal">
                            {{ method_field('PATCH') }}
                        @csrf

                        @include ('layouts.errors')

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
                            <div class="col-sm-10">
                                @if ( $bezoekers->platenumber == '')
                                <input type="text" name="platenumber">
                                @else
                                    {{ $bezoekers->platenumber }}
                                    <input type="hidden" name="platenumber" value="{{ $bezoekers->platenumber }}">
                                @endif
                                </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Reason for visit') }}</label>
                            <div class="col-sm-10">
                                @if ( $bezoekers->reason == '')
                                <input type="text" name="reason">
                                @else
                                    {{ $bezoekers->reason }}
                                    <input type="hidden" name="reason" value="{{ $bezoekers->reason }}">
                                @endif
                                </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Particularities') }}</label>
                            <div class="col-sm-10">
                                @if ( $bezoekers->particularities == '')
                                <input type="text" name="particularities">
                                @else
                                    {{ $bezoekers->particularities }}
                                    <input type="hidden" name="particularities" value="{{ $bezoekers->particularities }}">
                                @endif
                                </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Property access') }}</label>
                            <div class="col-sm-10">
                                @if ( $bezoekers->propertyaccess > 0)
                                Ja
                                @else
                                    {{ $bezoekers->particularities }}
                                    <div class="col-sm-10"><input type="checkbox" name="propertyaccess" value="1"></div>
                                @endif
                                </div>
                        </div>
                        {{-- <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">{{ __('Time Out') }}</label>
                            <div class="col-sm-10"><input type="text" name="timeout" value="{{ Carbon\Carbon::now(-3)->format('H:i') }}"></div>
                        </div> --}}
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

@section('scripts')
<!-- Script -->
@endsection
