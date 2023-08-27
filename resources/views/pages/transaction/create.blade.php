@extends('layouts.app')
@section('title', 'Tambah Data Transaksi')
@section('data.transaction', 'menu-open')
@section('transaction.create', 'active')
@push('css')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Item</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <table style="width: 100%">
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="date">Tanggal</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="date" id="date" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top; width:30%">
                                        <label for="user">Kasir</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="user" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="date">Pelanggan</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="category_id"
                                                data-live-search="true" @error('category_id') is-invalid @enderror>
                                                @foreach ($customers as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /end col 4 -->
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <table style="width: 100%">
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="item">Item</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="category_id"
                                                data-live-search="true" @error('category_id') is-invalid @enderror>
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top; width:30%">
                                        <label for="qty">Jumlah</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="qty" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top">
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <button class="btn btn-primary">Tambah Item</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /end col 4 -->
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <div class="box box-widget">
                                <div class="box-body">
                                    <div align="right">
                                        <h4><b><span id="grand_total" style="font-size:50pt">0</span></b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /end col 4 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Item</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Diskon Item</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>134</td>
                                            <td>Jim Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>494</td>
                                            <td>Victoria Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>832</td>
                                            <td>Michael Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                        <tr>
                                            <td>982</td>
                                            <td>Rocky Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <table style="width: 100%">
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="sub_total">Sub Total</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="sub_total" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top; width:30%">
                                        <label for="discount">Diskon</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="discount" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="grand_total">Grand Total</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="grand_total" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /end col 4 -->
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <table style="width: 100%">
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="cash">Uang</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="cash" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top; width:30%">
                                        <label for="change">Kembalian</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="change" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /end col 4 -->
                    <div class="col-lg-4">
                        <div class="card card-body">
                            <table style="width: 100%">
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="note">Note</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <textarea name="note" id="note" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-danger">Reset</button>
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /end col 4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('script')
    <!-- Page specific script -->

    <!-- SweetAlert2 -->
    <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/bs/dist/js/bootstrap-select.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/bs/dist/css/bootstrap-select.css') }}">
@endpush
