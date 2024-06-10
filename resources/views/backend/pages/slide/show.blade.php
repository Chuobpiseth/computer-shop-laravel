@extends('backend.layouts.layout')
@section('title','Show Slide')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Slide Detail</h4>
        <form action="{{url('/admin/slide/'.$slide->id)}}" method="get" enctype="multipart/form-data" >
            @csrf
            @method('get')
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Slide title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name='title' value="{{$slide->s_title}}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                <img src="{{asset($slide->s_img)}}" style="width:100%;height:auto;" class="mt-3 mb-5">

                </div>
              </div>
         <a href="{{url('/admin/slide')}}" class="btn btn-rounded btn-danger p-3 fw-bold">Back</a>
        </form>


      </div>
    </div>
  </div>
@endsection


