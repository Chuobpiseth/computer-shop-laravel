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
                      <div class="carousel-item active">
                        <img src="{{asset('upload/imgs/slide/slide1.jpg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('upload/imgs/slide/slide2.jpg')}}" class="d-block w-100" alt="...">
                      </div>
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
                <h2 class="my-2 ">Asus</h2><hr class="text-grey">
                <div class="d-flex">
                    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- brand-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Asus</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset('upload/imgs/products/asus1.png')}}" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-center">ASUS Vivobook Go14</h5>
                                        <!-- Product Detail-->
                                        <p class="card-text">
                                            <ul>
                                              <li><i class="fa-solid fa-microchip"></i> : Intel® Core i3-N305</li>
                                              <li><i class="fa-solid fa-memory"></i> : 8GB DDR4 SO-DIMM</li>
                                              <li><i class="fa-solid fa-hard-drive"></i> : SSD 512GB M.2</li>
                                              <li><i class="fas fa-chart-bar"></i> : <b>Intel® UHD Graphics</b></li>

                                            </ul>
                                          </p>
                                        <!-- Product price-->
                                        <div class="text-center fw-bold mt-3" >

                                        <span class="text-muted text-decoration-line-through ">$549</span>
                                        <span class="text-xxl text-danger" style="font-size:30px;">$489</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Product Detail</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- brand-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Asus</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset('upload/imgs/products/asus1.png')}}" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-center">ASUS Vivobook Go14</h5>
                                        <!-- Product Detail-->
                                        <p class="card-text">
                                            <ul>
                                              <li><i class="fa-solid fa-microchip"></i> : Intel® Core i3-N305</li>
                                              <li><i class="fa-solid fa-memory"></i> : 8GB DDR4 SO-DIMM</li>
                                              <li><i class="fa-solid fa-hard-drive"></i> : SSD 512GB M.2</li>
                                              <li><i class="fas fa-chart-bar"></i> : <b>Intel® UHD Graphics</b></li>

                                            </ul>
                                          </p>
                                        <!-- Product price-->
                                        <div class="text-center fw-bold mt-3" >

                                        <span class="text-muted text-decoration-line-through ">$549</span>
                                        <span class="text-xxl text-danger" style="font-size:30px;">$489</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Product Detail</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- brand-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Asus</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset('upload/imgs/products/asus1.png')}}" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-center">ASUS Vivobook Go14</h5>
                                        <!-- Product Detail-->
                                        <p class="card-text">
                                            <ul>
                                              <li><i class="fa-solid fa-microchip"></i> : Intel® Core i3-N305</li>
                                              <li><i class="fa-solid fa-memory"></i> : 8GB DDR4 SO-DIMM</li>
                                              <li><i class="fa-solid fa-hard-drive"></i> : SSD 512GB M.2</li>
                                              <li><i class="fas fa-chart-bar"></i> : <b>Intel® UHD Graphics</b></li>

                                            </ul>
                                          </p>
                                        <!-- Product price-->
                                        <div class="text-center fw-bold mt-3" >

                                        <span class="text-muted text-decoration-line-through ">$549</span>
                                        <span class="text-xxl text-danger" style="font-size:30px;">$489</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Product Detail</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- brand-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Asus</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="{{asset('upload/imgs/products/asus1.png')}}" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-center">ASUS Vivobook Go14</h5>
                                        <!-- Product Detail-->
                                        <p class="card-text">
                                            <ul>
                                              <li><i class="fa-solid fa-microchip"></i> : Intel® Core i3-N305</li>
                                              <li><i class="fa-solid fa-memory"></i> : 8GB DDR4 SO-DIMM</li>
                                              <li><i class="fa-solid fa-hard-drive"></i> : SSD 512GB M.2</li>
                                              <li><i class="fas fa-chart-bar"></i> : <b>Intel® UHD Graphics</b></li>

                                            </ul>
                                          </p>
                                        <!-- Product price-->
                                        <div class="text-center fw-bold mt-3" >

                                        <span class="text-muted text-decoration-line-through ">$549</span>
                                        <span class="text-xxl text-danger" style="font-size:30px;">$489</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Product Detail</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center align-items-center m-3 ">
                        <a href="" class="text-center bg-primary p-2 text-light fw-bold rounded-circle border" style="">More </a><i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </section>
          <!-- ***** Most Popular End ***** -->

        </div>
      </div>





  @endsection
