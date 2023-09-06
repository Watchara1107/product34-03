@extends('layouts.master_backend')
@section('cont')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Create New Category</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/category/index') }}">Category</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/category/create') }}">Create New Category</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Category</h4>


                        <form action="" method="post">
                            <div class="mb-3 mt-5">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                           
                            
                            <div class="mt-3">
                                <input type="submit" value="Create New Category" class="btn btn-primary">
                                <a href="{{ url('admin/category/index') }}" class="btn btn-danger  text-light">Back Home</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
