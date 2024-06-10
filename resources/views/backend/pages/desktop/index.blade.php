@extends('backend.layouts.layout')
@section('title', 'Desktop')
@section('content')
    <div class="row ">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Desktop List</h3>
                    <a href="{{url('admin/products/desktop/create')}}"><button class="btn btn-primary btn-rounded p-3">Add Product</button></a>
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th> No </th>
                                <th> Desktop Name </th>
                                <th> Brand </th>
                                <th> Created at </th>
                                <th> Price </th>
                                <th> Image </th>
                                <th > Action </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $desktops as $desktop)
                            <tr>
                                <td class=""> {{$loop->iteration}}  </td>
                                <td >
                                    {{$desktop->d_name}}
                                </td>
                                <td> {{$desktop->d_brand}}</td>
                                <td> {{$desktop->created_at}}</td>
                                <td> ${{$desktop->d_price}} </td>
                                <td> <img src="{{asset($desktop->d_img)}}" alt=""> </td>
                                <td>
                                    <a href="{{url('/admin/products/desktop/'.$desktop->id.'/edit')}}"><button type="button" class="btn btn-primary btn-rounded p-3"><i class="fa fa-edit"></i>Edit</button></a>
                                    <a href="{{url('/admin/products/desktop/'.$desktop->id)}}"><button type="button" class="btn btn-warning btn-rounded p-3"><i class="fa fa-address-card"></i>Show</button></a>
                                    <form id="del_form_{{$desktop->id}}" action="{{url('/admin/products/desktop/'.$desktop->id)}}"  method="POST" style="display:none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <a href="#" onclick="event.preventDefault();document.getElementById('del_form_{{$desktop->id}}').submit();" class="btn btn-danger btn-rounded p-3"><i class="fa fa-trash"></i>Delete</a>

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
