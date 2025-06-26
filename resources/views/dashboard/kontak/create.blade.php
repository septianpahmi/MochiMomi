<div class="modal fade" id="addKontak">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kontak</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('kontak.create') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address">Alamat<code>*</code></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                    </div>
                                    <input type="text" id="address" name="address" class="form-control"
                                        placeholder="Jl. Kebon Jeruk No. 1, Jakarta, Indonesia" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="whatsapp">Whatsapp<code>*</code></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" id="whatsapp" name="whatsapp" class="form-control"
                                        placeholder="62123456789" required>
                                    <span class="text-muted d-block text-sm">Note: Whatsapp wajib diisi dengan kode
                                        negara
                                        (6287*****),
                                        Whatsapp ini akan digunakan untuk redirect Pemesanan Produk. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email<code>*</code></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="jhondoe@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Phone<code>*</code></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" id="phone" name="phone" class="form-control"
                                        placeholder="62123456789" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="instagram">Insagram</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-square"></i></span>
                                    </div>
                                    <input type="text" id="instagram" name="instagram" class="form-control"
                                        placeholder="https://instagram.com/username">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text font-weight-bold">f</span>
                                    </div>
                                    <input type="text" id="facebook" name="facebook" class="form-control"
                                        placeholder="https://facebook.com/username">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tiwtter">Twitter</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text font-weight-bold">X</span>
                                    </div>
                                    <input type="text" id="tiwtter" name="tiwtter" class="form-control"
                                        placeholder="https://twitter.com/username">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                    </div>
                                    <input type="text" id="youtube" name="youtube" class="form-control"
                                        placeholder="https://youtube.com/username">
                                </div>
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
