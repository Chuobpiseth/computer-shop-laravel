@extends('frontend.layouts.default')
@section('title','Home')
@section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** slideshow Start ***** -->
          <div class="container">
            <div class=" p-1">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @php $isFirst = true; @endphp
                      @foreach ($allslideshows as $slide)
                      <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
                        <img src="{{ asset($slide->s_img) }}" class="d-block w-100" alt="...">
                    </div>
                      @php $isFirst = false; @endphp
                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
              </div>
          </div>
          <!-- ***** slide show End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <section class="">
            <div class="container px-3 px-lg-5 mt-1">
                <h2 class="my-2 ">New laptops</h2><hr class="text-grey">
                <div class="d-flex">
                    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($latestLaptops  as $laptop )
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
                    <div class="d-flex justify-content-center align-items-center m-3 ">
                        <a href="/laptops" class="text-center bg-primary p-2 text-light fw-bold rounded-circle border" style="">More </a><i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="container px-3 px-lg-5 mt-1">
                <h2 class="my-2 ">New Desktops</h2><hr class="text-grey">
                <div class="d-flex">
                    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($lastFourDesktops  as $desktop )
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- brand-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$desktop->d_brand}}</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset($desktop->d_img)}}" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-center">{{$desktop->d_name}}</h5>
                                        <!-- Product Detail-->
                                        <p class="card-text">
                                            <ul>
                                              <li><i class="fa-solid fa-microchip"></i> : {{$desktop->d_cpu}}</li>
                                              <li><i class="fa-solid fa-memory"></i> : {{$desktop->d_ram}}</li>
                                              <li><i class="fa-solid fa-hard-drive"></i> : {{$desktop->d_ssd}}</li>
                                              <li><i class="fas fa-chart-bar"></i> : <b>{{$desktop->d_gpu}}</b></li>

                                            </ul>
                                          </p>
                                        <!-- Product price-->
                                        <div class="text-center fw-bold mt-3" >
                                        <span class="text-xxl text-danger" style="font-size:30px;">${{$desktop->d_price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/desktop/detail/{{$desktop->id}}">Product Detail</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="d-flex justify-content-center align-items-center m-3 ">
                        <a href="/desktop" class="text-center bg-primary p-2 text-light fw-bold rounded-circle border" style="">More </a><i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </section>
          <!-- ***** Most Popular End ***** -->

        </div>
      </div>





  @endsection
