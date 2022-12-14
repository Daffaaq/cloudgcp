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
                    <span>Daftar Meja Restoran</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Daftar Meja</a></li>
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
                            <a class="btn btn-primary btn-sm font-weight-bold p-2" style="font-size: 14px" href="{{ route('tables.create') }}"><i class="fa fa-plus"></i>Tambah Meja Baru</a>
                        </h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Meja</th>
                                        <th class="text-center">Status</th>
                                        <th width="300px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tables as $table)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $table->name }}</td>
                                            <td class="text-center">
                                                @if ($table->status == 1)
                                                    <label class="label label-success">Available</label>
                                                @elseif($table->status == 2)
                                                    <label class="label label-warning">Booked</label>
                                                @else
                                                    <label class="label label-danger">Not Available</label>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-round btn-sm" href="{{ route('tables.edit', $table->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                <form action="{{ route('tables.destroy', $table->id) }}" method="POST" class="d-inline">
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
