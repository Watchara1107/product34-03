@extends('layouts.master_backend')
@section('cont')

<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Products</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/product/index') }}">Products</a></li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <div class="mt-4">
                        <a href="{{ url('admin/product/create') }}" class="btn btn-success text-light ">+ Create New Product</a>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table user-table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Image</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Price</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Description</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $pro)
                                <tr>
                                    <td>{{ $product->firstItem() + $loop->index }}</td>
                                    <td>
                                        <img src="{{ asset('backend/images/'.$pro->image) }}" width="150px" alt="">
                                    </td>
                                    <td>{{ $pro->name }}</td>
                                    <td>{{ $pro->price }}</td>
                                    <td>{{ $pro->type->name }}</td>
                                    <td>{{ $pro->description }}</td>
                                    <td>
                                        <a href="{{ url('admin/product/edit/'.$pro->product_id) }}" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                                        <a href="{{ url('admin/product/delete/'.$pro->product_id) }}" class="btn btn-danger text-light"> <i class="fas fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>

@endsection