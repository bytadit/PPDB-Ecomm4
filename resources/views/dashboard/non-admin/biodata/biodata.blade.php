@extends('layouts.master')
@section('title') @lang('Sipensaru') @endsection
@section('css')

    <link href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}" rel="stylesheet">

@endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Menu Pendaftar @endslot
        @slot('title') Biodata @endslot
    @endcomponent
 
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/dashboard-crypto.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
