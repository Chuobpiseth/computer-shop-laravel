@extends('backend.layouts.layout')
@section('title', 'Slide')
@section('content')
    <div class="row ">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Slide List</h3>
                    <a href="{{url('/admin/slide/create')}}"><button class="btn btn-primary btn-rounded p-3">Add new slide</button></a>
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th> No </th>
                                <th> Slide Title </th>
                                <th> Slide Image </th>
                                <th> Created at </th>
                                <th > Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $slides as $slide)
                            <tr>
                                <td class=""> {{$loop->iteration}} </td>
                                <td>
                                    {{$slide->s_title}}
                                </td>

                                <td> <img src="{{asset($slide->s_img)}}" style="width:300px;height:auto;border-radius:0px;" class=""> </td>
                                <td> {{$slide->created_at}}</td>
                                <td>
                                    <a href="{{url('/admin/slide/'.$slide->id.'/edit')}}"><button type="button" class="btn btn-primary btn-rounded p-3"><i class="fa fa-edit"></i>Edit</button></a>
                                    <a href="{{url('/admin/slide/'.$slide->id)}}"><button type="button" class="btn btn-warning btn-rounded p-3"><i class="fa fa-address-card"></i>Show</button></a>
                                    <form id="del_form_{{$slide->id}}" action="{{url('/admin/slide/'.$slide->id)}}"  method="POST" style="display:none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <a href="#" onclick="event.preventDefault();document.getElementById('del_form_{{$slide->id}}').submit();" class="btn btn-danger btn-rounded p-3"><i class="fa fa-trash"></i>Delete</a>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
