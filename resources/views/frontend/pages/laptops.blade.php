@extends('frontend.layouts.default')
@section('title','Laptop')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
           <section>
            <div class="container px-3 px-lg-5 mt-1">
                <h2 class="my-2 ">New laptops</h2><hr class="text-grey">
                <div class="d-flex">
                    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($laptops  as $laptop )
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- brand-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$laptop->l_brand}}</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset($laptop->l_img)}}" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-center">{{$laptop->l_shortname}}</h5>
                                        <!-- Product Detail-->
                                        <p class="card-text">
                                            <ul>
                                              <li><i class="fa-solid fa-microchip"></i> : {{$laptop->l_cpu}}</li>
                                              <li><i class="fa-solid fa-memory"></i> : {{$laptop->l_ram}}</li>
                                              <li><i class="fa-solid fa-hard-drive"></i> : {{$laptop->l_ssd}}</li>
                                              <li><i class="fas fa-chart-bar"></i> : <b>{{$laptop->l_gpu}}</b></li>

                                            </ul>
                                          </p>
                                        <!-- Product price-->
                                        <div class="text-center fw-bold mt-3" >

                                        <span class="text-muted text-decoration-line-through ">${{$laptop->l_oprice}}</span>
                                        <span class="text-xxl text-danger" style="font-size:30px;">${{$laptop->l_nprice}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/laptop/detail/{{$laptop->id}}">Product Detail</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
           </section>
        </div>
    </div>
</div>
</div>
@endsection
