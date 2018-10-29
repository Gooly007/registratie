<!-- Extend the layout -->
@extends('bezoekers.layouts.app')

<!-- Assign page title -->
@section('title', 'Error')

@section('header')

@endsection

<!-- Content of page -->
@section('content')
<!-- Content -->
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                {{ __('Sorry, the page you are looking for could not be found.') }}
                            </h1>
                            <small>
                                <a href="main">{{ __('Go Home') }}</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')
<!-- Script -->
@endsection
