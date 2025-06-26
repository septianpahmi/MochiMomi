@include('dashboard.layouts.header')
@include('dashboard.layouts.navbar')
@include('dashboard.layouts.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kontak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kontak</li>
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
                                    <h3 class="card-title">DataTable Kontak</h3>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                        data-target="#addKontak">Tambah Kontak</button>
                                </div>
                                @include('dashboard.kontak.create')
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Whatsapp</th>
                                        <th>Instagram</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Youtube</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ Str::limit($item->address, 10, '...') }}</td>
                                            <td>{{ Str::limit($item->email, 10, '...') }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->whatsapp }}</td>
                                            <td>{{ Str::limit($item->instagram, 10, '...') }}
                                            </td>
                                            <td>{{ Str::limit($item->facebook, 10, '...') }}
                                            </td>
                                            <td>{{ Str::limit($item->twitter, 10, '...') }}</td>
                                            <td>{{ Str::limit($item->youtube, 10, '...') }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm btn-block">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#editKontak{{ $item->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger delete"
                                                        url="{{ route('kontak.delete', $item->id) }}"
                                                        data-id="{{ $item->id }}">Delete</button>
                                                </div>
                                                @include('dashboard.kontak.update')
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
