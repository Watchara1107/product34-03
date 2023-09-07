@extends('layouts.master_backend')
@section('cont')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Edit Products</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/product/index') }}">Products</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/product/edit') }}">Edit Products</a></li>

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
                        <h4 class="card-title">Edit Products</h4>


                        <form action="{{ url('admin/product/update/'.$product->product_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 mt-5">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="mt-3">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="mt-3">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                            </div>
                            <div class="mt-3">
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected>{{ $product->category_id }}</option>
                                    <option value="1">เพชร</option>
                                    <option value="2">ทอง</option>
                                    <option value="3">เงิน</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mt-3">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <img src="{{ asset('backend/images/'.$product->image) }}" width="250px" alt="">
                            </div>
                            <div class="mt-3">
                                <input type="submit" value="Create New Product" class="btn btn-primary">
                                <a href="{{ url('admin/product/index') }}" class="btn btn-danger  text-light">Back Home</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
