@extends('layouts.site.app')

@section('title','Bem Vindo')

@push('css')
@endpush

@section('content')
    <!-- Full Page Intro -->
    <div class="view">

        <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay muted loop>
            <source src="https://mdbootstrap.com/img/video/Lines-min.mp4" type="video/mp4">
        </video>

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">

                <h1 class="display-4 mb-4">
                    <strong>Em Breve!</strong>
                </h1>

                <!-- Time Counter -->
                <p id="time-counter" class="border border-light my-4"></p>


                <h4 class="mb-4">
                    <strong>Estamos trabalhando duro para finalizar o desenvolvimento da plataforma. </strong>
                </h4>

                <h4 class="mb-4 d-none d-md-block">
                    <strong>Vamos revolucionar o mercado de afiliados...Aguardem!</strong>
                </h4>

                <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Conhecer a Habitoos
                    <i class="fa fa-money ml-2"></i>
                </a>
            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->
@endsection

@push('js')
@endpush