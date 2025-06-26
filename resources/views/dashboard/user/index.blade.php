@include('dashboard.layouts.header')
@include('dashboard.layouts.navbar')
@include('dashboard.layouts.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Majemen User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Majemen User</li>
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
                                    <h3 class="card-title">DataTable User</h3>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                        data-target="#addUser">Tambah Admin</button>
                                </div>
                                @include('dashboard.user.create')
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone ? $item->phone : '-' }}</td>
                                            <td>
                                                @foreach ($item->getRoleNames() as $role)
                                                    @if ($role == 'admin')
                                                        <span class="badge bg-primary">{{ $role }}</span>
                                                    @elseif($role == 'user')
                                                        <span class="badge bg-success">{{ $role }}</span>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm btn-block">
                                                    @if (Auth::user()->id == $item->id)
                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target="#editUser{{ $item->id }}">Edit</button>
                                                    @endif
                                                    <button type="button" class="btn btn-danger delete"
                                                        url="{{ route('user.delete', $item->id) }}"
                                                        data-id="{{ $item->id }}">Delete</button>
                                                </div>
                                                @include('dashboard.user.update')
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
