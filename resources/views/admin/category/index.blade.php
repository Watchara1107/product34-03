@extends('layouts.master_backend')
@section('cont')

<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Category</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/category/index') }}">Category</a></li>

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
                    <h4 class="card-title">Category</h4>
                    <div class="mt-4">
                        <a href="{{ url('admin/category/create') }}" class="btn btn-success text-light ">+ Create New Product</a>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table user-table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Created_at</th>
                                    <th class="border-top-0">Updated_at</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>001.jpg</td>
                                    <td>Prohaska</td>
                                    <td>12,000</td>
                                    <td>
                                        <a href="" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                                        <a href="" class="btn btn-danger text-light"> <i class="fas fa-trash"></i> </a>
                                    </td>
                                </tr>
                              
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