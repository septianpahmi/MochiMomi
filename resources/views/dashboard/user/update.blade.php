@foreach ($data as $item)
    <div class="modal fade" id="editUser{{ $item->id }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('user.update', $item->id) }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Nama Admin<code>*</code></label>
                                    <input type="text" value="{{ $item->name }}" class="form-control"
                                        id="name" name="name" placeholder="Masukan nama admin ..." autofocus
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email<code>*</code></label>
                                    <input type="email" value="{{ $item->email }}" class="form-control"
                                        id="email" name="email" placeholder="Masukan email ..." required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" maxlength="13" value="{{ $item->phone }}"
                                        class="form-control" id="phone" name="phone"
                                        placeholder="Masukan nomor telepon ...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password">Password<code>*</code></label>
                                    <input type="text" class="form-control" id="password" name="password"
                                        placeholder="Masukan password ..." required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach
