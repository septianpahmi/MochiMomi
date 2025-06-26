<div class="modal fade" id="addProduk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('produk.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="iamge">Image<code>*</code></label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" accept="image/*"
                                            id="iamge" required>
                                        <label class="custom-file-label" for="iamge">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Produk<code>*</code></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukan nama produk ..." autofocus required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="brand_name">Nama Brand<code>*</code></label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name"
                                    placeholder="Masukan nama brand ..." required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="price">Harga<code>*</code></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="1000000" name="price"
                                        id="price" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="category_id">Kategori<code>*</code></label>
                                <select type="number" class="form-control" name="category_id" id="category_id"
                                    required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="variant">Varian<code>*</code></label>
                                <input type="text" class="form-control" id="variant" name="variant"
                                    placeholder="Masukan varian ..." required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="flavor">Flavour<code>*</code></label>
                                <input type="text" class="form-control" id="flavor" name="flavor"
                                    placeholder="Masukan flavour ..." required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="weight">Weight<code>*</code></label>
                                <div class="input-group mb-3">
                                    <input type="number" id="weight" name="weight" placeholder="1000"
                                        class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Gram</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">Deskripsi(Optional)</label>
                                <textarea type="number" id="description" name="description" placeholder="Masukan deskripsi(Optional) ..."
                                    class="form-control"></textarea>
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
