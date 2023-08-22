@extends('layouts.app')
@section('title', 'Tambah Data Item')
@section('data.product', 'menu-open')
@section('item', 'active')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Formulir Item</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Item</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="category_id">Kategori</label>
                                            <select class="form-control selectpicker" name="category_id"
                                                data-live-search="true" @error('category_id') is-invalid @enderror>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="unit_id">Unit</label>
                                            <select class="form-control selectpicker" name="unit_id" data-live-search="true"
                                                @error('unit_id') is-invalid @enderror>
                                                @foreach ($units as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('unit_id')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="title">Nama Item</label>
                                            <input type="text" class="form-control  @error('title') is-invalid @enderror"
                                                id="title" placeholder="Masukan Nama Item" name="title"
                                                value="{{ old('title') }}">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="price">Harga</label>
                                            <input type="number" class="form-control  @error('price') is-invalid @enderror"
                                                id="price" placeholder="Masukan Harga Item" name="price"
                                                value="{{ old('price') }}">
                                            @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="stock">Stok</label>
                                            <input type="number" class="form-control  @error('stock') is-invalid @enderror"
                                                id="stock" placeholder="Masukan Harga Item" name="stock"
                                                value="{{ old('stock') }}">
                                            @error('stock')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="file">Photo</label>
                                            <input type="file" class="form-control  @error('file') is-invalid @enderror"
                                                id="file" placeholder="Masukan Harga Item" name="file"
                                                value="{{ old('file') }}" accept="image/*">
                                            @error('file')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </form>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('admin/bs/dist/js/bootstrap-select.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/bs/dist/css/bootstrap-select.css') }}">
@endpush
