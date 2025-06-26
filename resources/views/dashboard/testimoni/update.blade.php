@foreach ($data as $item)
    <div class="modal fade" id="editTestimoni{{ $item->id }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Testimoni</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('testimoni.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="iamge">Image Profil</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
                                                accept="image/*" id="iamge">
                                            <label class="custom-file-label" for="iamge">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Nama <code>*</code></label>
                                    <input type="text" value="{{ $item->name }}" class="form-control"
                                        id="name" name="name" placeholder="Masukan nama ..." autofocus required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="position">Jabatan<code>*</code></label>
                                    <input type="text" value="{{ $item->position }}" class="form-control"
                                        id="position" name="position" placeholder="Masukan jabatan ..." required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="video_link">Link Video<code>*</code></label>
                                    <input type="text" value="{{ $item->video_link }}" class="form-control"
                                        id="video_link" name="video_link"
                                        placeholder="https://www.youtube.com/watch?v=..." required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="description">Deskripsi(Optional)</label>
                                    <textarea type="tex" id="description" name="description" placeholder="Masukan deskripsi(Optional) ..."
                                        class="form-control">{{ $item->description }}</textarea>
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
