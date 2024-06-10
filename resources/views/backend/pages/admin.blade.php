@extends('backend.layouts.layout')

@section('content')
    <div class="row"><div class="col-md-4 grid-margin stretch-card average-price-card">
        <div class="card text-white">
          <div class="card-body">
            <div class="d-flex justify-content-between pb-2 align-items-center">
              <h2 class="font-weight-semibold mb-0">{{ $laptopCount }}</h2>
              <div class="icon-holder">
                <i class="mdi mdi-briefcase-outline"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="font-weight-semibold mb-0">Total of Laptops</h5>
              <p class="text-white mb-0">Last updated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card average-price-card">
        <div class="card text-white">
          <div class="card-body">
            <div class="d-flex justify-content-between pb-2 align-items-center">
              <h2 class="font-weight-semibold mb-0">{{ $desktopCount }}</h2>
              <div class="icon-holder">
                <i class="mdi mdi-briefcase-outline"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="font-weight-semibold mb-0">Total of Desktops</h5>
              <p class="text-white mb-0">Last updated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card average-price-card">
        <div class="card text-white">
          <div class="card-body">
            <div class="d-flex justify-content-between pb-2 align-items-center">
              <h2 class="font-weight-semibold mb-0">{{ $slideCount }}</h2>
              <div class="icon-holder">
                <i class="mdi mdi-briefcase-outline"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="font-weight-semibold mb-0">Total of Slide</h5>
              <p class="text-white mb-0">Last updated</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
