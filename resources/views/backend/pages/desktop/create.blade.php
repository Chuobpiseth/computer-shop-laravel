@extends('backend.layouts.layout')
@section('title','Create')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Desktop</h4>
        <form action="{{ url('/admin/products/desktop') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Desktop Name</label>
                <input type="text" class="form-control" name="d_name">
            </div>
            <div class="form-group">
                <label>CPU</label>
                <input type="text" class="form-control" name="cpu">
            </div>
            <div class="form-group">
                <label>RAM</label>
                <input type="text" class="form-control" name="ram">
            </div>
            <div class="form-group">
                <label>SSD</label>
                <input type="text" class="form-control" name="ssd">
            </div>
            <div class="form-group">
                <label>GPU</label>
                <input type="text" class="form-control" name="gpu">
            </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="d_img">
            </div>
            <button type="submit" class="btn btn-rounded btn-primary py-3 px-4"><span>Save</span></button>
            <a href="{{ url('/admin/products/desktop') }}" class="btn btn-rounded btn-danger p-3 fw-bold">Cancel</a>
        </form>
      </div>
    </div>
</div>
@endsection
