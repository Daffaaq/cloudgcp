@extends('layouts.admin.master')
@section('title')
| Manajeman Promo
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Promo</h5>
                    <span>Daftar Promo Restoran</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Promo</a></li>
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
                        <h5>
                            <a class="btn btn-primary btn-sm font-weight-bold p-2" style="font-size: 14px"
                                href="{{ route('promo.create') }}"><i class="fa fa-plus"></i>Tambah
                                Promo Baru</a>
                        </h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th class="text-center">Diskon</th>
                                        <th width="280px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($promo as $prm)
                                        <tr>
                                            <td>{{ $prm->id }}</td>
                                            <td>{{ $prm->name }}</td>
                                            <td>{{ $prm->description }}</td>
                                            <td>{{ $prm->start_date }}</td>
                                            <td>{{ $prm->expired_date }}</td>
                                            <td class="text-center">{{ $prm->discount }} %</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-round btn-sm" href="{{ route('promo.edit', $prm->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                <form action="{{ route('promo.destroy', $prm->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-round btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
