@extends('backend.layouts.layout')
@section('title','Create')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Laptop</h4>
        <form action="{{url('/admin/products/laptop')}}" method="POST" enctype="multipart/form-data" >
            @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Short Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='l_sname'>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Long Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="l_lname">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">CPU</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='cpu'>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">RAM</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="ram">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">SSD</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='ssd'>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">GPU</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="gpu">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Screen</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='screen'>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Battery</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="battery">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Brand</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='brand'>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Warranty</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="warranty">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Old Price</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='oprice'>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">New Price</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nprice">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name='l_img'>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Description</label>
                <div style="width:100%;">
                  <textarea class="form-control" style="width:50%;height:300px" name='desc'></textarea>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-rounded btn-primary py-3 px-4 "><span>Save</span></button>
          <a href="{{url('/admin/products/laptop')}}" class="btn btn-rounded btn-danger p-3 fw-bold">Cancel</a>
        </form>


      </div>
    </div>
  </div>
@endsection
