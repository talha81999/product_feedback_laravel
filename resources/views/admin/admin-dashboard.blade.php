@extends('admin.layouts.main')
@section('main-container')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ Main Content ] start -->
            <div class="page-breadcrumb bg-white p-3">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                        <h5 class="font-medium text-uppercase mb-2 mt-2">Manage Users</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 text-right">
                        <a href="{{ url('/admin/adduser') }}" class="btn btn-success bg-c-blue">+ Add User</a>
                    </div>
                </div>
            </div>
            <br>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

