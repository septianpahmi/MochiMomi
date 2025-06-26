@include('dashboard.layouts.header')
@include('dashboard.layouts.navbar')
@include('dashboard.layouts.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sejarah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sejarah</li>
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
                                    <h3 class="card-title">DataTable Sejarah</h3>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                        data-target="#addSejarah">Tambah Sejarah</button>
                                </div>
                                @include('dashboard.sejarah.create')
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Judul</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td><img src="/images/sejarah/{{ $item->image }}" width="100px"
                                                    height="100px" class="img-thumbnail" alt=""></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ Str::limit($item->content, 50, '...') }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm btn-block">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#editSejarah{{ $item->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger delete"
                                                        url="{{ route('sejarah.delete', $item->id) }}"
                                                        data-id="{{ $item->id }}">Delete</button>
                                                </div>
                                                @include('dashboard.sejarah.update')
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
