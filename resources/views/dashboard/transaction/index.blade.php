@include('dashboard.layouts.header')
@include('dashboard.layouts.navbar')
@include('dashboard.layouts.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
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
                                    <h3 class="card-title">DataTable Transaksi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor HP</th>
                                        <th>Produk</th>
                                        <th>Quantity</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->transaction->customer_name }}</td>
                                            <td>{{ $item->transaction->customer_phone }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>Rp. {{ number_format($item->product->price, 0, ',', '.') }}</td>
                                            <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($item->transaction->status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($item->transaction->status == 'failed')
                                                    <span class="badge bg-danger">Dibatalkan</span>
                                                @else
                                                    <span class="badge bg-success">Berhasil</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm btn-block">
                                                    @if ($item->transaction->status == 'pending' || $item->transaction->status == 'success')
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            @if ($item->transaction->status == 'pending')
                                                                <a class="dropdown-item status"
                                                                    url="{{ route('transaksi.sukses', $item->id) }}"
                                                                    data-id="{{ $item->id }}">Selesaikan</a>
                                                                <a class="dropdown-item status"
                                                                    url="{{ route('transaksi.failed', $item->id) }}"
                                                                    data-id="{{ $item->id }}">Batalkan</a>
                                                            @elseif($item->transaction->status == 'success')
                                                                <a class="dropdown-item status"
                                                                    url="{{ route('transaksi.failed', $item->id) }}"
                                                                    data-id="{{ $item->id }}">Batalkan</a>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <button type="button" class="btn btn-danger delete"
                                                        url="{{ route('transaksi.delete', $item->id) }}"
                                                        data-id="{{ $item->id }}">Delete</button>
                                                </div>
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
