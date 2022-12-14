@extends('layouts.admin.master')
@section('title')
| Manajemen Promo
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Promo</h5>
                    <span>Menambahkan Promo Baru</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('promo.index') }}">Promo</a></li>
                    <li class="breadcrumb-item"><a href="#!">Buat Promo Baru</a></li>
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
                                <h5>Form Tambah Promo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('promo.store') }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <label for="name" class="col-sm-4 col-lg-2 col-form-label">Nama Promo</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <input type="text" required="required" class="form-control" name="name" id="name" aria-describedby="name">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="description" class="col-sm-4 col-lg-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <textarea class="form-control" name="description" id="description"
                                        aria-describedby="description"></textarea>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="start_date" class="col-sm-4 col-lg-2 col-form-label">Tanggal Mulai Berlaku</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <input type="date" required="required" class="form-control" name="start_date" id="start_date"
                                            aria-describedby="start_date">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="expired_date" class="col-sm-4 col-lg-2 col-form-label">Tanggal Expired</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <input type="date" required="required" class="form-control" name="expired_date" id="expired_date"
                                            aria-describedby="expired_date">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <label for="discount" class="col-sm-4 col-lg-2 col-form-label">Diskon</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <input type="text" required="required" class="form-control" name="discount" id="discount"
                                            aria-describedby="discount">
                                    </div>
                                </div>
                            </div>

                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                <a href="{{ route('promo.index') }}" class="btn btn-secondary btn-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
