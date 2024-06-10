@extends('frontend.layouts.default')
@section('title', 'Laptop')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">
                <section>
                    <div class="container px-3 px-lg-5 mt-3 mt-md-5" style="margin-top: 150px">
                        <div class="row align-items-start p-4">
                            <div class="col-lg-6 col-md-4">
                                <h4 class="mb-3" style="width: 100%">{{ $laptop->l_shortname }}</h4>
                                <img src="{{ asset($laptop->l_img) }}" style="width:100%;border:solid black 1px">
                            </div>
                            <div class="col-lg-6 col-md-4 mt-3" style="padding-left: 30px">
                                <h4 class="mb-3" style="width: 100%">{{ $laptop->l_longname }}</h4>
                                <ul class="h3">
                                    <li class="mb-3"><i class="fa-solid fa-microchip"></i> : {{ $laptop->l_cpu }}</li>
                                    <li class="mb-3"><i class="fa-solid fa-memory"></i> : {{ $laptop->l_ram }}</li>
                                    <li class="mb-3"><i class="fa-solid fa-hard-drive"></i> : {{ $laptop->l_ssd }}</li>
                                    <li class="mb-3"><i class="fas fa-chart-bar"></i> : <b>{{ $laptop->l_gpu }}</b></li>
                                    <li class="mb-3"><i class="fa-solid fa-desktop"></i> : {{ $laptop->l_screen }}</li>
                                    <li class="mb-3"><i class="fa-solid fa-battery-full"></i> : {{ $laptop->l_battery }}</li>
                                    <li class="mb-3"><i class="fa-solid fa-certificate"></i>: {{ $laptop->l_warranty }} years</li>
                                    <li class="mb-3"><i class="fas fa-copyright"></i>: {{ $laptop->l_brand }}</li>
                                    <li class="h1 text-danger fw-bold"><span class="text-dark">Price :</span> ${{ $laptop->l_nprice }}</li>
                                </ul>
                            </div>
                            <hr class="text-dark"/>
                            <h4><b>Product Description</b></h4>
                            <p>{{$laptop->l_desc}}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
