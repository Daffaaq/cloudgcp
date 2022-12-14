@extends('layouts.admin.master')

@section('title')
| Manajemen Menu
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-list bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Daftar Menu</h5>
                    <span>Daftar Menu Restoran</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Menu Restoran</a></li>
                    <li class="breadcrumb-item"><a href="#!">Daftar Menu</a></li>
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
                                href="{{ route('daftar_menu.create') }}"><i
                                    class="fa fa-plus"></i>Tambah Menu Baru</a>
                        </h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th class="text-center">Status</th>
                                        <th width="300px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($menus as $mn)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $mn->name }}</td>
                                            <td><img width="100px"
                                                    src="{{ asset('storage/' . $mn->image) }}">
                                            </td>
                                            <td>{{ $mn->desc }}</td>
                                            <td>{{ $mn->price }}</td>
                                            <td class="text-center">
                                                @if($mn->status == 1)
                                                    <label class="label label-success">Available</label>
                                                @else
                                                    <label class="label label-danger">Empty</label>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-round btn-sm"
                                                    href="{{ route('daftar_menu.edit', $mn->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <form
                                                    action="{{ route('daftar_menu.destroy', $mn->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-round btn-sm"><i
                                                            class="fa fa-trash"></i> Delete</button>
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
