@extends('backend.layouts.layout')
@section('title', 'Laptop')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Laptop List</h3>
                    <a href="/products/laptop/create"><button class="btn btn-primary btn-rounded">Add Product</button></a>
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th> No </th>
                                <th> Product Name </th>
                                <th> Brand </th>
                                <th> Created at </th>
                                <th> Image </th>
                                <th > Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td> 1 </td>
                                <td>
                                    Asus Vivobook 15
                                </td>
                                <td> Asus </td>
                                <td> May 15, 2015 </td>
                                <td> <img src="{{asset('upload/imgs/products/asus1.png') }}" alt=""> </td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-primary btn-rounded "><i class="fa fa-edit"></i>Edit</button></a>
                                    <a href=""><button type="button" class="btn btn-warning btn-rounded "><i class="fa fa-address-card-o"></i>Show</button></a>
                                    <a href=""><button type="button" class="btn btn-danger btn-rounded "><i class="fa-trash-o"></i>Delete</button></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
