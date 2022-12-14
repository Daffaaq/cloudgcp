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
                    <h5>Manajemen Meja</h5>
                    <span>Edit Meja Restoran</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Edit Meja</a></li>
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
                                <h5>Form Edit Meja</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('tables.update', $table->id) }}" id="myForm">
                            @csrf
                            @method('PUT') 
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Nama Meja</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="name" name="name" class="form-control" id="name" value="{{ $table->name }}" aria-describedby="name" data-mask="99/99/9999">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Status Meja</label>
                                </div>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control" id="status" aria-describedby="status">
                                        <option value="1" {{ $table->status == 1 ? 'selected' : '' }}>Available </option>
                                        <option value="2" {{ $table->status == 2 ? 'selected' : '' }}>Booked </option>
                                        <option value="3" {{ $table->status == 3 ? 'selected' : '' }}>Not Available </option>
                                    </select>   
                                </div>
                            </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('tables.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection