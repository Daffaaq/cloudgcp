@extends('layouts.admin.master')

@section('title')
    - Form Menu
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Daftar Menu</h5>
                    <span>Menambahkan Menu Restoran</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Menu Restoran</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('daftar_menu.index') }}">Daftar Menu</a></li>
                    <li class="breadcrumb-item"><a href="#!">Buat Menu</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h5>Form Tambah Menu</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('daftar_menu.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <label for="name" class="col-sm-4 col-lg-2 col-form-label">Nama Menu</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <input type="text" required="required" class="form-control" name="name" id="name"
                                            aria-describedby="Name">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="desc" class="col-sm-4 col-lg-2 col-form-label">Deskripsi Menu</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend" id="basic-addon2">
                                        </span>
                                        <textarea class="form-control" name="desc" id="desc"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="price" class="col-sm-4 col-lg-2 col-form-label">Harga</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend" id="basic-addon2">
                                        </span>
                                        <input type="number" required="required" class="form-control" name="price" id="price">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="image" class="col-sm-4 col-lg-2 col-form-label">Gambar Menu</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend" id="basic-addon2"></span>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
                                </div>
                            </div>

                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                <a href="{{ route('daftar_menu.index') }}" class="btn btn-secondary btn-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
