@extends('layouts.admin.master')

@section('title')
| Manajemen Kategori
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Kategori Menu</h5>
                    <span>Edit Kategori</span>
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
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Kategori</a></li>
                    <li class="breadcrumb-item"><a href="#!">Edit Kategori</a></li>
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
                                <h5>Form Edit Kategori</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <label for="name" class="col-sm-4 col-lg-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                        </span>
                                        <input type="text" required="required" class="form-control" name="name" id="name"
                                            aria-describedby="Name" value="{{ $category->name }}">
                                    </div>
                                </div>
                            </div>

                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection