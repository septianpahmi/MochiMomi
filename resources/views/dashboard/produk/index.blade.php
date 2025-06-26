@include('dashboard.layouts.header')
@include('dashboard.layouts.navbar')
@include('dashboard.layouts.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row items-center">
                                <div class="col-6">
                                    <h3 class="card-title">DataTable Produk</h3>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                        data-target="#addProduk">Tambah Produk</button>
                                </div>
                                @include('dashboard.produk.create')
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Brand Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Varian</th>
                                        <th>Flavour</th>
                                        <th>Berat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->brand_name }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>Rp. {{ $item->price }}</td>
                                            <td>{{ $item->variant }}</td>
                                            <td>{{ $item->flavor }}</td>
                                            <td>{{ $item->weight }} Gram</td>
                                            <td>
                                                <div class="btn-group btn-group-sm btn-block">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#editProduk{{ $item->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger delete"
                                                        url="{{ route('produk.delete', $item->id) }}"
                                                        data-id="{{ $item->id }}">Delete</button>
                                                </div>
                                                @include('dashboard.produk.update')
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
@include('dashboard.layouts.footer')
