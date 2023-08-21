@extends('layouts.app')
@section('title', 'Perbarui Kategori')
@section('data.product', 'menu-open')
@section('category', 'active')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Formulir Kategori</h1>
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
                        <h3 class="card-title">Perbarui Kategori</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('category.update', $category->id) }}" method="post">
                                    @csrf @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="title">Nama Kategori</label>
                                            <input type="text"
                                                class="form-control  @error('title')
                                            is-invalid
                                        @enderror"
                                                id="title" placeholder="Masukan Nama" name="title"
                                                value="{{ old('title', $category->title) }}">
                                            @error('title')
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
