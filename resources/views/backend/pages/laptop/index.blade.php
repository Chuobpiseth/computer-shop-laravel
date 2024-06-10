@extends('backend.layouts.layout')
@section('title', 'Laptop')
@section('content')
    <div class="row ">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Laptop List</h3>
                    <a href="{{url('/admin/products/laptop/create')}}"><button class="btn btn-primary btn-rounded p-3">Add Product</button></a>
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th> No </th>
                                <th> Product Name </th>
                                <th> Brand </th>
                                <th> Created at </th>
                                <th> Price </th>
                                <th> Image </th>
                                <th > Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $laptops as $laptop)
                            <tr>
                                <td class=""> {{$loop->iteration}} </td>
                                <td>
                                    {{$laptop->l_shortname}}
                                </td>
                                <td> {{$laptop->l_brand}} </td>
                                <td> {{$laptop->created_at}}</td>
                                <td> ${{$laptop->l_nprice}} </td>
                                <td> <img src="{{asset($laptop->l_img)}}" alt=""> </td>
                                <td>
                                    <a href="{{url('/admin/products/laptop/'.$laptop->id.'/edit')}}"><button type="button" class="btn btn-primary btn-rounded p-3"><i class="fa fa-edit"></i>Edit</button></a>
                                    <a href="{{url('/admin/products/laptop/'.$laptop->id)}}"><button type="button" class="btn btn-warning btn-rounded p-3"><i class="fa fa-address-card"></i>Show</button></a>
                                    <form id="del_form_{{$laptop->id}}" action="{{url('/admin/products/laptop/'.$laptop->id)}}"  method="POST" style="display:none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <a href="#" onclick="event.preventDefault();document.getElementById('del_form_{{$laptop->id}}').submit();" class="btn btn-danger btn-rounded p-3"><i class="fa fa-trash"></i>Delete</a>

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
