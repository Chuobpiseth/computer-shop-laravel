@extends('backend.layouts.layout')
@section('title','Edit')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Laptop</h4>
        <form action="{{url('/admin/products/laptop/'.$laptop->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Short Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='l_sname' value="{{$laptop->l_shortname}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Long Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="l_lname" value="{{$laptop->l_longname}}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">CPU</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='cpu' value="{{$laptop->l_cpu}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">RAM</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="ram" value="{{$laptop->l_ram}}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">SSD</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='ssd' value="{{$laptop->l_ssd}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">GPU</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="gpu" value="{{$laptop->l_gpu}}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Screen</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='screen' value="{{$laptop->l_screen}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Battery</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="battery" value="{{$laptop->l_battery}}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Brand</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='brand' value="{{$laptop->l_brand}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Warranty</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="warranty" value="{{$laptop->l_warranty}}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Old Price</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name='oprice' value="{{$laptop->l_oprice}}">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">New Price</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nprice" value="{{$laptop->l_nprice}}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <img src="{{asset($laptop->l_img)}}" style="width:300px">
              <div class="form-group row">

                <label class="col-sm-3 col-form-label">Re-Upload Image</label>
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
                  <textarea class="form-control" style="width:50%;height:300px" name='desc' >{{$laptop->l_desc}}</textarea>
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

