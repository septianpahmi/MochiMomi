@foreach ($data as $item)
    <div class="modal fade" id="editVisi{{ $item->id }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Visi Misi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('visi-misi.update', $item->id) }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="vision">Visi<code>*</code></label>
                                    <textarea type="text" class="form-control" id="vision" name="vision" placeholder="Masukan visi ..." autofocus
                                        required>{{ $item->vision }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="mission">Misi<code>*</code></label>
                                    <textarea type="text" class="form-control" id="mission" name="mission" placeholder="Masukan misi ..." autofocus
                                        required>{{ $item->mission }}</textarea>
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
