@extends('frontend.layouts.default')
@section('title', 'Desktop')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">
                <section>
                    <div class="container px-3 px-lg-5 mt-3 mt-md-5" style="margin-top: 150px">
                        <div class="row align-items-start p-4">
                            <div class="col-lg-6 col-md-4">
                                <img src="{{ asset($desktop->d_img) }}" style="width:100%;border:solid black 1px">
                            </div>
                            <div class="col-lg-6 col-md-4 mt-3" style="padding-left: 30px">
                                <h2 class="mb-3" style="width: 100%">{{ $desktop->d_name }}</h2>
                                <ul class="h3">
                                    <li class="mb-3"><i class="fa-solid fa-microchip"></i> : {{ $desktop->d_cpu }}</li>
                                    <li class="mb-3"><i class="fa-solid fa-memory"></i> : {{ $desktop->d_ram }}</li>
                                    <li class="mb-3"><i class="fa-solid fa-hard-drive"></i> : {{ $desktop->d_ssd }}</li>
                                    <li class="mb-3"><i class="fas fa-chart-bar"></i> : <b>{{ $desktop->d_gpu }}</b></li>
                                    <li class="h1 text-danger fw-bold">${{ $desktop->d_price }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
