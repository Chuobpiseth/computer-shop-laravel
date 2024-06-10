@extends('backend.layouts.layout')
@section('title','Edit')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Desktop</h4>
        <form action="{{ url('/admin/products/desktop/'.$desktop->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Desktop Name</label>
                <input type="text" class="form-control" name="d_name" value="{{$desktop->d_name}}">
            </div>
            <div class="form-group">
                <label>CPU</label>
                <input type="text" class="form-control" name="cpu" value="{{$desktop->d_cpu}}">
            </div>
            <div class="form-group">
                <label>RAM</label>
                <input type="text" class="form-control" name="ram" value="{{$desktop->d_ram}}">
            </div>
            <div class="form-group">
                <label>SSD</label>
                <input type="text" class="form-control" name="ssd" value="{{$desktop->d_ssd}}">
            </div>
            <div class="form-group">
                <label>GPU</label>
                <input type="text" class="form-control" name="gpu" value="{{$desktop->d_gpu}}">
            </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" name="brand" value="{{$desktop->d_brand}}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value="{{$desktop->d_price}}">
            </div>

            <img src="{{asset($desktop->d_img)}}" style="width:300px">
            <div class="form-group">
                <label>Re-Upload Image</label>
                <input type="file" class="form-control" name="d_img">
            </div>
            <button type="submit" class="btn btn-rounded btn-primary py-3 px-4"><span>Save</span></button>
            <a href="{{ url('/admin/products/desktop') }}" class="btn btn-rounded btn-danger p-3 fw-bold">Cancel</a>
        </form>
      </div>
    </div>
</div>
@endsection
