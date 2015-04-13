@extends('app')


@section('head')
    @parent
    <link href="{{ asset('vendors/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/light-gallery/lightGallery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/mediaelement/mediaelementplayer.css') }}" rel="stylesheet">
@endsection



@section('content')

	<div class="col-sm-4">
        <!-- Client View -->
        @include('pages.orders.partials.client')
	</div>

    <div class="col-sm-4">
        <!-- Files View -->
        @include('pages.orders.partials.files')
    </div>

    <div class="col-sm-4">
        <!-- Order View -->
        @include('pages.orders.partials.orderstatus')
    </div>


@endsection



@section('footer')
    @parent
    <script src="{{ asset('vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('vendors/waves/waves.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('vendors/light-gallery/lightGallery.min.js') }}"></script> 
    <script src="{{ asset('vendors/mediaelement/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('vendors/sweet-alert/sweet-alert.min.js') }}"></script>
@endsection