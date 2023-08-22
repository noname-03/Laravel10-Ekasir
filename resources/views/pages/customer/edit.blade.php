@extends('layouts.app')
@section('title', 'Perbarui Data Pelanggan')
@section('customer', 'active')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Formulir Pelanggan</h1>
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
                        <h3 class="card-title">Perbarui Data Pelanggan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('customer.update', $customer->id) }}" method="post">
                                    @csrf @method('put')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Pelanggan</label>
                                            <input type="text" class="form-control @error('name')  is-invalid @enderror"
                                                id="name" placeholder="Masukan Nama Kategori" name="name"
                                                value="{{ old('name', $customer->name) }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Nomer HP</label>
                                            <input type="number" class="form-control @error('phone')  is-invalid @enderror"
                                                id="phone" placeholder="Masukan Nama Kategori" name="phone"
                                                value="{{ old('phone', $customer->phone) }}">
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address">Alamat</label>
                                            <textarea name="address" id="address" cols="30" rows="5"
                                                class="form-control @error('address')  is-invalid @enderror" placeholder="Masukan Alamat">{{ old('address', $customer->address) }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="description">Deskripsi</label>
                                            <textarea name="description" id="description" cols="30" rows="5"
                                                class="form-control @error('description')  is-invalid @enderror" placeholder="Masukan Alamat">{{ old('description', $customer->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
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
