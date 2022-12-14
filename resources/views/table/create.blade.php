@extends('layouts.admin.master')

@section('title')
    | Manajemen Meja
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Daftar Meja</h5>
                    <span>Menambahkan Meja Restoran</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('tables.index') }}">Daftar Meja</a></li>
                    <li class="breadcrumb-item"><a href="#!">Create Meja</a></li>
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
                                <h5>Form Tambah Meja</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('tables.store') }}" id="myForm">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Nama Meja</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="name" name="name" class="form-control" id="name" class="form-control date" aria-describedby="name" data-mask="99/99/9999">
                                </div>
                            </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                <a href="{{ route('tables.index') }}" class="btn btn-secondary btn-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
