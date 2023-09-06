@extends('layouts.master_backend')
@section('cont')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>

                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-4 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">จำนวนสินค้า</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"></i>12</h2>
                            <span class="text-muted">ชิ้น</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">จำนวนประเภทสินค้า</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"></i>10</h2>
                            <span class="text-muted">รายการ</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">จำนวนการจอง</h4>
                        <div class="text-end">
                            <h2 class="font-light mb-0"></i>10</h2>
                            <span class="text-muted">รายการ</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
@endsection
